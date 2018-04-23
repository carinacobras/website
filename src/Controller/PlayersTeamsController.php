<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PlayersTeams Controller
 *
 * @property \App\Model\Table\PlayersTeamsTable $PlayersTeams
 *
 * @method \App\Model\Entity\PlayersTeam[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlayersTeamsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Players', 'Teams']
        ];
        $playersTeams = $this->paginate($this->PlayersTeams);

        $this->set(compact('playersTeams'));
    }

    /**
     * View method
     *
     * @param string|null $id Players Team id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $playersTeam = $this->PlayersTeams->get($id, [
            'contain' => ['Players', 'Teams']
        ]);

        $this->set('playersTeam', $playersTeam);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $playersTeam = $this->PlayersTeams->newEntity();
        if ($this->request->is('post')) {
            $playersTeam = $this->PlayersTeams->patchEntity($playersTeam, $this->request->getData());
            if ($this->PlayersTeams->save($playersTeam)) {
                $this->Flash->success(__('The players team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The players team could not be saved. Please, try again.'));
        }
        $players = $this->PlayersTeams->Players->find('list', ['limit' => 200]);
        $teams = $this->PlayersTeams->Teams->find('list', ['limit' => 200]);
        $this->set(compact('playersTeam', 'players', 'teams'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Players Team id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $playersTeam = $this->PlayersTeams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playersTeam = $this->PlayersTeams->patchEntity($playersTeam, $this->request->getData());
            if ($this->PlayersTeams->save($playersTeam)) {
                $this->Flash->success(__('The players team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The players team could not be saved. Please, try again.'));
        }
        $players = $this->PlayersTeams->Players->find('list', ['limit' => 200]);
        $teams = $this->PlayersTeams->Teams->find('list', ['limit' => 200]);
        $this->set(compact('playersTeam', 'players', 'teams'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Players Team id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playersTeam = $this->PlayersTeams->get($id);
        if ($this->PlayersTeams->delete($playersTeam)) {
            $this->Flash->success(__('The players team has been deleted.'));
        } else {
            $this->Flash->error(__('The players team could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
