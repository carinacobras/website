<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * ContactsPhonenumbers Controller
 *
 * @property \App\Model\Table\ContactsPhonenumbersTable $ContactsPhonenumbers
 *
 * @method \App\Model\Entity\ContactsPhonenumber[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsPhonenumbersController extends AppController
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
            'contain' => ['Contacts' => ['Players'], 'PhoneNumbers']
        ];
        $contactsPhonenumbers = $this->paginate($this->ContactsPhonenumbers);

        $this->set(compact('contactsPhonenumbers'));
    }

    /**
     * View method
     *
     * @param string|null $id Contacts Phonenumber id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactsPhonenumber = $this->ContactsPhonenumbers->get($id, [
            'contain' => ['Contacts', 'PhoneNumbers']
        ]);

        $this->set('contactsPhonenumber', $contactsPhonenumber);
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
        $contactsPhonenumber = $this->ContactsPhonenumbers->newEntity();
        if ($this->request->is('post')) {
            $contactsPhonenumber = $this->ContactsPhonenumbers->patchEntity($contactsPhonenumber, $this->request->getData());
            if ($this->ContactsPhonenumbers->save($contactsPhonenumber)) {
                $this->Flash->success(__('The contacts phonenumber has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacts phonenumber could not be saved. Please, try again.'));
        }
        $contacts = $this->ContactsPhonenumbers->Contacts->find('list', ['limit' => 200]);
        $phoneNumbers = $this->ContactsPhonenumbers->PhoneNumbers->find('list', ['limit' => 200]);
        $this->set(compact('contactsPhonenumber', 'contacts', 'phoneNumbers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contacts Phonenumber id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactsPhonenumber = $this->ContactsPhonenumbers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactsPhonenumber = $this->ContactsPhonenumbers->patchEntity($contactsPhonenumber, $this->request->getData());
            if ($this->ContactsPhonenumbers->save($contactsPhonenumber)) {
                $this->Flash->success(__('The contacts phonenumber has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacts phonenumber could not be saved. Please, try again.'));
        }
        $contacts = $this->ContactsPhonenumbers->Contacts->find('list', ['limit' => 10000]);
        $phoneNumbers = $this->ContactsPhonenumbers->PhoneNumbers->find('list', ['limit' => 10000]);
        $this->set(compact('contactsPhonenumber', 'contacts', 'phoneNumbers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contacts Phonenumber id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactsPhonenumber = $this->ContactsPhonenumbers->get($id);
        if ($this->ContactsPhonenumbers->delete($contactsPhonenumber)) {
            $this->Flash->success(__('The contacts phonenumber has been deleted.'));
        } else {
            $this->Flash->error(__('The contacts phonenumber could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
