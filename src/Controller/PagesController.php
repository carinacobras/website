<?html

<form id='s' method='post'>
  <select name="-- select --">
  <option value="Uniform Query">Uniform Query</option>
  <option value="Fees Query">Fees Query</option>
  <option value="New Player">First Time Player</option>
  <option value="General Query">General Query</option>
  <option value="Change Contact Details">Change Contact Details</option>
  </select>

<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\ContactForm;
use Cake\Mailer\Email;

/**
 * Pages Controller
 *
 * @property \App\Model\Table\PagesTable $Pages
 *
 * @method \App\Model\Entity\Page[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pages = $this->paginate($this->Pages);

        $this->set(compact('pages'));
    }

    /**
     * View method
     *
     * @param string|null $id Page id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $page = $this->Pages->get($id, [
            'contain' => []
        ]);

        $contact = new ContactForm();

        $this->loadModel('Posts');

        $posts = $this->Posts->find('all', [
            'limit' => 5,
            'order' => 'Posts.created DESC'
        ]);

        if ($this->request->is('post')) {
            if ($contact->execute($this->request->getData())) {

                $this->Flash->success(__('We will contact you shortly.'));
                $email = new Email('default');
                $email->from([$this->request->data["email"] => $this->request->data["name"]])
                      ->to("tross_cobras@tysonross.com")
                      ->subject("Enquiry from ".$this->request->data["name"])
                      ->send($this->request->data["body"]);

            } else {
                $this->Flash->error(__('There was a problem submitting your form.'));
            }
        }

        $this->set('page', $page);
        $this->set('posts', $posts);
        $this->set('contact', $contact);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $page = $this->Pages->newEntity();
        if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('The page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The page could not be saved. Please, try again.'));
        }
        $this->set(compact('page'));
    }

    if (isset($_POST['-- select --'])
    	{
    		echo "selected option: ".htmlspecialchars($_POST['-- select --'];
    		$errorMessage = "";
    	}
      
    /**
     * Edit method
     *
     * @param string|null $id Page id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $page = $this->Pages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());
            if ($this->Pages->save($page)) {
                $this->Flash->success(__('The page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The page could not be saved. Please, try again.'));
        }
        $this->set(compact('page'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Page id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $page = $this->Pages->get($id);
        if ($this->Pages->delete($page)) {
            $this->Flash->success(__('The page has been deleted.'));
        } else {
            $this->Flash->error(__('The page could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
