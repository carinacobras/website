<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ranks Controller
 *
 * @property \App\Model\Table\RanksTable $Ranks
 *
 * @method \App\Model\Entity\Rank[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RanksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Competitions', 'Players', 'Teams']
        ];
        $ranks = $this->paginate($this->Ranks);

        $this->set(compact('ranks'));
    }

    /**
     * View method
     *
     * @param string|null $id Rank id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rank = $this->Ranks->get($id, [
            'contain' => ['Competitions', 'Players', 'Teams']
        ]);

        $this->set('rank', $rank);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rank = $this->Ranks->newEntity();
        if ($this->request->is('post')) {
            $rank = $this->Ranks->patchEntity($rank, $this->request->getData());
            if ($this->Ranks->save($rank)) {
                $this->Flash->success(__('The rank has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rank could not be saved. Please, try again.'));
        }
        $competitions = $this->Ranks->Competitions->find('list', ['limit' => 200]);
        $players = $this->Ranks->Players->find('list', ['limit' => 200]);
        $teams = $this->Ranks->Teams->find('list', ['limit' => 200]);
        $this->set(compact('rank', 'competitions', 'players', 'teams'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rank id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rank = $this->Ranks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rank = $this->Ranks->patchEntity($rank, $this->request->getData());
            if ($this->Ranks->save($rank)) {
                $this->Flash->success(__('The rank has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rank could not be saved. Please, try again.'));
        }
        $competitions = $this->Ranks->Competitions->find('list', ['limit' => 200]);
        $players = $this->Ranks->Players->find('list', ['limit' => 200]);
        $teams = $this->Ranks->Teams->find('list', ['limit' => 200]);
        $this->set(compact('rank', 'competitions', 'players', 'teams'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rank id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rank = $this->Ranks->get($id);
        if ($this->Ranks->delete($rank)) {
            $this->Flash->success(__('The rank has been deleted.'));
        } else {
            $this->Flash->error(__('The rank could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
