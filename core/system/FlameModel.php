<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

class FlameModel {
    protected $session;
    protected $db;

    public function __construct() {
        $session = null;
        $db = null;

        $al_s = Flame::ConfigItem('autoload')['services'];
        $al_l = Flame::ConfigItem('autoload')['libraries'];

        foreach($al_s as $service) { $this->$service = Flame::Service($service); }
        foreach($al_l as $library) { $this->$library = Flame::Library($library); }
    }
}