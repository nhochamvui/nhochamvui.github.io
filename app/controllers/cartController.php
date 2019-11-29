<?php

class Cart extends Controller{
    public function __construct() {
        echo " => cart controller has been constructed!";
    }

    public function addToCart() {

    }

    public function loadItems() {
        require_once './app/models/cartModel.php';
        $cartModel = new CartModel();
        $data = array();
        $foodItems = $cartModel->fetchItemsFromHost();
        $this->render('cart',$foodItems);
    }

    public function purchase() {

    }
}