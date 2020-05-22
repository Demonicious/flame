<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

class session {
    private $session_data;
    private $flash_data;

    public function __construct() {
        $this->initalize();
    }

    public function __destruct() {
        $this->flash_data = array();
        unset($_SESSION['flash']);
    }

    public function initalize() {
        if(!isset($_SESSION)) {
            session_set_cookie_params(2592000);
            session_start();
        }
        if(!isset($_SESSION['flash'])) $_SESSION['flash'] = array();
        if(!isset($_SESSION['data'])) $_SESSION['data'] = array();
        $this->session_data = $_SESSION['data'];
        $this->flash_data = $_SESSION['flash'];
    }

    public function set($fields, $value = null) {
        if(!$value) {
            foreach($fields as $field => $value) {
                $this->session_data[$field] = $value;
            }
        } else if(!empty($fields)) {
            $this->session_data[$fields] = $value;
        }
        

        $_SESSION['data'] = $this->session_data;
    }

    public function set_flash($fields, $value = null) {
        if($value) {
            foreach($fields as $field => $value) {
                $this->flash_data[$field] = $value;
            }
        } else if(!empty($fields)) {
            $this->flash_data[$fields] = $value;
        }
        

        $_SESSION['data'] = $this->session_data;
    }

    public function get($fields) {
        $return = null;
        if(is_array($fields)) {
            $return  = array();
            foreach($fields as $field => $value) {
                if(isset($this->session_data[$field])) {
                    $return[$field] = $this->session_data[$field];
                } else $return[$field] = null;
            }
        } else if(!empty($fields)) {
            if(isset($this->session_data[$fields])) $return = $this->session_data[$fields];
        }
    
        return $return;
    }

    public function get_flash($fields) {
        $return = null;
        if(is_array($field)) {
            $return  = array();
            foreach($fields as $field => $value) {
                if(isset($this->flash_data[$field])) {
                    $return[$field] = $this->flash_data[$field];
                } else $return[$field] = null;
            }
        } else if(!empty($fields)) {
            if(isset($this->flash_data[$fields])) $return = $this->flash_data[$fields];
        }
    
        return $return;
    }

    public function unset($field = null) {
        if(!$field) {
            session_unset();
            $this->session_data = array();
            $this->flash_data = array();
        }
        else if(isset($this->session_data[$field])) {
            unset($_SESSION['data'][$field]);
            $this->session_data = $_SESSION['data'];
        }
    }

    public function destroy() {
        session_unset();
        session_destroy();
    }
}