@extends('layouts.front')
@section('content')



<div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel1" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel1" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item"> <img src="{{asset('/utilisateur')}}/img/banner.png" style="width:100%; height: 500px" alt="First slide">
                        <div class="carousel-caption">
                            <h1>vacayhome<br> spa &amp; Resort</h1>
                        </div>
                    </div>
                    <div class="item"> <img src="{{asset('/utilisateur')}}/img/banner2.png" style="width:100%; height: 500px" alt="Second slide">
                        <div class="carousel-caption">
                            <h1>vacayhome<br> spa &amp; Resort</h1>
                        </div>
                    </div>
                    <div class="item active"> <img src="{{asset('/utilisateur')}}/img/banner3.png" style="width:100%; height: 500px" alt="Third slide">
                        <div class="carousel-caption">
                            <h1>vacayhome<br> spa &amp; Resort</h1>
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="{{asset('/utilisateur')}}/img/icons/left-arrow.png" onmouseover="this.src = '{{asset('/utilisateur')}}/img/icons/left-arrow-hover.png'" onmouseout="this.src = '{{asset('/utilisateur')}}/img/icons/left-arrow.png'" alt="left"></a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="{{asset('/utilisateur')}}/img/icons/right-arrow.png" onmouseover="this.src = '{{asset('/utilisateur')}}/img/icons/right-arrow-hover.png'" onmouseout="this.src = '{{asset('/utilisateur')}}/img/icons/right-arrow.png'" alt="left"></a>

            </div>
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="http://127.0.0.1:8000'/utilisateur'/./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="http://127.0.0.1:8000/utilisateur/./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="http://127.0.0.1:8000/utilisateur/./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick slick-initialized slick-slider" data-nav="#slick-nav-1">
										<!-- product -->
										
										<!-- /product -->

										<!-- product -->
										
										<!-- /product -->

										<!-- product -->
										
										<!-- /product -->

										<!-- product -->
										
										<!-- /product -->

										<!-- product -->
										
										<!-- /product -->
									<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4416px; transform: translate3d(-1472px, 0px, 0px);"><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="-2" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product04.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="-1" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product05.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide" style="width: 338px;" data-slick-index="0" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide" style="width: 338px;" data-slick-index="1" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-current slick-active" style="width: 338px;" data-slick-index="2" aria-hidden="false" tabindex="0">
											<div class="product-img">
												<img src="./img/product03.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="0"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="0"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="0"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="0"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-active" style="width: 338px;" data-slick-index="3" aria-hidden="false" tabindex="0">
											<div class="product-img">
												<img src="./img/product04.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="0"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="0"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="0"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="0"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide" style="width: 338px;" data-slick-index="4" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product05.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="5" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="6" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="7" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product03.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="8" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product04.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="9" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product05.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div></div></div></div>
									<div id="slick-nav-1" class="products-slick-nav"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick slick-initialized slick-slider" data-nav="#slick-nav-2">
										<!-- product -->
										
										<!-- /product -->

										<!-- product -->
										
										<!-- /product -->

										<!-- product -->
										
										<!-- /product -->

										<!-- product -->
										
										<!-- /product -->

										<!-- product -->
										
										<!-- /product -->
									<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4416px; transform: translate3d(-1840px, 0px, 0px);"><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="-2" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product09.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="-1" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide" style="width: 338px;" data-slick-index="0" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product06.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide" style="width: 338px;" data-slick-index="1" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product07.png" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide" style="width: 338px;" data-slick-index="2" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product08.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-current slick-active" style="width: 338px;" data-slick-index="3" aria-hidden="false" tabindex="0">
											<div class="product-img">
												<img src="./img/product09.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="0"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="0"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="0"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="0"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-active" style="width: 338px;" data-slick-index="4" aria-hidden="false" tabindex="0">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="0"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="0"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="0"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="0"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="5" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product06.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="6" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product07.png" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="7" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product08.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="8" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product09.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div><div class="product slick-slide slick-cloned" style="width: 338px;" data-slick-index="9" aria-hidden="true" tabindex="-1">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#" tabindex="-1">product name goes here</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" tabindex="-1"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare" tabindex="-1"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view" tabindex="-1"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" tabindex="-1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div></div></div></div>
									<div id="slick-nav-2" class="products-slick-nav"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product09.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product04.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product05.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product06.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product09.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product04.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product05.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="http://127.0.0.1:8000/utilisateur/./img/product06.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		
		<!-- /NEWSLETTER -->

        <section class="blog-block-slider">
                <div class="blog-block-slider-fix-image">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <div class="container">
                            <!-- Wrapper for slides -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel2" data-slide-to="0" class=""></li>
                                <li data-target="#myCarousel2" data-slide-to="1" class="active"></li>
                                <li data-target="#myCarousel2" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item">
                                    <div class="blog-box">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{asset('/utilisateur')}}/img/client1.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Walter Hucko</h3>
                                                <h5 class="blog-rev">Satisfied Customer</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="blog-box">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{asset('/utilisateur')}}/img/client2.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Jules Boutin</h3>
                                                <h5 class="blog-rev">Satisfied Customer</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{asset('/utilisateur')}}/img/client3.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Attilio Marzi</h3>
                                                <h5 class="blog-rev">Satisfied Customer</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <div id="newsletter" class="section mt-5">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        @endsection