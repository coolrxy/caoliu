@extends('layout')


@section('header')
	@parent
@endsection


@section('content')




<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
			
<!-- ========================================= 轮播图 ========================================= -->

		<div class="home-v3-slider" >
	
			<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
			@if(!empty($show_pic))
				@foreach($show_pic as $item)
			
				<div class="item" style="background-image: url({{ $item->pic }});">
					<div class="container">
							<div class="row">
							<div class="col-md-8">
								<div class="caption vertical-center text-left">
									<div class="hero-subtitle-v2 fadeInDown-1">
										{{ $item->title  }}
									</div>

									<div class="hero-2 fadeInDown-2">
										{{ $item->content  }}
									</div>

									<div class="hero-action-btn fadeInDown-3">
										<a href="" class="big le-button ">立即购买</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				@endforeach
			@endif
			</div>
		</div>

<!-- ========================================= 轮播图	end========================================= -->



<!-- ========================================= 中部分类块 ========================================= -->

                <div class="home-v3-features-block animate-in-view fadeIn animated" data-animation="fadeIn">
	<div class="features-list columns-5">
		<div class="feature">
			<div class="media">
				<div class="media-left media-middle feature-icon">
					<i class="ec ec-transport"></i>
				</div>
				<div class="media-body media-middle feature-text">
					<strong>Free Delivery</strong> from $50
				</div>
			</div>
		</div><!-- .feature -->

		<div class="feature">
			<div class="media">
				<div class="media-left media-middle feature-icon">
					<i class="ec ec-customers"></i>
				</div>
				<div class="media-body media-middle feature-text">
					<strong>99% Positive</strong> Feedbacks
				</div>
			</div>
		</div><!-- .feature -->

		<div class="feature">
			<div class="media">
				<div class="media-left media-middle feature-icon">
					<i class="ec ec-returning"></i>
				</div>
				<div class="media-body media-middle feature-text">
					<strong>365 days</strong> for free return
				</div>
			</div>
		</div><!-- .feature -->

		<div class="feature">
			<div class="media">
				<div class="media-left media-middle feature-icon">
					<i class="ec ec-payment"></i>
				</div>
				<div class="media-body media-middle feature-text">
					<strong>Payment</strong> Secure System
				</div>
			</div>

		</div><!-- .feature -->
		<div class="feature">
			<div class="media">
				<div class="media-left media-middle feature-icon">
					<i class="ec ec-tag"></i>
				</div>
				<div class="media-body media-middle feature-text">
					<strong>Only Best</strong> Brands
				</div>
			</div>
		</div><!-- .feature -->
	</div><!-- .features-list -->
</div><!-- .home-v3-features-block -->    



<!-- ========================================= 中部分类块	end ========================================= -->

            


<!-- ========================================= 两部分类区 ========================================= -->



<div class="home-v3-ads-block animate-in-view fadeIn animated" data-animation=" animated fadeIn">
	<div class="ads-block row">
		<div class="ad col-xs-12 col-sm-6">
			<div class="media">
				<div class="media-left media-middle">
					<img data-echo="{{ asset('/home_template/images/banner/cameras.jpg') }}" src="{{ asset('/home_template/images/blank.gif') }}" alt="">
				</div>
				<div class="media-body media-middle">
					<div class="ad-text">
						<strong>もう何度も何度も頑張って</strong>
					</div>
					<div class="ad-action">
						<a href="#">立即购买</a>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="ad col-xs-12 col-sm-6">
			<div class="media">
				<div class="media-left media-middle">
					<img data-echo="{{ asset('/home_template/images/banner/DesktopPC.jpg') }}" src="/home_template/images/blank.gif') }}" alt="">
				</div>
				<div class="media-body media-middle">
					<div class="ad-text">
						Tablets, Smartphones <br><strong>and more</strong>
					</div>
					<div class="ad-action">
						<a href="#"><span class="from"><span class="prefix">From</span><span class="value"><sup>$</sup>749</span><span class="suffix">99</span></span></a>
					</div>
				</div>
			</div>
		</div>-->
		
	</div>
</div>


<!-- ========================================= 两部分类区  end========================================= -->



<!-- ========================================= 更复杂的分类展示========================================= -->

