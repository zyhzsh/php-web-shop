let customer_id=$("#customer_id");
$(window).on('load', function() {
    AddEvent();
})
function AddEvent()
{
    let cart_item_quantity=$(".amount");
    let cart_product_id=$(".product_id");
    for(let i=0;i<cart_item_quantity.length;i++)
    {
        cart_item_quantity[i].addEventListener("blur",function(){
            let quantity=cart_item_quantity[i].value;
            let productid=cart_product_id[i].innerText;
            //UpDateShoppingCarAmount(quantity,productid);
        });
    }
}
function UpDateShoppingCarAmount(quantity,productid)
{
    let UpDateRequest=new XMLHttpRequest();
    //UpDateRequest.open("POST","app/pretreatment/Customer/requestchangeamount.php");
    //UpDateRequest.open("GET","test.php");
    //alert(UpDateRequest.response.responseText);
    UpDateRequest.open("POST","test.php");
    UpDateRequest.onload=function(){
        if(UpDateRequest.status==200){
            if(UpDateRequest.response==1){
                    //Do some Animation
                    alert("dd");
            }
            else{
                alert("Amount Change Failed~!");
            }
        }
    }
    UpDateRequest.send("customer_id="+customer_id[0].innerText+"&product_id="+productid+"&quantity="+quantity);
    // let http = new XMLHttpRequest();
    // let url = 'test.php';
    // let params = 'orem=ipsum&name=binny';
    // http.open('POST',url, true);
    
    // //Send the proper header information along with the request
    // http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
    // http.onreadystatechange = function() {//Call a function when the state changes.
    //     if(http.readyState == 4 && http.status == 200) {
    //         alert(http.responseText);
    //     }
    // }
    // http.send(params);


} 