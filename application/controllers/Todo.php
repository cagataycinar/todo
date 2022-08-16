<?php

class Todo extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
    //siteAdi/ControllerAdi/methotAdi/parametre/parametre
    public function index(){

        $this->load->view("todo_list");
    }
    public function insert(){

        echo "Ekleme İşlemi Olacak";
    }

    public function delete(){
        echo "Silme İşlemi Olacak";

    }
    public function isCompleteSetter(){
        echo "Durum Değiştirme İşlemi Olacak";

    }

}
