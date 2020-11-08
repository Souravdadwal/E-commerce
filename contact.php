<!DOCTYPE.html>
<html>
<head>
<title>Contact :: Big Mart</title>
<?php require 'content.php';?>
</head>
<body>
<a href="offer.php"><img src="images/download.png" class="img-head" alt=""></a>
<?php require'header.php'; ?>

<div class="banner-top">
	<div class="container">
		<h3 >Contact</h3>
		<h4><a href="index.php">Home</a><label>/</label>Contact</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Contact</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		<div class=" contact-w3">	
			<div class="col-md-5 contact-right">	
				<img src="images/cac.jpg" class="img-responsive" alt="">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
			</div>
			<div class="col-md-7 contact-left">
				<h4>Contact Information</h4>
				<p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur 
				aut odit aut fugit, sed quia consequuntur magni dolores eos
				qui ratione voluptatem sequi nesciunt. Neque porro quisquam 
				est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
				<ul class="contact-list">
					<li> <i class="fa fa-map-marker" aria-hidden="true"></i> jalandhar</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com">souravdadwal114@.com</a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>+91 6283206419</li>
				</ul>
				<div id="container">
			
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
							<li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
							<li> <i class="fa fa-phone" aria-hidden="true"></i></li>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div>
								<form action="#" method="post">
									<input type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
									<input type="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
									<input type="submit" value="Submit" >
								</form>
							</div>
							<div>
								<div class="map-grid">
								<h5>Our Branches</h5>
									<ul>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>xsacsd.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>sadsads.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>sadsad.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>dfsgdg.</li>
									</ul>
								</div>
							</div>
							<div>
								<div class="map-grid">
									<h5>Contact Me Through</h5>
									<ul>
										<li>Mobile No : 478572</li>
										<li>Office No : 2542422</li>
										<li>Home No : 75858585</li>
										<li>Fax No : 42452523542</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<script type="text/javascript">
				$(document).ready(function() {
		
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default',
						width: 'auto', 
						fit: true, 
						tabidentify: 'hor_1', 
						activate: function(event) { 
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', 
						activetab_bg: '#fff', 
						inactive_bg: '#F5F5F5', 
						active_border_color: '#c1c1c1', 
						active_content_border_color: '#5AB1D0' 
					});

				
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
				
			</div>
			
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<?php require'footer.php';?>

<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
		});				
	</script>
<!-- //tabs -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
									
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<script src="js/bootstrap.js"></script>
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

  
</body>
</html>