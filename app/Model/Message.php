<?php

class Message extends AppModel {
	
	public $validate = array(
		'name' => array(
			'alpha' => array(
				'rule' 		=> 'alphaNumeric',
				'required' 	=> true,
				'message'	=> 'alpha characters only'
			),
			'between' => array(
				'rule'    => array('minLength', 5),
                'message' => 'Between 5 to 15 characters'
			)
		),
		'email' => array(
			'validEmail' => array(
				'rule' 		=> 'email',
				'required'  => true,
				'message'	=> 'Input valid email address!'
			)
		),
		'message' => array(
			'alphaNumeric' => array(
				'rule' 		=> 'alphaNumeric',
				'required' 	=> true,
				'message'	=> 'alpha numeric characters only!'
			),
			'length' => array(
				'rule' => array('minLength', 10),
				'required'	=> true,
				'message'	=> 'Min length of 10 characters only!'
			)
		)
	);
	
}