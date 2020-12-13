<header>
      <nav>    
       <div class="logo"><a class="text-decoration-none" href="index.php">I'm Logo</a></div>
        <div class="mainlinks">
          <div class="categoryA"><a class="text-decoration-none" href="?page=homepage#C-Shose">SHOES</a></div>
          <div class="categoryB"><a class="text-decoration-none" href="?page=homepage#C-Watch">WATCH</a></div>
          <div class="categoryC"><a class="text-decoration-none" href="?page=homepage#C-Bag">BAG</a></div>
          <div class="about"><a class="text-decoration-none" href="?page=about">About</a></div>        
        </div>       
        <div class="iconlinks">
          <div class="user"><a href="?page=login"><i class="far fa-user fa-2x"></i></a></div>
          <div class="shoppingcart"><a href="?page=shoppingcart"><i class="fas fa-shopping-cart fa-2x"></i></a></div>
          <div class="searchbar"><input id="searchtext" type="text" name="search" value=""> </form> </div>
          <div class="btn-search"><a id="searchbtn" href="#"><i class="fas fa-search fa-2x"></i></a></div>
        </div>
        <div class="mini-navbar">
          <i class="fas fa-bars fa-3x">
            <div class="dropdown_link"><li><a href="?page=homepage#C-Shose">SHOES</a></li>
                                       <li><a href="?page=homepage#C-Watch">WATCH</a></li>
                                       <li><a href="?page=homepage#C-Bag">BAG</a></li>
                                       <li><a href="?page=login">Login</a></li>
                                       <li><a href="?page=shoppingcart">Shopping Cart</a></li>
                                       <li><a href="?page=about">About</a></li>
                                       </div>                                                          
          </i>
        </div>
      </nav>

      <script>
        let btn_search=document.getElementById("searchbtn");
        let text=document.getElementById("searchtext");
        btn_search.addEventListener("click",AddResquest);
        function AddResquest()
        {
          btn_search.href='?page=search&text='+text.value;
        }
      </script>
</header>