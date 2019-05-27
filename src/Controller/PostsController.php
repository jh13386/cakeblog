<?php 
	namespace App\Controller;
	class PostsController extends AppController {
		
		public function initialize() {
			parent::initialize();
			$this->loadComponent('Flash');
		}
		
		public function index() {
			$this->set('posts', $this->Posts->find('all', array('conditions' => array('Posts.published = 1'))));
		}
		
		public function unpublished() {
			$this->set('posts', $this->Posts->find('all', array('conditions' => array('Posts.published = 0'))));
		}
		
		public function drafts() {
			$this->set('posts', $this->Posts->find('all', array('conditions' => array('Posts.published = 3'))));
		}
		
		public function tagged($tag) {
			$this->set('posts', $this->Posts->find('all', array('conditions' => array('Posts.tags LIKE' => '%'. $tag .'%'))));
			$this->set('tagged', $tag);
		}
		
		public function view($id) {
			$post = $this->Posts->get($id);
			$this->set(compact('post'));
			
			if ($this->request->is(['post', 'put'])) {
				$this->Posts->patchEntity($post, $this->request->getData());
				if ($this->Posts->save($post)) {
					$this->Flash->success(__('The post has been approved.'));
					return $this->redirect(['action' => 'index']);
				}
				$this->Flash->error(__('Unable to approve the post.'));
			}

			$this->set('post', $post);
		}
		
		public function add() {
			$post = $this->Posts->newEntity();
			if ($this->request->is('post')) {
				$post = $this->Posts->patchEntity($post, $this->request->getData());
				if ($this->Posts->save($post)) {
					$this->Flash->success(__('Post success!'));
					return $this->redirect(['action' => 'index' ]);
				}
				$this->Flash->error(__('Post failed.'));
			}
			$this->set('post', $post);
		}
		
		public function edit($id = null) {
			$post = $this->Posts->get($id);
			if ($this->request->is(['post', 'put'])) {
				$this->Posts->patchEntity($post, $this->request->getData());
				if ($this->Posts->save($post)) {
					$this->Flash->success(__('Post success!'));
					return $this->redirect(['action' => 'index']);
				}
				$this->Flash->error(__('Post failed.'));
			}
			$this->set('post', $post);
		}
	}