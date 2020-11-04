<?php
class ElementController extends BaseController
{
    public function GetElement($element)
    {
        $this->includePageElement($element);
    }
}
?>