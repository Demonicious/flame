<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

class FormData {
    private $_get;
    private $_post;
    public function __construct($get, $post) {
        $this->_get = $get;
        $this->_post = $post;

        return $this;
    }

    public function GET($v = null) {
        if(!$v) return $this->_get;
        return isset($this->_get[$v]) ? $this->_get[$v] : null;
    }

    public function POST($v = null) {
        if(!$v) return $this->_post;
        return isset($this->_post[$v]) ? $this->_post[$v] : null;
    }
}