<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Courts Controller
 *
 * @property \App\Model\Table\CourtsTable $Courts
 *
 * @method \App\Model\Entity\Court[] paginate($object = null, array $settings = [])
 */
class CourtsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $courts = $this->paginate($this->Courts);

        $this->set(compact('courts'));
        $this->set('_serialize', ['courts']);
    }

    /**
     * View method
     *
     * @param string|null $id Court id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $court = $this->Courts->get($id, [
            'contain' => ['Competitions', 'Locations']
        ]);

        $this->set('court', $court);
        $this->set('_serialize', ['court']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $court = $this->Courts->newEntity();
        if ($this->request->is('post')) {
            $court = $this->Courts->patchEntity($court, $this->request->getData());
            if ($this->Courts->save($court)) {
                $this->Flash->success(__('The court has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The court could not be saved. Please, try again.'));
        }
        $this->set(compact('court'));
        $this->set('_serialize', ['court']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Court id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $court = $this->Courts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $court = $this->Courts->patchEntity($court, $this->request->getData());
            if ($this->Courts->save($court)) {
                $this->Flash->success(__('The court has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The court could not be saved. Please, try again.'));
        }
        $this->set(compact('court'));
        $this->set('_serialize', ['court']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Court id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $court = $this->Courts->get($id);
        if ($this->Courts->delete($court)) {
            $this->Flash->success(__('The court has been deleted.'));
        } else {
            $this->Flash->error(__('The court could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
