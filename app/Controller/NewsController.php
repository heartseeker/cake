<?php
App::uses('AppController', 'Controller');

class NewsController extends AppController {

	public $helpers = array('HTML', 'Form');

	public $uses = array('Notice');

	public function index() {

		$this->layout = 'home';

		$news = $this->Notice->find('all');

		$this->set(compact('news'));
		$this->set('title', 'Basic Cake PHP');

	}

}