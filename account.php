<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="account/css/welcome.css">
<link rel="stylesheet" type="text/css" href="account/css/account-bar.css">
<link rel="stylesheet" type="text/css" href="account/css/basket.css">
<link rel="stylesheet" type="text/css" href="account/css/favorites.css">
<link rel="stylesheet" type="text/css" href="account/css/last-views.css">
<link rel="stylesheet" type="text/css" href="account/css/messages.css">
<link rel="stylesheet" type="text/css" href="account/css/my-comments.css">

<link rel="stylesheet" type="text/css" href="account/css/settings-nav.css">
<link rel="stylesheet" type="text/css" href="account/css/account-history.css">
<link rel="stylesheet" type="text/css" href="account/css/account-address.css">
<link rel="stylesheet" type="text/css" href="account/css/create-store.css">
<link rel="stylesheet" type="text/css" href="account/css/seller-add-products.css">
<link rel="stylesheet" type="text/css" href="account/css/delete-products.css">

<style>
  /*@media (max-width: 485px) {
    .acount-nav{
       position: absolute;
    }
    

  }*/
</style>
</head>
<body>

<?php
      include "nav-group.php"; 
      include "mobile-navbar.php"; 
?>
<section class="pt-4 account-section">
	<div class="container-fluid account-container">
		<div class="row ">Homepage > My Account > Basket</div>
    <div class="row account-open-bar-row">
        <div class="account-open-bar mt-3 pt-2">
           <img src="icons/icon-user-mobile.svg">
        </div>
    </div>
		<div class="row account-mobile-contents">
			<?php include "account/account-bar.php"; ?>

  <div class="col-lg-9 col-sm-12 col-xs-12 mt-3">
    <div class="tab-content mt-0" id="v-pills-tabContent">
      <!-- <div class="tab-pane fade show active" id="v-pills-welcome-buyer" role="tabpanel" aria-labelledby="v-pills-welcome-tab">
          include "account/account-welcome-buyer.php"; 
      </div> -->
      <!--  -->
       <div class="tab-pane fade show" id="v-pills-create-store" role="tabpanel" aria-labelledby="v-pills-create-store-tab">
         <?php include "account/create-store.php"; ?>
      </div>
      <!-- --------back if seller-> active class set seller------------------ -->
      <div class="tab-pane fade show active" id="v-pills-welcome-seller" role="tabpanel" aria-labelledby="v-pills-welcome-tab">
         <?php include "account/account-welcome-seller.php"; ?>
      </div>
      <div class="tab-pane fade show " id="v-pills-basket" role="tabpanel" aria-labelledby="v-pills-basket-tab">
      	 <?php include "account/basket.php"; ?>
      </div>
      <div class="tab-pane fade show " id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab">
         <?php include "account/products.php"; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-favorites" role="tabpanel" aria-labelledby="v-pills-favorites-tab">
         <?php include "account/favorites.php"; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
         <?php include "account/messages.php"; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-last-views" role="tabpanel" aria-labelledby="v-pills-last-views-tab">
         <?php include "account/last-views.php"; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-purchases" role="tabpanel" aria-labelledby="v-pills-purchases-tab">
         <?php include "account/purchases.php"; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-my-comments" role="tabpanel" aria-labelledby="v-pills-my-comments-tab">
         <?php include "account/my-comments.php"; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <?php include "account/settings.php"; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-seller-settings" role="tabpanel" aria-labelledby="v-pills-seller-settings-tab">
          <?php include "account/seller-settings.php"; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-seller-add-products" role="tabpanel" aria-labelledby="v-pills-seller-add-products-tab">
          <?php include "account/seller-add-products.php"; ?>
      </div>
    </div>
  </div>
</div>
	</div>
</section>


<?php
      include "footer.php";
?>
<script src="account/js/basket.js"></script>
<script src="account/js/account-bar.js"></script>
<script src="account/js/account-settings-address.js"></script>
<script src="account/js/account-welcome-seller.js"></script>
<script>
  $('.h5-click').click(function(){
     $('#store-style').toggleClass('hide-style')
  })
  $('.edit-h5-click').click(function(){
     $('#edit-store-style').toggleClass('hide-style')
  })
 
</script>
<!-- -----------select with checkbox----------------- -->

<script >
  var options = [];

$( '.dropdown-menu a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();
      
   console.log( options );
   return false;
});
</script>
    <?php include "footer-script.php"; ?>

</body>
</html>