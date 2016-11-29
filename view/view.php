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
    	return '<meta charset="UTF-8">'.
        '<script src="http://code.jquery.com/jquery-latest.js"></script>';
		// '<link rel="stylesheet" href="/bootstrap.min.css">'.
		// '<link rel="stylesheet" href="/theme.css">';
    }
    // public function output() {
    //     $tp = include_once 'adding_form.php' + include_once 'sign-in.php'+ include_once 'profile.php'+ include_once 'track_list.php';
    //     return $tp;
    // }

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