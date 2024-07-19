@extends('layouts.front')
@section('content')

				
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('/utilisateur')}}/./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Dépannage informatique sur site <br>et à distance</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('/utilisateur')}}/./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Vente de matériel <br>informatique</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('/utilisateur')}}/./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Maintenance informatique pour particuliers <br>et professionnels</h3>
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


@endsection