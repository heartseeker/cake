<?php
App::uses('AppController', 'Controller');

class NewsController extends AppController {

	public $helpers = array('HTML', 'Form');

	public function index() {

		$this->layout = 'home';

		$this->set('title', 'Basic Cake PHP');

	}

}