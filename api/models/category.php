<?php

    function db() {
        return new DB\SQL(
                'mysql:host=127.0.0.1;port=8889;dbname=meloman',
                'root',
                'root'
        );
        $db = $this->db();
    }

class category{
        /* Get all category */
        function getCategory($id_category){
                $db = db();
                $db->begin();
                $data = $db->exec('SELECT * FROM m_song WHERE fk_id_category = '.$id_category);

                return $data;
        }

}