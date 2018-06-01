<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactsEmails Controller
 *
 * @property \App\Model\Table\ContactsEmailsTable $ContactsEmails
 *
 * @method \App\Model\Entity\ContactsEmail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsEmailsController extends AppController
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
            'contain' => ['Contacts', 'Emails']
        ];
        $contactsEmails = $this->paginate($this->ContactsEmails);

        $this->set(compact('contactsEmails'));
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
     * View method
     *
     * @param string|null $id Contacts Email id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactsEmail = $this->ContactsEmails->get($id, [
            'contain' => ['Contacts', 'Emails']
        ]);

        $this->set('contactsEmail', $contactsEmail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactsEmail = $this->ContactsEmails->newEntity();
        if ($this->request->is('post')) {
            $contactsEmail = $this->ContactsEmails->patchEntity($contactsEmail, $this->request->getData());
            if ($this->ContactsEmails->save($contactsEmail)) {
                $this->Flash->success(__('The contacts email has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacts email could not be saved. Please, try again.'));
        }
        $contacts = $this->ContactsEmails->Contacts->find('list', ['limit' => 200]);
        $emails = $this->ContactsEmails->Emails->find('list', ['limit' => 200]);
        $this->set(compact('contactsEmail', 'contacts', 'emails'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contacts Email id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactsEmail = $this->ContactsEmails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactsEmail = $this->ContactsEmails->patchEntity($contactsEmail, $this->request->getData());
            if ($this->ContactsEmails->save($contactsEmail)) {
                $this->Flash->success(__('The contacts email has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacts email could not be saved. Please, try again.'));
        }
        $contacts = $this->ContactsEmails->Contacts->find('list', ['limit' => 200]);
        $emails = $this->ContactsEmails->Emails->find('list', ['limit' => 200]);
        $this->set(compact('contactsEmail', 'contacts', 'emails'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contacts Email id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactsEmail = $this->ContactsEmails->get($id);
        if ($this->ContactsEmails->delete($contactsEmail)) {
            $this->Flash->success(__('The contacts email has been deleted.'));
        } else {
            $this->Flash->error(__('The contacts email could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
