<?php
// require_once "connection.php";
// $conn = DB::createConnection();
class Controller {
    protected $folder;

    public function render($view) {
        // require_once "app/views/pages/" . $view . ".php";
        $target = 'app/views/' . $this->folder .'/'. $view . '.php'; 
        if (is_file($target)) {
            ob_start();
            require_once $target;
            $content = ob_get_clean();
            require_once 'app/views/layout/template.php';
        } else {
            header('Location: index.php?c=pages&a=error');
        }

    }
}