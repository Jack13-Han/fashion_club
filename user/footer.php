<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.php"><img src="images/logo2.png" alt=" " /><h3>FASHION CLUB</h3></a>
		<ul>
			<li>University Avenue Road,</li>
			<li>Yangon City.</li>
			<li><a href="mailto:info@example.com">@google.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Information</h4>
			<ul>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="about.php">About Us</a></li>


			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Shop</h4>
			<ul>
        <?php
                global $connection;
                $query ="select * from category";
                $go_query =mysqli_query($connection,$query);
                while ($out=mysqli_fetch_assoc($go_query)) {
                  # code...

        ?>
<li><a href="product.php?id=<?php echo $out['cat_id'] ?>"><?php echo $out['cat_name'] ?></a></li>
<?php } ?>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>My Account</h4>
			<ul>

				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>

			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2020 Fashion Club . All rights reserved | Design by <a href="index.php">DWD 38 (Boy Project) </a></p>
	</div>
</div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>
