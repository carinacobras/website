<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TeamsJerseys Controller
 *
 * @property \App\Model\Table\TeamsJerseysTable $TeamsJerseys
 *
 * @method \App\Model\Entity\TeamsJersey[] paginate($object = null, array $settings = [])
 */
class TeamsJerseysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teams']
        ];
        $teamsJerseys = $this->TeamsJerseys->find('all');
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
        $teamsJersey = $this->TeamsJerseys->get($id, [
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
        $teamsJersey = $this->TeamsJerseys->newEntity();
        if ($this->request->is('post')) {
            $teamsJersey = $this->TeamsJerseys->patchEntity($teamsJersey, $this->request->getData());
            if ($this->TeamsJerseys->save($teamsJersey)) {
                $this->Flash->success(__('The teams jersey has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teams jersey could not be saved. Please, try again.'));
        }
        $teams = $this->TeamsJerseys->Teams->find('list', ['limit' => 200]);
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
        $teamsJersey = $this->TeamsJerseys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamsJersey = $this->TeamsJerseys->patchEntity($teamsJersey, $this->request->getData());
            if ($this->TeamsJerseys->save($teamsJersey)) {
                $this->Flash->success(__('The teams jersey has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teams jersey could not be saved. Please, try again.'));
        }
        $teams = $this->TeamsJerseys->Teams->find('list', ['limit' => 200]);
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
        $teamsJersey = $this->TeamsJerseys->get($id);
        if ($this->TeamsJerseys->delete($teamsJersey)) {
            $this->Flash->success(__('The teams jersey has been deleted.'));
        } else {
            $this->Flash->error(__('The teams jersey could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
