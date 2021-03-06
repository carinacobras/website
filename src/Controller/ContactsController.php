<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 *
 * @method \App\Model\Entity\Contact[] paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 100000,
            'maxLimit' => 10000,
            'contain' => ['Players', 'Relationships']
        ];
        $contacts = $this->paginate($this->Contacts);

        $this->set(compact('contacts'));
        $this->set('_serialize', ['contacts']);
    }

    /**
     * View method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => ['Players', 'Relationships']
        ]);

        $this->set('contact', $contact);
        $this->set('_serialize', ['contact']);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        if ($this->Auth->user('role_id') != 2) {
            $this->Auth->deny('index');
            $this->Auth->deny('add');
            $this->Auth->deny('view');
            $this->Auth->deny('delete');
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contact = $this->Contacts->newEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact could not be saved. Please, try again.'));
        }

        $players = $this->Contacts->Players->find()
        ->contain(['Users'])
        ->limit(200)
        ->select(['Players.id', 'Users.first_name', 'Users.last_name']
        );

        $players = $players->extract(function ($player) {
            return ['id' => $player->id , 'full_name' => $player->user->first_name . ' ' . $player->user->last_name];
        });

       $players = $players->combine('id', 'full_name');
              
        $relationships = $this->Contacts->Relationships->find('list', ['limit' => 200]);
        $this->set(compact('contact', 'players', 'relationships'));
        $this->set('_serialize', ['contact']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact could not be saved. Please, try again.'));
        }
        $players = $this->Contacts->Players->find('list', ['limit' => 200]);
        $relationships = $this->Contacts->Relationships->find('list', ['limit' => 200]);
        $this->set(compact('contact', 'players', 'relationships'));
        $this->set('_serialize', ['contact']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contact = $this->Contacts->get($id);
        if ($this->Contacts->delete($contact)) {
            $this->Flash->success(__('The contact has been deleted.'));
        } else {
            $this->Flash->error(__('The contact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
