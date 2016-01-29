<?php

/**
 * Controller for bingo, kept simple by using templates
 * and functionality in superclass.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

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
            $record = $this->Quotes->get(5);
            $this->data = array_merge($this->data, $record);
            
            //set page body template and render
            $this->data['pagebody'] = 'justone'; 
            $this->render();
	}

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */
