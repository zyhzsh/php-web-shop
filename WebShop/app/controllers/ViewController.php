<?php
class ViewController{
    public function GetElement($element)
    {
        $path='app/views/pageElement/'.$element.'.php';
        include($path);
    }
}
?>