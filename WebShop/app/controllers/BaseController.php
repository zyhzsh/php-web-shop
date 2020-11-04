<?php
    abstract class BaseController
    {
        protected function includePageElement($element)
        {
            $path='app/views/pageElement/'.$element.'.php';
            include($path);
        }
    }
?>