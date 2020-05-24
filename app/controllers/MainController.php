<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

class MainController extends FlameController {
    public function index() {
        
        // app/views/homepage.blade.php
        Flame::View('homepage')->Render();
    }
}