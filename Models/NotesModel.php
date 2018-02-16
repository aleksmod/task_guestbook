<?php
class NotesModel
{
    public function getNote($id) 
    {
        $db = DB::getInstance();
        $query = "SELECT * FROM `notes` WHERE `id` = $id";
        return $db->query($query)->fetch_assoc();
    }

    public function getAll($orders, $sort)
    {
        $db = DB::getInstance();
        if ($sort == 'DESC') {
            $query = "SELECT * FROM `notes` ORDER BY $orders DESC LIMIT 10";
        } else {
            $query = "SELECT * FROM `notes` ORDER BY $orders ASC LIMIT 10";
        }
        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function addNew($data)
    {

        $db = DB::getInstance();
        $author = $db->real_escape_string($data['author']);
        $email = $db->real_escape_string($data['email']);
        $homepage = $db->real_escape_string($data['homepage']);
        $text = $db->real_escape_string($data['text']);
        $ip = $data['ip'];
        $browser = $data['browser'];

        $query = "INSERT INTO `notes` SET 
                  `author`       = '".$author."',
                  `email`        = '".$email."',
                  `homepage`     = '".$homepage."',
                  `text`         = '".$text."',
                  `ip`           = '".$ip."',
                  `browser`      = '".$browser."'";

        $db->query($query);
        if(!$id = $db->insert_id){
            die("error writing to the database");
        }
    }
}