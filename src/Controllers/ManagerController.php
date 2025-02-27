<?php

namespace App\Controllers;

use \App\View;
use \App\Models;
use \App\Services\ToastService as Toast;
use \App\Services\EntityService as Entities;

/**
 * Home controller
 *
 * 
 */
class ManagerController extends \App\Controller
{
	
	protected $authentication = true;
	public $page_data = ["title" => "", "description" => ""];
	
	/**
	 * ------------------------------------------------------
     * Entity Actions
	 * ------------------------------------------------------
     */		
	
    /**
     * Default will pull just the current controllers model
     *
     * @return array containing the result
     */
	public function getEntity($id = 0){
		
		return array(
			$this->route_params['controller'] => Entities::findEntity($this->route_params['controller'], $id)
		);	
	} 
	
    /**
     * Extended controllers use to update entities
     *
     * @return void
     */	
	public function updateEntity($id, $data){
		
	}

    /**
     * Extended controllers use to insert entities
     *
     * @return id
     */		
	public function insertEntity($data){ 
		return 0;
	}

    /**
     * Extended controllers use to delete entities
     *
     * @return void
     */		
	public function deleteEntity($entity){
		
		Entities::remove($entity);
		Entities::flush();
		
	}
    
	/**
	 * ------------------------------------------------------
     * Controller Actions
	 * ------------------------------------------------------
     */	

    /**
     * When the new action is called
     *
     * @return void
     */		
	public function newAction(){
		
		/* ON POST */
		if($this->isPOST() && !array_key_exists("id", $this->route_params)){
			$id = $this->insertEntity($this->post);
			header('Location: /'. $this->route_params['controller'] . '/edit/' . $id);
			die();
		}	
		
		/* ON GET */
		if($this->isGET()){
			$this->render($this->route_params['controller'] . '/form.html', $this->getEntity());
		}
	}

    /**
     * When the delete action is called
     *
     * @return void
     */		
	public function deleteAction(){

		/* ON GET */
		if($this->isGET()){
			
			$entity = Entities::findEntity($this->route_params['controller'], $this->route_params['id']);
			$this->deleteEntity($entity);
			header('Location: /'. $this->route_params['controller'] . '/list');
			die();
		}			
		
	}

    /**
     * When the edit action is called
     *
     * @return void
     */
    public function editAction(){
		
		/* ON UPDATE */
		if($this->isPOST() && array_key_exists("id", $this->route_params)){
			$this->updateEntity($this->route_params['id'], $this->post);
			toast::throwSuccess("Saved...", "Your changes were saved");
			header('Location: /'. $this->route_params['controller'] . '/edit/' . $this->route_params['id']);
			die();
		}			
		
		/* ON GET */
		if($this->isGET()){
			$this->render($this->route_params['controller'] . '/form.html', $this->getEntity($this->route_params['id']));
		}
	}	

    /**
     * When the list action is called
     *
     * @return void
     */
	public function listAction(){

		$orderBy = isset($_GET['orderby']) ? $_GET['orderby'] : "id";
		$order = isset($_GET['orderby']) ? $_GET['order'] : "desc";		
		
		$this->render($this->route_params['controller'] . '/list.html', array("entities" => Entities::findAll($this->route_params['controller'], $orderBy, $order)));

	}	

	public function indexMenu(){
		return [];
	}

    /**
     * When the index action is called
     *
     * @return void
     */
	public function indexAction(){

		$orderBy = isset($_GET['orderby']) ? $_GET['orderby'] : "id";
		$order = isset($_GET['orderby']) ? $_GET['order'] : "desc";		
		
		$this->render($this->route_params['controller'] . '/list.html', array("entities" => Entities::findAll($this->route_params['controller'], $orderBy, $order)));


	}	
	
		
}
