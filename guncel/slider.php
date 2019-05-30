	<div class="main-slide">
			<div id="sync1" class="owl-carousel">




<?php

$slidersor=$db->prepare("SELECT * from slider");
$slidersor->execute(); 

while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { ?>






				<div class="item">
					<div class="slide-desc">
						<div class="inner">
							<h1><?php echo $slidercek['slider_ad'] ?></h1>
							<p>
								Tamamen kaliteli ve uygun fiyata ürünlerimiz mevcuttur. Hemen tıklayarak satın alabilirsiniz. Keyifli alışverişler.... :))
							</p>
							<button class="btn btn-default btn-red btn-lg">Add to cart</button>
						</div>
						<div class="inner">
							<div class="pro-pricetag big-deal">
								<div class="inner">
										<span class="oldprice">$314</span>
										<span>$199</span>
										<span class="ondeal">Best Deal</span>
								</div>
							</div>
						</div>
					</div>
					<div class="slide-type-1">
					<a href="<?php echo $slidercek['slider_link'] ?>"><img src="<?php echo $slidercek['slider_resimyol'] ?>" alt="" class="img-responsive"> </a>
					</div>
				</div>
				

<?php  }  ?>
				
				
			</div>
		</div>