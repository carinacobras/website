<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ladders Controller
 *
 * @property \App\Model\Table\LaddersTable $Ladders
 *
 * @method \App\Model\Entity\Ladder[] paginate($object = null, array $settings = [])
 */
class LaddersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Players']
        ];
        $ladders = $this->paginate($this->Ladders);

        $this->set(compact('ladders'));
        $this->set('_serialize', ['ladders']);
    }

    /**
     * View method
     *
     * @param string|null $id Ladder id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ladder = $this->Ladders->get($id, [
            'contain' => ['Players', 'Competitions']
        ]);

        $this->set('ladder', $ladder);
        $this->set('_serialize', ['ladder']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ladder = $this->Ladders->newEntity();
        if ($this->request->is('post')) {
            $ladder = $this->Ladders->patchEntity($ladder, $this->request->getData());
            if ($this->Ladders->save($ladder)) {
                $this->Flash->success(__('The ladder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ladder could not be saved. Please, try again.'));
        }
        $players = $this->Ladders->Players->find('list', ['limit' => 200]);
        $this->set(compact('ladder', 'players'));
        $this->set('_serialize', ['ladder']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ladder id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ladder = $this->Ladders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ladder = $this->Ladders->patchEntity($ladder, $this->request->getData());
            if ($this->Ladders->save($ladder)) {
                $this->Flash->success(__('The ladder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ladder could not be saved. Please, try again.'));
        }
        $players = $this->Ladders->Players->find('list', ['limit' => 200]);
        $this->set(compact('ladder', 'players'));
        $this->set('_serialize', ['ladder']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ladder id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ladder = $this->Ladders->get($id);
        if ($this->Ladders->delete($ladder)) {
            $this->Flash->success(__('The ladder has been deleted.'));
        } else {
            $this->Flash->error(__('The ladder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
