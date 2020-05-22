<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

class FlameView {
    private $plain_html;
    public function __construct($text) {
        $this->plain_html = $text;
        return $this;
    }

    public function Text() {
        return $this->plain_html;
    }

    public function Render() {
        echo $this->plain_html;
        return $this;
    }
}