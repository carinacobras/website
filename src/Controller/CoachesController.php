<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coaches Controller
 *
 * @property \App\Model\Table\CoachesTable $Coaches
 *
 * @method \App\Model\Entity\Coach[] paginate($object = null, array $settings = [])
 */
class CoachesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Teams']
        ];
        $coaches = $this->paginate($this->Coaches);

        $this->set(compact('coaches'));
        $this->set('_serialize', ['coaches']);
    }

    /**
     * View method
     *
     * @param string|null $id Coach id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coach = $this->Coaches->get($id, [
            'contain' => ['Users', 'Teams']
        ]);

        $this->set('coach', $coach);
        $this->set('_serialize', ['coach']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coach = $this->Coaches->newEntity();
        if ($this->request->is('post')) {
            $coach = $this->Coaches->patchEntity($coach, $this->request->getData());
            if ($this->Coaches->save($coach)) {
                $this->Flash->success(__('The coach has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coach could not be saved. Please, try again.'));
        }
        $users = $this->Coaches->Users->find('list', ['limit' => 200]);
        $teams = $this->Coaches->Teams->find('list', ['limit' => 200]);
        $this->set(compact('coach', 'users', 'teams'));
        $this->set('_serialize', ['coach']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Coach id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coach = $this->Coaches->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coach = $this->Coaches->patchEntity($coach, $this->request->getData());
            if ($this->Coaches->save($coach)) {
                $this->Flash->success(__('The coach has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coach could not be saved. Please, try again.'));
        }
        $users = $this->Coaches->Users->find('list', ['limit' => 200]);
        $teams = $this->Coaches->Teams->find('list', ['limit' => 200]);
        $this->set(compact('coach', 'users', 'teams'));
        $this->set('_serialize', ['coach']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Coach id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coach = $this->Coaches->get($id);
        if ($this->Coaches->delete($coach)) {
            $this->Flash->success(__('The coach has been deleted.'));
        } else {
            $this->Flash->error(__('The coach could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
