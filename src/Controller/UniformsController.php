<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Uniforms Controller
 *
 * @property \App\Model\Table\UniformsTable $Uniforms
 *
 * @method \App\Model\Entity\Uniform[] paginate($object = null, array $settings = [])
 */
class UniformsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UniformColours']
        ];
        $uniforms = $this->paginate($this->Uniforms);

        $this->set(compact('uniforms'));
        $this->set('_serialize', ['uniforms']);
    }

    /**
     * View method
     *
     * @param string|null $id Uniform id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $uniform = $this->Uniforms->get($id, [
            'contain' => ['UniformColours', 'Teams']
        ]);

        $this->set('uniform', $uniform);
        $this->set('_serialize', ['uniform']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $uniform = $this->Uniforms->newEntity();
        if ($this->request->is('post')) {
            $uniform = $this->Uniforms->patchEntity($uniform, $this->request->getData());
            if ($this->Uniforms->save($uniform)) {
                $this->Flash->success(__('The uniform has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The uniform could not be saved. Please, try again.'));
        }
        $uniformColours = $this->Uniforms->UniformColours->find('list', ['limit' => 200]);
        $this->set(compact('uniform', 'uniformColours'));
        $this->set('_serialize', ['uniform']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Uniform id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $uniform = $this->Uniforms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $uniform = $this->Uniforms->patchEntity($uniform, $this->request->getData());
            if ($this->Uniforms->save($uniform)) {
                $this->Flash->success(__('The uniform has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The uniform could not be saved. Please, try again.'));
        }
        $uniformColours = $this->Uniforms->UniformColours->find('list', ['limit' => 200]);
        $this->set(compact('uniform', 'uniformColours'));
        $this->set('_serialize', ['uniform']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Uniform id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $uniform = $this->Uniforms->get($id);
        if ($this->Uniforms->delete($uniform)) {
            $this->Flash->success(__('The uniform has been deleted.'));
        } else {
            $this->Flash->error(__('The uniform could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
