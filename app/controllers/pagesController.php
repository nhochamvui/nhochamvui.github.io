<?php
require_once "controller.php";
class PagesController extends Controller {
    public $string = "pages";

    public function __construct() {
        $this->folder = 'pages';
    }

    public function home() {
        $this->render('home');
    }

    public function food() {
        $this->render('food');
    }

    public function cart() {
        echo "cart";
    }

    public function error() {
        echo "error";
    }
}