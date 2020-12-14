<?php
session_start();
if (!isset($_SESSION['accounttype'])) {
    header("Location:?page=login&login=logintheneditshoppingcart");
}
function GetShoppingCart()
{
    $shoppingcart = new ShoppingCartController();
    $Cart_Items = $shoppingcart->Load_Shopping_Cart_Info($_SESSION['customer_id']);
    $_SESSION['ShoppingTotalCartPrice'] = 0;
    if ($Cart_Items != null) {
        foreach ($Cart_Items as $item) {
            echo '
            <div class="product_id" style="display:none">'.$item['product_id'].'</div>
            <div class="shoppingcart_item_container">
            <div class="productimgcontainer"><a href="?page=productinfo&product=' . $item['product_id'] . '">
                <img src="' . $item['img_link'] . '" alt=""></a>
            </div>
            <div class="productname">' . $item['product_name'] . '</div>
            <div class="productunitprice">' . $item['current_price'] . ' EUR</div>
            <div class="productamount"><input class="ProvingInfo amount" type="number" min=1 max=100 value=' . $item['quantity'] . '></div>
            <div class="price">' . $item['quantity'] * $item['current_price'] . 'EUR</div>
            <div class="btn-remove">
                <form method="post" action="app/pretreatment/Customer/removeproduct.php">
                    <input class="ProvingInfo" type="hidden" name="productid" value="' . $item['product_id'] . '"></input>
                    <button class="ui-button">Remove</button>
                </form>
            </div>
            </div>';
            $_SESSION['ShoppingTotalCartPrice'] += $item['quantity'] * $item['current_price'];
        }
    }
}

function GetCheckOut()
{
    echo '<div class="order_detail">
        <div class="ordercontainer">';
        //<form action="app/pretreatment/Customer/submitOrder.php">
    echo' <br>
        <div id="OrderPrice">Total Price : <span id="Total_Price">' . $_SESSION['ShoppingTotalCartPrice'] . ' EUR</span></div> <br>
        <h4>Deliver Information: </h4><br>
        <label for="country"> Country: </label>
        <input class="ProvingInfo" type="text" name="country" value="' . $_SESSION['country'] . '" placeholder="Country">
        <label for="city"> City: </label>
        <input class="ProvingInfo" type="text" name="city" value="' . $_SESSION['city'] . '" placeholder="City"><br>
        <label for="street"> Street: </label>
        <input class="ProvingInfo" type="text" style="width:224px" name="street" value="' . $_SESSION['street'] . '" placeholder="Street"><br>
        <label for="housenumber"> House Number: </label>
        <input class="ProvingInfo" type="text" style="width:143px" name="housenumber" value="' . $_SESSION['housenumber'] . '" placeholder="Hourse number"><br>
        <label for="fristname lastname"> Receiver: </label>
        <input class="ProvingInfo" type="text"  name="fristname" value="' . $_SESSION['firstname'] . '" placeholder="Frist name">
        <input class="ProvingInfo" type="text"  name="lastname" value="' . $_SESSION['lastname'] . '" placeholder="Last name"><br>
        <label for="PostCode"> PostCode: </label>
        <input class="ProvingInfo" type="text"  name="PostCode" value="' . $_SESSION['postcode'] . '" placeholder="Post Code"><br>
        <label for="email"> Email: </label>
        <input class="ProvingInfo" type="text"  style="width:220px" name="email" value="' . $_SESSION['email'] . '" placeholder="Email">
        <br><br><div><button id="placeorder" class="ui-button">Order Now</button></div><br>
        ';
        //</form>
    echo'</div>
        </div>';
}
?>>
<link rel="stylesheet" href="app/views/css/shoppingcart.css">
<main>
<div style="display: none" id="customer_id"><?php echo $_SESSION['customer_id'];?></div>
    <div class="order_container">
        <div class="shoppingcart_container">
            <h2>Shoppping Cart</h2>
            <?php
            GetShoppingCart();
            ?>
        </div>
        <div class="checkout_container">
            <h2>Order Information</h2>
            <?php
            GetCheckOut();
            ?>
        </div>
    </div>
    <script type="text/javascript" src="app/views/javascript/Ajax/UpDateAmount.js"></script>
    <script type="text/javascript" src="app/views/javascript/Ajax/PlaceOrder.js"></script>
    <script type="text/javascript" src="app/views/javascript/Effect/PriceCalculator.js"></script>
</main>