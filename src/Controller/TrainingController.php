<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Training Controller
 *
 * @property \App\Model\Table\TrainingTable $Training
 *
 * @method \App\Model\Entity\Training[] paginate($object = null, array $settings = [])
 */
class TrainingController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Locations']
        ];
        $training = $this->paginate($this->Training);

        $this->set(compact('training'));
        $this->set('_serialize', ['training']);
    }

    /**
     * View method
     *
     * @param string|null $id Training id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $training = $this->Training->get($id, [
            'contain' => ['Locations', 'Competitions']
        ]);

        $this->set('training', $training);
        $this->set('_serialize', ['training']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $training = $this->Training->newEntity();
        if ($this->request->is('post')) {
            $training = $this->Training->patchEntity($training, $this->request->getData());
            if ($this->Training->save($training)) {
                $this->Flash->success(__('The training has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training could not be saved. Please, try again.'));
        }
        $locations = $this->Training->Locations->find('list', ['limit' => 200]);
        $this->set(compact('training', 'locations'));
        $this->set('_serialize', ['training']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Training id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $training = $this->Training->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $training = $this->Training->patchEntity($training, $this->request->getData());
            if ($this->Training->save($training)) {
                $this->Flash->success(__('The training has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training could not be saved. Please, try again.'));
        }
        $locations = $this->Training->Locations->find('list', ['limit' => 200]);
        $this->set(compact('training', 'locations'));
        $this->set('_serialize', ['training']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Training id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $training = $this->Training->get($id);
        if ($this->Training->delete($training)) {
            $this->Flash->success(__('The training has been deleted.'));
        } else {
            $this->Flash->error(__('The training could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
