<?php
    abstract class BaseController{
        protected function includeView($view){
            $path='app/views/'.$view.'.php';
            include($path);
        }
        protected function includePageElement($element){
            $path='app/views/pageElement/'.$element.'.php';
            include($path);
        }
    }
?>