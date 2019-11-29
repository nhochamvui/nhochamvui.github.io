<?php
class CartModel {
    public function __construct() {
        echo " => food model has been called!";   
    }
public function fetchItemsFromHost()
    {
        $userID = 3;

        require_once $_SERVER["DOCUMENT_ROOT"]."/fastfood-php/connection.php";
        DB::createConnection();
        DB::checkConnection();
        
        //lay mang san pham tu iduser
        $items_query = DB::$conn->query("SELECT id, name, img, description, price
        FROM foodlist
        INNER JOIN cartdetail ON cartdetail.idFood = foodlist.id
        INNER JOIN cart ON cartdetail.idCart = cart.idCart
        WHERE cart.idUser = $userID");
        $items_query->execute();
        $results = $items_query->fetchAll(PDO::FETCH_ASSOC);
        $json_array_items = json_encode($results);

        return $json_array_items;
    }
    public function __get($name)
    {
        return $this->$name;
    }
}