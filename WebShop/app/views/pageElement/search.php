<link rel="stylesheet" href="app/views/css/searchpage.css">
<main>
<?php
function GetSearchItem()
{
    if(isset($_GET['text']))
    {
        $db= new SeachModel();
        $result=$db->GetItem( $_GET['text']);
        if(!empty($result)){
            foreach($result as $item)
            {
                echo '<div class="Search_Item_Container">
                <div class="Item_img"><a href="'.$item->Get("url").'"><div class="img_container"><img src="'.$item->Get("img").'" alt=""></a></div></div>
                <div class="Item_name"><div class="name_container">'.$item->Get("name").'</div></div>
                <div class="Item_Description"><div class="Descriptipn_content">'.$item->Get("Text").'</div></div>
                </div>';
            }
        }
        else
        {
            echo '<div class="Search_Item_Container">
               <h2 style="text-align: center"> NO Result </h2>
            </div>';
        }  
    }
}
?>
<div class="Container">
<?php GetSearchItem();?>
</div>
</main>