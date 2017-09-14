<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UniformColours Controller
 *
 * @property \App\Model\Table\UniformColoursTable $UniformColours
 *
 * @method \App\Model\Entity\UniformColour[] paginate($object = null, array $settings = [])
 */
class UniformColoursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $uniformColours = $this->paginate($this->UniformColours);

        $this->set(compact('uniformColours'));
        $this->set('_serialize', ['uniformColours']);
    }

    /**
     * View method
     *
     * @param string|null $id Uniform Colour id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $uniformColour = $this->UniformColours->get($id, [
            'contain' => ['Uniforms']
        ]);

        $this->set('uniformColour', $uniformColour);
        $this->set('_serialize', ['uniformColour']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $uniformColour = $this->UniformColours->newEntity();
        if ($this->request->is('post')) {
            $uniformColour = $this->UniformColours->patchEntity($uniformColour, $this->request->getData());
            if ($this->UniformColours->save($uniformColour)) {
                $this->Flash->success(__('The uniform colour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The uniform colour could not be saved. Please, try again.'));
        }
        $this->set(compact('uniformColour'));
        $this->set('_serialize', ['uniformColour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Uniform Colour id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $uniformColour = $this->UniformColours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $uniformColour = $this->UniformColours->patchEntity($uniformColour, $this->request->getData());
            if ($this->UniformColours->save($uniformColour)) {
                $this->Flash->success(__('The uniform colour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The uniform colour could not be saved. Please, try again.'));
        }
        $this->set(compact('uniformColour'));
        $this->set('_serialize', ['uniformColour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Uniform Colour id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $uniformColour = $this->UniformColours->get($id);
        if ($this->UniformColours->delete($uniformColour)) {
            $this->Flash->success(__('The uniform colour has been deleted.'));
        } else {
            $this->Flash->error(__('The uniform colour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
