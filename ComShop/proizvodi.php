<?php
session_start();
include('class/Cart.php');
$cart = new Cart();
$product_array = $cart->getAllProduct();

include('templates/header.php');
if(!empty($_SESSION["cart_item"])){
	$count = count($_SESSION["cart_item"]);
} else {
	$count = 0;
}
?>

<div class="central-container">


<section class="showcase">
  <div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
      <h2>Nasa Ponuda <a style="float: right;" href="cart.php" class="btn btn-primary text-right">  Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></h2>

    </div>
	<div class="row">
	<div class="col" id="add-item-bag" style="width:100%;"></div>

<div id="product-grid">
	<?php
	if (!empty($product_array)) {
		foreach($product_array as $key=>$value){
	?>



		<div class="product-item">
			<div class="product-image"><img src="images/<?php echo $product_array[$key]["image"]; ?>" class="cart-img"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-title"><?php echo $product_array[$key]["sku"]; ?></div>
			<div class="product-price"><?php echo $product_array[$key]["price"]." Rsd"; ?></div>
			<div class="cart-action">
			<input type="text" class="product-quantity" id="qty-<?php echo $product_array[$key]["id"]; ?>" name="quantity" value="1" size="2" />
			<button type="button" class="btnAddAction" data-itemid="<?php echo $product_array[$key]["id"]; ?>" id="product-<?php echo $product_array[$key]["id"]; ?>" data-action="action" data-sku="<?php echo $product_array[$key]["sku"]; ?>" data-proname="<?php echo $product_array[$key]["sku"]; ?>"> Kupi odmah</button>
		</div>
			</div>
		</div>

	<?php
		}
	}
	?>
</div>

    </div>

</div>
</section>
</div>
<?php include('templates/footer.php');?>
<script type="text/javascript">
	jQuery(document).on('click', 'button.btnAddAction', function() {
		var item_id = jQuery(this).data('itemid');
		var qty = jQuery('#qty-'+item_id).val();
		var sku = jQuery(this).data('sku');
		var product_name = jQuery(this).data('proname');
	    jQuery.ajax({
	        type:'POST',
	        url:'add.php',
	        data:{product_id:item_id, quantity:qty, sku:sku},
	        dataType:'json',
	        beforeSend: function () {
	            jQuery('button#product-'+item_id).button('loading');
	        },
	        complete: function () {
	            jQuery('button#product-'+item_id).button('reset');
	        },
	        success: function (json) {
            	jQuery('#cart-count').html(json.count);
            	jQuery("#add-item-bag").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Success!</strong> You have added <strong>'+product_name+'</strong> to your shopping cart!</div>');
            },
	        error: function (xhr, ajaxOptions, thrownError) {
	            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
	        }
	    });
	});
</script>
