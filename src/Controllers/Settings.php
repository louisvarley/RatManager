<?php

namespace App\Controllers;

use \App\View;
use Omines\DataTablesBundle\Adapter\Doctrine\ORMAdapter;

use \App\Services\EntityService as Entities;
use \App\Services\PropertyService as Properties;
/**
 * Home controller
 *
 * PHP version 7.0
 */
 

class Settings extends \App\Controller
{

	protected $authentication = true;	
	public $page_data = ["title" => "Settings", "description" => "Config Settings"];	
	
	public function editAction(){


		if($this->isPOST()){
			$this->save($this->post);
		}

		$properties = Properties::getAllProperties();
		View::renderTemplate('Settings/form.html', array_merge(
				$this->route_params, 
				$this->page_data,
				['settings' => $properties],					
			));
	} 

	public function save($data){
		
		foreach($data['settings'] as $key => $value){
			
			/* TODO */
			Properties::getAllProperties();

		}

	}

    /**
     * When the index action is called
     *
     * @return void
     */
	public function indexAction(){


		$this->render($this->route_params['controller'] . '/index.html');

	}	
		
}
