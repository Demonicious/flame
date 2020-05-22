<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

class FlameController {
    protected $Server;
    protected $Request;
    protected $Headers;
    protected $FormData;

    public function __construct() {
        $this->Server = $_SERVER;
        $this->Request = $_REQUEST;
        $this->Headers = getallheaders();
        $this->FormData = new FormData($_GET, $_POST);

        $al_m = Flame::ConfigItem('autoload')['models'];
        $al_l = Flame::ConfigItem('autoload')['libraries'];
        $al_s = Flame::ConfigItem('autoload')['services'];

        foreach($al_m as $model) { $this->$model = Flame::Model($model); }
        foreach($al_l as $library) { $this->$library = Flame::Library($library); }
        foreach($al_s as $service) { $this->$service = Flame::Service($service); }
    }

    protected function getJSON($assoc = true) {
        $data = json_decode(file_get_contents('php://input'), $assoc);
        return $data;
    }

    protected function ResponseJSON($array, $code = 200) {
        header('Content-Type: application/json');
        echo json_encode($array);
        $this->ResponseCode($code);
        exit();
    }

    protected function ResponseText($text, $code = 200) {
        header('Content-Type: text/plain');
        echo $text;
        $this->ResponseCode($code);
        exit();
    }

    protected function ResponseCode($code) {
        if (!function_exists('http_response_code')) {
            function http_response_code($newcode = NULL) {
                static $code = 200;
                if($newcode !== NULL) {
                    header('X-PHP-Response-Code: '.$newcode, true, $newcode);
                    if(!headers_sent())
                        $code = $newcode;
                }       
                return $code;
            }
        }

        http_response_code($code);
    }
}