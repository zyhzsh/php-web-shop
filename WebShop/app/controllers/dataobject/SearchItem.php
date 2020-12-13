<?php 
class SearchItem{
    private $relevantname;
    private $relevantImg;
    private $relevantURL;
    private $relevantDescription;
    public function __construct($relevantname,$relevantImg,$relevantURL,$relevantDescription)
    {
        $this->relevantname=$relevantname;
        $this->relevantImg=$relevantImg;
        $this->relevantURL=$relevantURL;
        $this->relevantDescription=$relevantDescription;
    }
    public function Get($type)
    {
        switch($type)
        {
            case "name": return $this->relevantname;
            case "img": return $this->relevantImg;
            case "url": return $this->relevantURL;
            case "Text": return $this->relevantDescription;
            default: return "";
        }
    }
}
?>