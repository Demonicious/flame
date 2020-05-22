<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

class FormData {
    private $_get;
    private $_post;
    public function __construct($get, $post) {
        $this->_get = $get;
        $this->_post = $post;

        return $this;
    }

    public function Get($v) {
        $x = isset($this->_get[$v]) ? $this->_get[$v] : null;
        return $x;
    }

    public function Post($v) {
        $x = isset($this->_post[$v]) ? $this->_post[$v] : null;
        return $x;
    }
}