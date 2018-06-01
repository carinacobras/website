<?php
namespace App\Controller;

use App\Controller\AppController;

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
            'contain' => ['Contacts', 'Phonenumbers']
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
            'contain' => ['Contacts', 'Phonenumbers']
        ]);

        $this->set('contactsPhonenumber', $contactsPhonenumber);
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
        $phonenumbers = $this->ContactsPhonenumbers->Phonenumbers->find('list', ['limit' => 200]);
        $this->set(compact('contactsPhonenumber', 'contacts', 'phonenumbers'));
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
        $contacts = $this->ContactsPhonenumbers->Contacts->find('list', ['limit' => 200]);
        $phonenumbers = $this->ContactsPhonenumbers->Phonenumbers->find('list', ['limit' => 200]);
        $this->set(compact('contactsPhonenumber', 'contacts', 'phonenumbers'));
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
