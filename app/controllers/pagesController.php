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
        echo " => Pages Controller has been called!";
        echo " => calling cart controller...";
        include_once 'cartController.php';
        $cartController = new Cart();
        $cartController->loadItems();
    }

    public function error() {
        echo "error";
    }
}