<section class="products-carousel-tabs animate-in-view fadeIn animated" data-animation="fadeIn">
	<h2 class="sr-only">Product Carousel Tabs</h2>
	<ul class="nav nav-inline text-xs-left">
		<li class="nav-item">
			<a class="nav-link active" href="#tab-products-1" data-toggle="tab">最新发布</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="#tab-products-2" data-toggle="tab">信誉推广</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="#tab-products-3" data-toggle="tab">良心卖家</a>
		</li>
	</ul><!-- /.nav -->

	
	<!-- 推荐位置一 -->
	
	
	<div class="tab-content">
		<div class="tab-pane active" id="tab-products-1" role="tabpanel">
			<section class="section-products-carousel" >
				<div class="home-v3-owl-carousel-tabs">
					<div class="woocommerce columns-4">


		<div class="products owl-carousel home-carousel-tabs products-carousel columns-4">

		
		
		@if(!empty($users))
		@foreach($users as $k=>$v)
		
			<div class="product first">
				<div class="product-outer">
					<div class="product-inner">
						<span class="loop-product-categories"><a href="more.blade.php" rel="tag">青丘之丘</a></span>
						<a href="/home/more">
							<h3>{{$v->goods_describe}}</h3>
							<div class="product-thumbnail">
								<img src="{{ asset('/home_template/images/blank.gif') }}" data-echo="{{ asset('/home_template/images/products/3.jpg') }}" class="img-responsive" alt="">
							</div>
						</a>

						<div class="price-add-to-cart">
							<span class="price">
								<span class="electro-price">
									<ins><span class="amount">￥{{$v->goods_price}}</span></ins>
															<del><span class="amount">￥{{$v->goods_old_price}}</span></del>
														<span class="amount"> </span>
								</span>
							</span>
							<a rel="nofollow" href="single-product.html" class="button add_to_cart_button">添加到购物车</a>
						</div>

						<div class="hover-area">
							<div class="action-buttons">

								<a href="#" rel="nofollow" class="add_to_wishlist"> 收藏</a>

								<a href="compare.html" class="add-to-compare-link"> 举报</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		@endforeach
		@endif
			
			

			</div>
				</div>
			</div>
		</section>
	</div>

	
	<!-- 推荐位置一 -->
	
	
	<!-- 推荐位置二 -->
	
		<div class="tab-pane" id="tab-products-2" role="tabpanel">
			<section class="section-products-carousel">
				<div class="home-v3-owl-carousel-tabs">
					<div class="woocommerce columns-4">


		<div class="products owl-carousel home-carousel-tabs products-carousel columns-4">
		@if(!empty($users))
		@foreach($users as $k=>$v)
	
			<div class="product ">
				<div class="product-outer">
					<div class="product-inner">
						<span class="loop-product-categories"><a href="" rel="tag">Audio Speakers</a></span>
						<a href="single-product.html">
							<h3>花名顺</h3>
							<div class="product-thumbnail">
								<img src="{{ asset('/home_template/images/blank.gif') }}" data-echo="{{ asset('/home_template/images/products/3.jpg') }}" class="img-responsive" alt="">
							</div>
						</a>

						<div class="price-add-to-cart">
							<span class="price">
								<span class="electro-price">
									<ins><span class="amount"> $1,999.00</span></ins>
															<del><span class="amount">$2,299.00</span></del>
														<span class="amount"> </span>
								</span>
							</span>
							<a rel="nofollow" href="single-product.html" class="button add_to_cart_button">购买</a>
						</div><!-- /.price-add-to-cart -->

						<div class="hover-area">
							<div class="action-buttons">

								<a href="#" rel="nofollow" class="add_to_wishlist">收藏</a>

								<a href="compare.html" class="add-to-compare-link">举报</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			@endforeach
		@endif
			
		</div>
				</div>
			</div>
		</section>
	</div>
	
	
	<!-- 推荐位置二 -->
	
	<!-- 推荐位置三 -->
	
		<div class="tab-pane" id="tab-products-3" role="tabpanel">
			<section class="section-products-carousel">
				<div class="home-v3-owl-carousel-tabs">
					<div class="woocommerce columns-4">


		<div class="products owl-carousel home-carousel-tabs products-carousel columns-4">

			@if(!empty($users))
			@foreach($users as $k=>$v)
			
			<div class="product first">
				<div class="product-outer">
					<div class="product-inner">
						<span class="loop-product-categories"><a href="product-category.html" rel="tag">Audio Speakers</a></span>
						<a href="single-product.html">
							<h3>Lifeline</h3>
							<div class="product-thumbnail">
								<img src="home_template/images/blank.gif" data-echo="{{ asset('home_template/images/products/3.jpg') }}" class="img-responsive" alt="">
							</div>
						</a>

						<div class="price-add-to-cart">
							<span class="price">
								<span class="electro-price">
									<ins><span class="amount"> $1,999.00</span></ins>
															<del><span class="amount">$2,299.00</span></del>
														<span class="amount"> </span>
								</span>
							</span>
							<a rel="nofollow" href="single-product.html" class="button add_to_cart_button">购买</a>
						</div>

						<div class="hover-area">
							<div class="action-buttons">

								<a href="#" rel="nofollow" class="add_to_wishlist">收藏</a>

								<a href="compare.html" class="add-to-compare-link">举报</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			@endforeach
			@endif
		</div>
		
			
		

					</div>
				</div>
			</section>
		</div>
	</div>
</section>

	<!-- 推荐位置三 -->

