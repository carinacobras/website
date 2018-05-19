<?php
namespace App\Controller;

use App\Controller\AppController;

use Goutte\Client;

require dirname(__DIR__) . '/../vendor/autoload.php';

class GamesController extends AppController
{

    public function index()
    {
        // $this->paginate = [
        //     'limit' => 100000,
        //     'contain' => ['Teams', 'Competitions', 'Locations']
        // ];
        // $games = $this->paginate($this->Games);
        $client = new Client();
        $crawler = $client->request('GET', 'http://websites.sportstg.com/club_info.cgi?c=1-4703-65492-396821-0&a=TEAMS&');

        $this->set('crawler', $crawler);
    }

    /**
     * View method
     *
     * @param string|null $id Game id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        // $game = $this->Games->get($id, [
        //     'contain' => ['Teams', 'Competitions', 'Locations']
        // ]);

        // $this->set('game', $game);
    }
}
