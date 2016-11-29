<?php 

require_once '././model/model.php';

class Controller
{
    private $model;
    public function __construct($model){
        $this->model = $model;
    }
    public function clicked() {

    }
}
 ?>