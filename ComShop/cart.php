<?php
session_start();
include('templates/header.php');
if(!empty($_SESSION["cart_item"])){
	$count = count($_SESSION["cart_item"]);
} else {
	$count = 0;
}
?>
<section class="showcase">
  <div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
      <h2>Odabrali ste sledece proizvode... <a style="float: right;" href="#" class="btn btn-primary text-right">  Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-light" id="cart-count"><?php print $count; ?></span></a></h2>
			<p>Nakon pojedinacnog brisanja proizvoda osvezite stranicu kako biste uklonili izbrisani element!</p>
			<button class="clear-all"><a href="clear.php" style="color:white;">Izbrisi karticu</a></button>
    </div>
	<div class="row">
		<div id="shopping-cart">

		<?php
		if(isset($_SESSION["cart_item"])){
		    $total_quantity = 0;
		    $total_price = 0;
		?>
		<table class="tbl-cart" cellpadding="10" cellspacing="1">
		<thead>
			<tr>
				<th style="text-align:left;">Name</th>
				<th style="text-align:center;" width="20%">Model</th>
				<th style="text-align:right;" width="5%">Kolicina</th>
				<th style="text-align:right;" width="10%">Cena</th>
				<th style="text-align:right;" width="15%">Ukupno</th>
				<th style="text-align:center;" width="5%">Ukloni</th>
			</tr>
		</thead>
		<tbody id="render-cart-data">
		<?php
		    foreach ($_SESSION["cart_item"] as $item){
		        $item_price = $item["quantity"]*$item["price"];
				?>
						<tr id="<?php echo $item["sku"]; ?>">
						<td><img src="images/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
						<td style="text-align:center;"><?php echo $item["sku"]; ?></td>
						<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
						<td  style="text-align:right;"><?php echo $item["price"]." Rsd"; ?></td>
						<td  style="text-align:right;"><?php echo number_format($item_price,2)." Rsd"; ?></td>
						<td style="text-align:center;"><a data-sku="<?php echo $item["sku"]; ?>" class="text-danger btnRemoveAction"><i class="fa fa-times" aria-hidden="true"></i></a></td>
						</tr>
						<?php
						$total_quantity += $item["quantity"];
						$total_price += ($item["price"]*$item["quantity"]);
				}
				?>


				<tr>
					<td colspan="2" align="right">Ukupna cena i kolicina:</td>
					<td align="right" id="render-qty"><?php echo $total_quantity; ?></td>
					<td align="right" colspan="2" id="render-total"><strong><?php echo number_format($total_price, 2)." Rsd"; ?></strong></td>
					<td></td>
				</tr>
				</tbody>
			<tfoot>
				<tr>

					<td colspan="2"><a href="proizvodi.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Vratite se na kupovinu</a></td>
					<td ></td>
					<td colspan="3"></td>
				</tr>
			</tfoot>

		</table>
		  <?php
		} else {
		?>
		<table class="tbl-cart" cellpadding="10" cellspacing="1">

		<tfoot>
			<tr>
				<td colspan="4"><div class="no-records">Vasa kartica je prazna</div></td>
			</tr>
			<tr>

				<td colspan="2"><a href="proizvodi.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Vratite se na kupovinu</a></td>
				<td></td>
				<td></td>
			</tr>
		</tfoot>
		</table>

		<?php
		}
		?>
		</div>

 </div>

</div>
</section>
<?php include('templates/footer.php');?>

<script type="text/javascript">
	jQuery(document).on('click', 'a.btnRemoveAction', function() {
		var sku = jQuery(this).data('sku');
	    jQuery.ajax({
	        type:'POST',
	        url:'remove.php',
	        data:{sku:sku},
	        dataType:'json',
	        success: function (json) {
	        	if(json.total_quantity) {
	            	jQuery('#cart-count').html(json.count);
	            	jQuery('#render-qty').html(json.total_quantity);
	            	jQuery('#render-total').html("$ "+json.total_price);
	            	jQuery("#"+sku).empty();
            	} else {
            		jQuery('#render-cart-data').empty();
            	}
            },
	        error: function (xhr, ajaxOptions, thrownError) {
	            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
	        }
	    });
	});
</script>