<!-- ========================================= 更复杂的分类展示 end========================================= -->







                <section class="products-6-1 animate-in-view fadeIn animated" data-animation="fadeIn">
	<div class="container">
		<header>
			<h2 class="h1">畅销</h2>
			
			
			
			<ul class="nav nav-inline">
				<li class="nav-item active">
					<span class="nav-link">Clannad</span>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="">分类1</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">分类2</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">分类3</a>
				</li>
			</ul>
			
			
		</header>
		
		

		<div class="columns-6-1">
				<ul class="products exclude-auto-height products-6">
					@if(!empty($users))
							@foreach($users as $k=>$v)
							<li class="product">
					<div class="product-outer">
						<div class="product-inner">
							<span class="loop-product-categories"><a href="product-category.html" rel="tag">分类</a></span>
							<a href="single-product.html">
								<h3>你认识顺吗</h3>
								<div class="product-thumbnail">

									<img data-echo="{{ asset('/home_template/images/products/3.jpg') }}" src="/home_template/images/blank.gif" alt="">


								</div>
							</a>

							<div class="price-add-to-cart">
								<span class="price">
									<span class="electro-price">
										<ins><span class="amount">&#036;1,999.00</span></ins>
										<del><span class="amount">&#036;2,299.00</span></del>
									</span>
								</span>
								<a rel="nofollow" href="single-product.html" class="button add_to_cart_button">购买</a>
							</div><!-- /.price-add-to-cart -->

							<div class="hover-area">
								<div class="action-buttons">

									<a href="" rel="nofollow" class="add_to_wishlist">
											收藏</a>

									<a href="" class="add-to-compare-link">举报</a>
								</div>
							</div>
						</div><!-- /.product-inner -->
					</div><!-- /.product-outer -->
				</li>
						@endforeach
					@endif
				</ul>

					
					
			<ul class="products exclude-auto-height product-main-6-1">
				<li class="first product">

					<div class="product-outer">
						<div class="product-inner">
							<span class="loop-product-categories">
								<a href="product-category.html" rel="tag">分类</a>
							</span>

							<a href="single-product.html">
								<h3>首席推荐位<br/>花名顺</h3>
								<div class="product-thumbnail">
									 <img src="home_template/images/blank.gif" data-echo="{{ asset('home_template/images/products/3.jpg') }}" class="wp-post-image" alt="">
								</div>
							</a>

							<div class="thumbnails columns-3">
								<a href="images/products/thumb1.jpg" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
									<img src="home_template/images/blank.gif" data-echo="{{ asset('/home_template/images/products/3.jpg') }}"  alt="">
								</a>
								<a href="images/products/thumb2.jpg" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
									<img src="home_template/images/blank.gif" data-echo="{{ asset('/home_template/images/products/3.jpg') }}"  alt="">
								</a>
								<a href="images/products/thumb3.jpg" class="zoom last" title="" data-rel="prettyPhoto[product-gallery]">
									<img src="home_template/images/blank.gif" data-echo="{{ asset('/home_template/images/products/3.jpg') }}"  alt="">
								</a>
							</div>

							<div class="price-add-to-cart">
								<span class="price">
									<span class="electro-price"><ins><span class="amount">现价</span></ins> <del><span class="amount">原价</span></del></span>
								</span>

								<a rel="nofollow" href="cart.html" class="button add_to_cart_button">购买</a>
							</div><!-- /.price-add-to-cart -->

							<div class="hover-area">
								<div class="action-buttons">

									<a href="http://transvelo.github.io/electro/?add_to_wishlist=2933" rel="nofollow" class="add_to_wishlist">
											收藏</a>

									<a href="compare.html" class="add-to-compare-link">举报</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		
		
		
	</div>
	
	
</section>       








<section class="home-list-categories animate-in-view fadeIn animated" data-animation="fadeIn">

	<header>
		<h2 class="h1">本月最热门的分类</h2>
	</header>
	
	
		<ul class="categories">
			@if(!empty($users))
			@foreach($users as $k=>$v)
		
			<li class="category">
				<div class="media">
					<a class="media-left" href="product-category.html">
						<img data-echo="{{ asset('/home_template/images/products/3.jpg') }}" src="{{ asset('/home_template/images/products/3.jpg') }}" alt="">
					</a>

					<div class="media-body">
						<h4 class="media-heading"><a href="product-category.html">商品</a></h4>
						<ul class="sub-categories list-unstyled">
							<li class="cat-item">
								<a href="product-category.html" >花名顺</a>
							</li>
							<li class="cat-item">
								<a href="product-category.html" >花名顺</a>
							</li>
							<li class="cat-item">
								<a href="product-category.html" >花名顺</a>
							</li>
							<li class="cat-item">
								<a href="product-category.html" >花名顺</a>
							</li>
						</ul>
					</div>
				</div>
				<a class="see-all" href="#">详情</a>
			</li>
			
			@endforeach
			@endif
		</ul>
		
		
</section>            

</main>
        </div>
    </div>
</div>
</div>
@endsection	

@section('power')
	@parent
@endsection

@section('footer')
	@parent
@endsection



