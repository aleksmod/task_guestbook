<?php

class NotesController
{
    public function index()
    {
        global $smarty;
        $smarty->display('new_note.tpl');
    }

    public function new()
    {
        $captcha = isset($_SESSION['captcha']) ? $_SESSION['captcha'] : false;
        
        $data = [];
        if (isset($_POST)) {
            $data['author'] = $_POST['author'];
            $data['email']  = $_POST['email'];
            $data['homepage'] = $_POST['homepage'];
            $data['text'] = $_POST['text'];
            $data['ip'] = $_SERVER['REMOTE_ADDR'];
            $data['browser'] = $_SERVER['HTTP_USER_AGENT'];
        }

        if ($_POST['captcha'] != $captcha) {
            die('Incorrect value captcha');
        }

        $note = new NotesModel;
        $note->addNew($data);
        header('Location: /');
    }
}
