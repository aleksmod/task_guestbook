<?php

class MainController
{
    public function index()
    {
        if (isset($_POST)) {
        	$sort = isset($_POST['sort']) ? $_POST['sort'] : 'DESC';
        	unset($_POST['sort']);
	    	$orders =(!empty($_POST)) ? implode(", ", $_POST) : 'id';
        }

        $noteModel = new NotesModel();
        $notes = $noteModel->getAll($orders, $sort); 

		global $smarty;
		$smarty->assign('notes', $notes);
        $smarty->display('main.tpl');
    }
}