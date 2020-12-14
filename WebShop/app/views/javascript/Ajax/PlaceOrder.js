
let input=document.getElementsByClassName("ProvingInfo");
for(let i=0; i<input.length;i++)
{
    input[i].addEventListener("blur",SubmitionCheck);
}

//btn submit
let submitorder=document.getElementById("placeorder");
//submitorder.disabled=true;
//List of product id
let product_id=document.getElementsByClassName("product_id");

//Order info
let order_price=(document.getElementById("OrderPrice").innerText.split(' '))[3];
let customerid=document.getElementById("customer_id").innerText;

//Delivery info
let country=(document.getElementsByName("country")[0]).value;
let city=(document.getElementsByName("city")[0]).value;
let street=(document.getElementsByName("street")[0]).value;
let housenumber=(document.getElementsByName("housenumber")[0]).value;
let fristname=(document.getElementsByName("fristname")[0]).value;
let lastname=(document.getElementsByName("lastname")[0]).value;
let PostCode=(document.getElementsByName("PostCode")[0]).value;
let email=(document.getElementsByName("email")[0]).value;

SubmitionCheck();
//input check
function SubmitionCheck()
{//product_id.length==0||order_price==0||country==""||city==""||street==""||housenumber==""||fristname==""||lastname==""||PostCode==""||email==""
    if(order_price==0)
    {
        submitorder.disabled=true;
        submitorder.innerText="Filled In Enough Info To Place Order";
    }
    else
    {
        submitorder.disabled=false;
        submitorder.innerText="Order Now";
    }
}



submitorder.addEventListener("click",function(){
    //submitorder.disabled=true;
});
