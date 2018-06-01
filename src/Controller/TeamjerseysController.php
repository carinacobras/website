<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Teamjerseys Controller
 *
 * @property \App\Model\Table\TeamjerseysTable $Teamjerseys
 *
 * @method \App\Model\Entity\TeamsJersey[] paginate($object = null, array $settings = [])
 */
class TeamjerseysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 100000,
            'maxLimit' => 10000,
            'contain' => ['Teams']
        ];
        $teamsJerseys = $this->paginate($this->Teamjerseys);
        $competitions = [
"Under 7s",
"Under 9s",
"Under 11s Gold",
"Under 11s Silver",
"Under 11s Bronze",
"Under 13 Gold",
"Under 13 Silver",
"Under 13 Bronze",
"Under 15 Gold",
"Under 15 Silver",
"Under 15 Bronze",
"Under 17 Gold",
"Under 17 Silver",
"Under 17 Bronze",
"Under 20"];


        $this->set(compact('teamsJerseys', 'competitions'));
        $this->set('_serialize', ['teamsJerseys']);
    }

    /**
     * View method
     *
     * @param string|null $id Teams Jersey id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teamsJersey = $this->Teamjerseys->get($id, [
            'contain' => ['Teams']
        ]);

        $this->set('teamsJersey', $teamsJersey);
        $this->set('_serialize', ['teamsJersey']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teamsJersey = $this->Teamjerseys->newEntity();
        if ($this->request->is('post')) {
            $teamsJersey = $this->Teamjerseys->patchEntity($teamsJersey, $this->request->getData());
            if ($this->Teamjerseys->save($teamsJersey)) {
                $this->Flash->success(__('The teams jersey has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teams jersey could not be saved. Please, try again.'));
        }
        $teams = $this->Teamjerseys->Teams->find('list', ['limit' => 200]);
        $this->set(compact('teamsJersey', 'teams'));
        $this->set('_serialize', ['teamsJersey']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Teams Jersey id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teamsJersey = $this->Teamjerseys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamsJersey = $this->Teamjerseys->patchEntity($teamsJersey, $this->request->getData());
            if ($this->Teamjerseys->save($teamsJersey)) {
                $this->Flash->success(__('The teams jersey has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teams jersey could not be saved. Please, try again.'));
        }
        $teams = $this->Teamjerseys->Teams->find('list', ['limit' => 200]);
        $this->set(compact('teamsJersey', 'teams'));
        $this->set('_serialize', ['teamsJersey']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Teams Jersey id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teamsJersey = $this->Teamjerseys->get($id);
        if ($this->Teamjerseys->delete($teamsJersey)) {
            $this->Flash->success(__('The teams jersey has been deleted.'));
        } else {
            $this->Flash->error(__('The teams jersey could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
