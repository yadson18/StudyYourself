<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Materials Controller
 *
 * @property \App\Model\Table\MaterialsTable $Materials
 */
class MaterialsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 8,
            'contain' => ['Users', 'Pages']
            /*,'conditions' => []*/
        ];

        $materials = $this->paginate($this->Materials);

        $role = $this->Auth->user('role');
        $this->set(compact('materials', 'role'));
        $this->set('_serialize', ['materials', 'role']);
    }

    /**
     * View method
     *
     * @param string|null $id Material id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $material = $this->Materials->get($id, [
            'contain' => ['Users', 'Pages']
        ]);
        $role = $this->Auth->user('role');

        $this->set(compact('material', 'role'));
        $this->set('_serialize', ['material', 'role']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {   
        $material = $this->Materials->newEntity();
        $page = TableRegistry::get('Pages')->newEntity();

        if ($this->request->is(['get']) && $_GET != null) {
            $material->title = $_GET["title"];
            $material->user_id = $this->Auth->user('id');

            if ($this->Materials->save($material)) {
                $page->data = $_GET["materialPage"];
                $page->material_id = $material->id;
                TableRegistry::get('Pages')->save($page);

                $json = [
                    'material_id' => $material->id,
                    'pages_id' => [$page->id]
                ];

                echo json_encode($json) . " ";
            }  
        }
        else if($this->request->is(['patch', 'post', 'put'])){
            $get_pages = [];

            $get_material = $this->Materials->get($_POST["material_id"], [
                'contain' => ['Pages']
            ]);

            $get_material->title = $_POST["title"];

            for($i = 0; $i < sizeof($_POST['pages_id']); $i++) {
                $get_pages[$i] = TableRegistry::get('Pages')->get($_POST['pages_id'][$i], ['contain' => []]);
                $get_pages[$i]->data = $_POST["materialPage"];
            }

            debug($get_pages);

            if($this->Materials->save($get_material)){
                foreach ($get_pages as $page) {
                    TableRegistry::get('Pages')->save($page);
                }
            }
        }

        $users = $this->Materials->Users->find('list', ['limit' => 200]);
        $role = $this->Auth->user('role');
        $this->set(compact('material', 'users', 'page', 'role'));
        $this->set('_serialize', ['material', 'page', 'role']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Material id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $material = $this->Materials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $material = $this->Materials->patchEntity($material, $this->request->getData());
            if ($this->Materials->save($material)) {
                $this->Flash->success(__('The material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material could not be saved. Please, try again.'));
        }
        $users = $this->Materials->Users->find('list', ['limit' => 200]);
        $role = $this->Auth->user('role');
        $this->set(compact('material', 'users', 'role'));
        $this->set('_serialize', ['material', 'role']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Material id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $material = $this->Materials->get($id);
        if ($this->Materials->delete($material)) {
            $this->Flash->success(__('The material has been deleted.'));
        } else {
            $this->Flash->error(__('The material could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function myMaterial()
    {
        $this->paginate = [
            'contain' => ['Users', 'Pages']
        ];
        
        $materials = $this->paginate($this->Materials->findByUserId($this->Auth->user('id')));
        $role = $this->Auth->user('role');
        $this->set(compact('materials', 'role'));
        $this->set('_serialize', ['materials', 'role']);
    }
}
