<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
use Cake\Mailer\Email;

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
            'limit' => 10000,
            'maxLimit' => 10000
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
        $this->Auth->allow(['add', 'logout', 'password']);
        $this->Auth->deny(['view', 'delete']);

        if ($this->Auth->user('role_id') != 2) {
            $this->Auth->deny('index');
        } else {
            $this->Auth->allow(['view', 'delete']);
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

    public function password()
    {
        if ($this->request->is('post')) {

        $this->Emails = TableRegistry::get('Emails');
        
        $query = $this->Emails->find('all',
                                [
                                    'contain' => ['Users'],
                                    'conditions' => [
                                        'email_address =' => $this->request->data['email']
                                    ]
                                ]
                            );
            $user = $query->first();

            if (is_null($user)) {
                $this->Flash->error('Email address does not exist. Please try again');
            } else {
                $passkey = uniqid();
                $url = Router::Url(['controller' => 'users', 'action' => 'reset'], true) . '/' . $passkey;
                $timeout = time() + DAY;
                 if ($this->Users->updateAll(['passkey' => $passkey, 'timeout' => $timeout], ['id' => $user->user_id])){
                    $this->sendResetEmail($url, $user);
                    $this->redirect(['action' => 'login']);
                } else {
                    $this->Flash->error('Error saving reset passkey/timeout');
                }
            }
        }
    }

    private function sendResetEmail($url, $user) {
        $email = new Email();
        $email->template('resetpw');
        $email->emailFormat('both');
        $email->from('no-reply@naidim.org');
        $email->to($user->email_address, $user->full_name);
        $email->subject('Reset your password');
        $email->viewVars(['url' => $url, 'username' => $user->username]);
        if ($email->send()) {
            $this->Flash->success(__('Check your email for your reset password link'));
        } else {
            $this->Flash->error(__('Error sending email: ') . $email->smtpError);
        }
    }

    public function reset($passkey = null) {
        if ($passkey) {
            $query = $this->Users->find('all', ['conditions' => ['passkey' => $passkey, 'timeout >' => time()]]);
            $user = $query->first();
            if ($user) {
                if (!empty($this->request->data)) {
                    // Clear passkey and timeout
                    $this->request->data['passkey'] = null;
                    $this->request->data['timeout'] = null;
                    $user = $this->Users->patchEntity($user, $this->request->data);
                    if ($this->Users->save($user)) {
                        $this->Flash->set(__('Your password has been updated.'));
                        return $this->redirect(array('action' => 'login'));
                    } else {
                        $this->Flash->error(__('The password could not be updated. Please, try again.'));
                    }
                }
            } else {
                $this->Flash->error('Invalid or expired passkey. Please check your email or try again');
                $this->redirect(['action' => 'password']);
            }
            unset($user->password);
            $this->set(compact('user'));
        } else {
            $this->redirect('/');
        }
    }
}
