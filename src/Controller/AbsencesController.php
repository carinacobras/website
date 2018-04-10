<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Absences Controller
 *
 * @property \App\Model\Table\AbsencesTable $Absences
 *
 * @method \App\Model\Entity\Absence[] paginate($object = null, array $settings = [])
 */
class AbsencesController extends AppController
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
            'contain' => ['Players']
        ];
        $absences = $this->paginate($this->Absences);

        $this->set(compact('absences'));
        $this->set('_serialize', ['absences']);
    }

    /**
     * View method
     *
     * @param string|null $id Absence id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $absence = $this->Absences->get($id, [
            'contain' => ['Players']
        ]);

        $this->set('absence', $absence);
        $this->set('_serialize', ['absence']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $absence = $this->Absences->newEntity();
        if ($this->request->is('post')) {
            $absence = $this->Absences->patchEntity($absence, $this->request->getData());
            if ($this->Absences->save($absence)) {
                $this->Flash->success(__('The absence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The absence could not be saved. Please, try again.'));
        }
        $players = $this->Absences->Players->find('list', ['limit' => 200]);
        $this->set(compact('absence', 'players'));
        $this->set('_serialize', ['absence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Absence id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $absence = $this->Absences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $absence = $this->Absences->patchEntity($absence, $this->request->getData());
            if ($this->Absences->save($absence)) {
                $this->Flash->success(__('The absence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The absence could not be saved. Please, try again.'));
        }
        $players = $this->Absences->Players->find('list', ['limit' => 200]);
        $this->set(compact('absence', 'players'));
        $this->set('_serialize', ['absence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Absence id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $absence = $this->Absences->get($id);
        if ($this->Absences->delete($absence)) {
            $this->Flash->success(__('The absence has been deleted.'));
        } else {
            $this->Flash->error(__('The absence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
