@extends('layout')


@section('header')
	@parent
@endsection

@section('content')

<div id="content" class="site-content" tabindex="-1">
    <div class="container">
	
	
        <nav class="woocommerce-breadcrumb" >
        	
        	商品类别
			
        </nav>
		
		
		

        <div id="primary" class="content-area">
        	<main id="main" class="site-main">
        		 
				<section class="home-list-categories animate-in-view fadeIn animated" data-animation="fadeIn">

	<header>
		<h2 class="h1">本月最热门的分类</h2>
	</header>
	
	
		<ul class="categories">
		
			@foreach($goods as $k=>$v)
		
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
			
		</ul>
		
		
</section>

				
				<section class="section-products-carousel" >
					<header>
						<h2 class="h1">商品推荐位</h2>

						<div class="owl-nav">
							<a href="#products-carousel-prev" data-target="#product-category-carousel" class="slider-prev">
							<i class="fa fa-angle-left"></i></a>
							<a href="#products-carousel-next" data-target="#product-category-carousel" class="slider-next"><i class="fa fa-angle-right"></i></a>
						</div>

					</header>


    <div id="product-category-carousel">
        <div class="woocommerce columns-6">
			<div class="products owl-carousel products-carousel columns-6">

@foreach($goods as $k=>$v)
			<div class="product">
				<div class="product-outer">
					<div class="product-inner">
						<span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
						<a href="single-product.html">
							<h3>Notebook Widescreen Z51-70  40K6013UPB</h3>
							<div class="product-thumbnail">
								<img src="/home_template/images/blank.gif" data-echo="/home_template/images/product-category/3.jpg" class="img-responsive" alt="">
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

								<a href="#" rel="nofollow" class="add_to_wishlist"> 收藏</a>

								<a href="compare.html" class="add-to-compare-link"> 举报</a>
							</div>
						</div>
					</div>
				</div>
			</div>
@endforeach



            </div>
		</div>
	</div>
			</section>
		</main>
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