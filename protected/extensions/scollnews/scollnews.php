<?php

/**
 * Description of scollnews
 *
 * @Suton Charoensiri <prasuton_123@hotmail.com>
 */
class scollnews extends CWidget{
    //put your code here
    public $new="";
    
    public function init() {
     
        parent::init();
    }
    public function run() {
        $html="<marquee>".$this->new."</marquee>";
        echo $html;
        parent::run();
    }
}
