<?php
class client extends \atk4\data\Model {
	public $table = 'client';	
	function init() {
		parent::init();
		$this->addField('name', ['required'=>true]);
		$this->addField('surname', ['required'=>true]);
		$this->addField('email', ['required'=>true]);
		$this->addField('destination', ['required'=>true]);
		$this->addField('feedback', ['required'=>true]);
	}
}
