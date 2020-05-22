<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

class MainController extends FlameController {
    public function index() {
        Flame::View('homepage')->Render();
    }
}