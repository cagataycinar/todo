<?php

class Todo extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
    //siteAdi/ControllerAdi/methotAdi/parametre/parametre
    public function index(){

        $this->load->model("todo_model");


        $items= $this->todo_model->get_all();
//
//        print_r($items);
//        die();

        //db den aldığımız verileri, view'e göndermek için array tanımlıyoruz
        $viewData = array(
            "todos"=>$items // todos indisi view tarafında değişkene dönüşmektedir.
        );

        $this->load->view("todo_list", $viewData);
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
