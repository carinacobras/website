<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PhoneNumbers Controller
 *
 * @property \App\Model\Table\PhoneNumbersTable $PhoneNumbers
 *
 * @method \App\Model\Entity\PhoneNumber[] paginate($object = null, array $settings = [])
 */
class PhoneNumbersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $phoneNumbers = $this->paginate($this->PhoneNumbers);

        $this->set(compact('phoneNumbers'));
        $this->set('_serialize', ['phoneNumbers']);
    }

    /**
     * View method
     *
     * @param string|null $id Phone Number id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $phoneNumber = $this->PhoneNumbers->get($id, [
            'contain' => ['Users', 'Contacts']
        ]);

        $this->set('phoneNumber', $phoneNumber);
        $this->set('_serialize', ['phoneNumber']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $phoneNumber = $this->PhoneNumbers->newEntity();
        if ($this->request->is('post')) {
            $phoneNumber = $this->PhoneNumbers->patchEntity($phoneNumber, $this->request->getData());
            if ($this->PhoneNumbers->save($phoneNumber)) {
                $this->Flash->success(__('The phone number has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The phone number could not be saved. Please, try again.'));
        }
        $this->set(compact('phoneNumber'));
        $this->set('_serialize', ['phoneNumber']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Phone Number id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $phoneNumber = $this->PhoneNumbers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $phoneNumber = $this->PhoneNumbers->patchEntity($phoneNumber, $this->request->getData());
            if ($this->PhoneNumbers->save($phoneNumber)) {
                $this->Flash->success(__('The phone number has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The phone number could not be saved. Please, try again.'));
        }
        $this->set(compact('phoneNumber'));
        $this->set('_serialize', ['phoneNumber']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Phone Number id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $phoneNumber = $this->PhoneNumbers->get($id);
        if ($this->PhoneNumbers->delete($phoneNumber)) {
            $this->Flash->success(__('The phone number has been deleted.'));
        } else {
            $this->Flash->error(__('The phone number could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
