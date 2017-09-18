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
            'contain' => ['Competitions', 'Players']
        ];

        $players = $this->Ladders->Players->find()
        ->contain(['Users'])
        ->select(['Ladders.id', 'Players.id', 'Users.first_name', 'Users.last_name']
        );

        $lads = $this->ladders + $players;
        $ladders = $this->paginate($lads);

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
            'contain' => ['Competitions', 'Players']
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
        $competitions = $this->Ladders->Competitions->find('list', ['limit' => 200]);
        $players = $this->Ladders->Players->find('list', ['limit' => 200]);
        $this->set(compact('ladder', 'competitions', 'players'));
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
        $competitions = $this->Ladders->Competitions->find('list', ['limit' => 200]);
        $players = $this->Ladders->Players->find('list', ['limit' => 200]);
        $this->set(compact('ladder', 'competitions', 'players'));
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
