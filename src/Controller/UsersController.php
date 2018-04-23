<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function index()
    {
        $this->paginate = [
            'limit' => 100000
        ];
        
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Coaches', 'Emails', 'Managers', 'Phonenumbers', 'Players', 'UsersRoles']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();

        $this->Phonenumbers = TableRegistry::get('Phonenumbers');
        $this->Emails = TableRegistry::get('Emails');
        
        $this->Players = TableRegistry::get('Players');
        $this->Teams = TableRegistry::get('Teams');
        $teams_list = $this->Teams->find('list', array(
            // 'conditions' => ['Competitions.age <' => 10],
            'contain' => ['Competitions'],
            'fields' => ['id', 'full_title']
        ));

        if ($this->request->is('post')) {

            $user = $this->Users->patchEntity($user, $this->request->getData());
            $saveuser = $this->Users->save($user);
            if ($saveuser) {
                $phonenumbers = $this->request->data('phonenumbers');

                foreach ($phonenumbers as $phonenumber) {
                    $data = [
                    'user_id'    => $user->id,
                    'number'    => $phonenumber
                    ];
                    $phonenumberEntity = $this->Users->Phonenumbers->newEntity();
                    $this->Phonenumbers->patchEntity($phonenumberEntity, $data);
                    $this->Phonenumbers->save($phonenumberEntity);
                }

                $emails = $this->request->data('Emails');

                foreach ($emails as $email) {
                    $data = [
                    'user_id'    => $user->id,
                    'email_address'    => $email
                    ];
                    $emailEntity = $this->Users->Emails->newEntity();
                    $this->Emails->patchEntity($emailEntity, $data);
                    $this->Emails->save($emailEntity);
                }
                

                if ($this->request->data["is_player"] == 1) {
                    $player = $this->Players->newEntity();
                    $this->loadModel('PlayersTeams');

                    $playerdata = [
                        'user_id'    => $saveuser->id,
                        'height'    => $this->request->data["height"],
                        'experience'    => $this->request->data["experience"],
                    ];
                    $this->Players->patchEntity($player, $playerdata);
                    $saveplayer = $this->Players->save($player);

                    if ($saveplayer) {
                        $teams = $this->request->data('teams');

                        foreach ($teams as $team) {
                            $data = [
                            'player_id'    => $saveplayer->id,
                            'team_id'    => $team
                            ];
                            $playerteamEntity = $this->PlayersTeams->newEntity();
                            $this->PlayersTeams->patchEntity($playerteamEntity, $data);
                            $this->PlayersTeams->save($playerteamEntity);
                        }
                    }
         
                }

                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
                
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
        $this->set('teams', $teams_list);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Coaches', 'Emails', 'Managers', 'Phonenumbers', 'Players', 'UsersRoles']
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData(), [
                'associated' => ['Emails', 'Phonenumbers']
                ]);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout']);

        if ($this->Auth->user('role_id') != 2) {
            $this->Auth->deny('index');
        }
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
