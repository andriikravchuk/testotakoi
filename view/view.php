<?php 
require_once '././model/model.php';
require_once '././controller/controller.php';


class View
{
    private $model;
    private $controller;
    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output_style() {
    	return '<meta charset="UTF-8">';
    }

    public function output_adding_form() {
        include_once 'adding_form.php';
    }

    public function output_sign_in() {
        include_once 'sign-in.php';
    }

    public function output_profile() {
    	include_once 'profile.php';
    }

    public function output_track_list() {
		include_once 'track_list.php';
    }
}
?>