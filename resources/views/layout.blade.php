<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trang bán hàng Biti's</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								 <li><a href="#"><i class="fa fa-phone"></i> + 0932 604 581</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> nhhiep@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trangchu')}}"><img src="{{('public/frontend/images/logoBitis.png')}}" alt="" width="90px" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Sản phẩm Thêm yêu thích</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Đăng xuất</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<li><a href="{{URL::to('/login')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trangchu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Loại sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Nam</a></li>
                                        <li><a href="product-details.html">Nữ</a></li> 
                                        <li><a href="checkout.html">Bé trai</a></li> 
                                        <li><a href="cart.html">Bé gái</a></li>
                                    </ul>
                                </li> 
                                <li><a href="#">Giới thiệu</a></li> 
                                <li><a href="404.html">Giỏ hàng</a></li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" />
                        <span class="input-group-btn">
                            <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>  
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						/:)))))mò đi của bôt strap t ko biết sửa :)))

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-12">
									<img src="{{('public/frontend/images/banner/CoolKidsClub.png')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12">
									<img src="{{('public/frontend/images/banner/DiDeTroVe.png')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12">
									<img src="{{('public/frontend/images/banner/NameLessEdition.png')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
                        <h2>DANH SÁCH CÁC LOẠI GIÀY</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#NAM">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            nam
                                        </a>
                                    </h4>
                                </div>
                                <div id="NAM" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Hunter</a></li>
                                            <li><a href="#">Sandal</a></li>
                                            <li><a href="#">Giày thể thao</a></li>
											<li><a href="#">Giày chạy bộ</a></li>
                                            <li><a href="#">Giày đá banh</a></li>
                                            <li><a href="#">Giày tây</a></li>
											<li><a href="#">Dép</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#HoaLy">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Nữ
                                        </a>
                                    </h4>
                                </div>
                                <div id="HoaLy" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Hunter</a></li>
                                            <li><a href="#">Sandal</a></li>
											<li><a href="#">Giày búp bê</a></li>
											<li><a href="#">Giày thời trang</a></li>
											<li><a href="#">Giày chạy bộ</a></li>
											<li><a href="#">Giày thể thao nữ</a></li>
											<li><a href="#">Dép</a></li>
											<li><a href="#">Túi xách</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#CamTu">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Bé trai
                                        </a>
                                    </h4>
                                </div>
                                <div id="CamTu" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Sandal</a></li>
                                            <li><a href="#">Giày thể thao</a></li>
                                            <li><a href="#">Dép</a></li>
											<li><a href="#">Giày tập đi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#HoaLan">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Bé gái
                                        </a>
                                    </h4>
                                </div>
                                <div id="HoaLan" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Sandal</a></li>
                                            <li><a href="#">Giày thể thao</a></li>
                                            <li><a href="#">Giày búp bê</a></li>
                                            <li><a href="#">Dép</a></li>
                                            <li><a href="#">Giày tập đi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!--/Danh mục các loài hoa-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Tìm giá trong phạm vi</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">200.000 đ</b> <b class="pull-right">2.000.000 đ</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{('public/frontend/images/slide2.jpg')}}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
				
				<div class="col-sm-9 padding-right">
					
					@Yield('content')
					
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="companyinfo">
							<h2><span>Biti's</span>-shopper</h2>
							<p>Chúng tôi sẳn sàng phục vụ quý khách 24/7.<br> Với các loại giày trẻ trung, sang trọng và quý phái!</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{('public/frontend/images/Feeling/birthday.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Kỷ niệm sinh nhật</p>
								<h2>24 APR 2021</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{('public/frontend/images/Feeling/love.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Ngày Valentine</p>
								<h2>14 FEB 2021</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{('public/frontend/images/Feeling/congratulation.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Chúc mừng</p>
								<h2>22 AUG 2021</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{('public/frontend/images/Feeling/girl.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Ngày Phụ nữ</p>
								<h2>08 MARCH 2021</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{('public/frontend/images/map.png')}}" alt="" />
							<p>22 Lý Chiêu Hoàng, Phường 10, Quận 6, TP HCM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Dịch vụ hỗ trợ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Trợ giúp online</a></li>
								<li><a href="#">Liên hệ</a></li>
								<li><a href="#">Tình trạng đơn hàng</a></li>
								<li><a href="#">Thay đổi nơi nhận</a></li>
								<li><a href="#">Các câu hỏi thường gặp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Tìm kiếm nhanh</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Nam</a></li>
								<li><a href="#">Nữ</a></li>
								<li><a href="#">Bé trai</a></li>
								<li><a href="#">Bé gái</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều khoản sử dụng</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Chính sách hoàn lại tiền</a></li>
								<li><a href="#">Hệ thống thanh toán</a></li>
								<li><a href="#">Chính sách khuyến mãi</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Giới thiệu</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin công ty</a></li>
								<li><a href="#">Tuyển dụng</a></li>
								<li><a href="#">Vị trí cửa hàng</a></li>
								<li><a href="#">Chương trình khuyến mãi</a></li>
								<li><a href="#">Quyền lợi khách hàng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Liên hệ chúng tôi</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Địa chỉ email" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Hãy nhận các bản cập nhật gần đây nhất từ trang web của chúng tôi 
								và hãy cập nhật thông tin cá nhân mới nhất của bạn...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2021. </p>Designed by <span>NguyenHoangHiep</span>
					<p class="pull-right">Địa chỉ cửa hàng: <span><a target="_blank" href="#">22 Lý Chiêu Hoàng, Phường 10, Quận 6, TP HCM</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{('public/frontend/js/jquery.js')}}"></script>
	<script src="{{('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{('public/frontend/js/price-range.js')}}"></script>
    <script src="{{('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{('public/frontend/js/main.js')}}"></script>
</body>
</html>