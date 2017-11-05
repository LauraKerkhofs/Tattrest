<?php
class Pagina_Data {
    public $titel = "";
    public $content = "";
    public $css = "";
    public $embeddedStyle = "";
    public $jsCode = "";

    public function addCSS( $href ){
		$this->css .= "<link href='$href' rel='stylesheet'/>";
	}
}
