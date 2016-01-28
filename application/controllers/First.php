<?php

/**
 * Controller for the first quote, kept simple by using templates
 * and functionality in superclass.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
            $this->load->model('Quotes'); //load the model
            //grab data from the first quote
            $record = $this->quotes->first();
            $this->data = array_merge($this->data, $record);
            
            //set page body template and render
            $this->data['pagebody'] = 'justone'; 
            $this->render();
	}

}

/* End of file First.php */
/* Location: application/controllers/First.php */
