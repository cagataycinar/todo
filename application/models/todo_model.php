<?php
class Todo_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public $tableName = "todos";

    public function get_all(){
       return $this->db->get($this->tableName)->result();
    }
    public function insert(){

    }
    public function delete(){

    }
    public function update(){

    }
}
