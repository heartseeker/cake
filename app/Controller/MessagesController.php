<?php
App::uses('AppController', 'Controller');

class MessagesController extends AppController {

	public $components = array('Session', 'RequestHandler');
	public $helpers = array('HTML', 'Form', 'Js');

	public function index() {

		$this->layout = 'home';
		if(!empty($this->request->data)) {
			if($this->Message->save($this->request->data)) {
				$this->Session->setFlash('Your message has been submited!');
				$this->redirect(array('controller' => 'messages', 'action' => 'index'));
			}
		}
		$errors = $this->Message->validationErrors;
		

		$this->set(compact('errors'));
		$this->set('title', 'Cake PHP Contact Form');

	}

}