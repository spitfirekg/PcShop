<?php
session_start();
$json = array();
include('class/Cart.php');
$cart = new Cart();
$cart->setSKU($_POST["sku"]);
$productByCode = $cart->getProduct();

if(!empty($_POST["quantity"])) {
  $itemArray = array($productByCode["sku"]=>array('name'=>$productByCode["name"], 'sku'=>$productByCode["sku"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));

  if(!empty($_SESSION["cart_item"])) {
    if(in_array($productByCode["sku"],array_keys($_SESSION["cart_item"]))) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($productByCode["sku"] == $k) {
            if(empty($_SESSION["cart_item"][$k]["quantity"])) {
              $_SESSION["cart_item"][$k]["quantity"] = 0;
            }
            $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
          }
      }
    } else {
      $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
    }
  } else {
    $_SESSION["cart_item"] = $itemArray;
  }
  $json['count'] = count($_SESSION["cart_item"]);
}
header('Content-Type: application/json');
echo json_encode($json);
?>

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
