<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TeamsCoaches Controller
 *
 * @property \App\Model\Table\TeamsCoachesTable $TeamsCoaches
 *
 * @method \App\Model\Entity\TeamsCoach[] paginate($object = null, array $settings = [])
 */
class TeamsCoachesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teams', 'Coaches']
        ];
        $teamsCoaches = $this->paginate($this->TeamsCoaches);

        $this->set(compact('teamsCoaches'));
        $this->set('_serialize', ['teamsCoaches']);
    }

    /**
     * View method
     *
     * @param string|null $id Teams Coach id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teamsCoach = $this->TeamsCoaches->get($id, [
            'contain' => ['Teams', 'Coaches']
        ]);

        $this->set('teamsCoach', $teamsCoach);
        $this->set('_serialize', ['teamsCoach']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teamsCoach = $this->TeamsCoaches->newEntity();
        if ($this->request->is('post')) {
            $teamsCoach = $this->TeamsCoaches->patchEntity($teamsCoach, $this->request->getData());
            if ($this->TeamsCoaches->save($teamsCoach)) {
                $this->Flash->success(__('The teams coach has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teams coach could not be saved. Please, try again.'));
        }
        $teams = $this->TeamsCoaches->Teams->find('list', ['limit' => 200]);
        $coaches = $this->TeamsCoaches->Coaches->find('list', ['limit' => 200]);
        $this->set(compact('teamsCoach', 'teams', 'coaches'));
        $this->set('_serialize', ['teamsCoach']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Teams Coach id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teamsCoach = $this->TeamsCoaches->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamsCoach = $this->TeamsCoaches->patchEntity($teamsCoach, $this->request->getData());
            if ($this->TeamsCoaches->save($teamsCoach)) {
                $this->Flash->success(__('The teams coach has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teams coach could not be saved. Please, try again.'));
        }
        $teams = $this->TeamsCoaches->Teams->find('list', ['limit' => 200]);
        $coaches = $this->TeamsCoaches->Coaches->find('list', ['limit' => 200]);
        $this->set(compact('teamsCoach', 'teams', 'coaches'));
        $this->set('_serialize', ['teamsCoach']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Teams Coach id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teamsCoach = $this->TeamsCoaches->get($id);
        if ($this->TeamsCoaches->delete($teamsCoach)) {
            $this->Flash->success(__('The teams coach has been deleted.'));
        } else {
            $this->Flash->error(__('The teams coach could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
