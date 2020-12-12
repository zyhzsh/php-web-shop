let cart_item_unit_price=$(".productunitprice");
let cart_item_quantity=$(".amount");
let cart_item_price=$(".price");
let totalprice=$("#Total_Price");


$(window).on('load', function() {
    Event_When_Change_Cart_Item_Amount();
})

//Event
function Event_When_Change_Cart_Item_Amount()
{
    for(let i=0; i<cart_item_quantity.length;i++)
    {
        cart_item_quantity[i].addEventListener("click",function(){
        let quantity=cart_item_quantity[i].value;
        let uniprice=cart_item_unit_price[i].innerText.split(' ')[0];
        CalculatorPrice(quantity,uniprice,i);
        });
    }
}

//Event Functions
function CalculatorPrice(quantity,unitprice,index)
{ 
    //Display Price Change on Shopping Cart
    cart_item_price[index].innerText=unitprice*quantity+" EUR";
    let price=0;
    for(let i=0; i<cart_item_quantity.length;i++)
    {
        quantity=cart_item_quantity[i].value;
        unitprice=cart_item_unit_price[i].innerText.split(' ')[0];
        price=price+quantity*unitprice;
    }
    totalprice[0].innerText= price +' EUR';
}


