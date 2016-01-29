<?php

/**
 * Controller for the last quote, kept simple by using templates
 * and functionality in superclass.
 * 
 * controllers/Lab.php
 *
 * ------------------------------------------------------------------------
 */
class Last extends Application {

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
            //grab data from the last quote
            $record = $this->Quotes->last();
            $this->data = array_merge($this->data, $record);
            
            //set page body template and render
            $this->data['pagebody'] = 'justone'; 
            $this->render();
	}

}

/* End of file last.php */
/* Location: application/controllers/Last.php */
