<!DOCTYPE html>
<html lang="vi-VN">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#f36451" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/img/icon.jpg" />

	<!-- FONT ROBOTO -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="<?php echo get_template_directory_uri() ?>/assets/lib/font-awesome-pro/css/all.min.css" rel="stylesheet">

	<!-- Owl Carousel 2 core CSS -->
	<link type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/lib/owl-carousel/owl.carousel.min.css" rel="stylesheet" />

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/lib/bootstrap/css/bootstrap.min.css">

	<!-- PLUGINS SLICKSLIDER -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/lib/slick/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/lib/slick/slick/slick-theme.css" />

	<!-- css,js,jq -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/lib/jq/jquery-3.6.0.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/demo.css">

	<?php wp_head(); ?>

</head>

<body>

	<header>
		<div class="header-top">
			<div class="header-top__logo">
				<img width="74" height="25" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-trang.png" class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image">
			</div>
			<div class="header-top__menu">
				<div>
					<div class="header-top__menu-detail">
						<ul>
							<li data-stt="0"><a href="/"><span>01.</span>Trang chủ</a>

							</li>
							<li data-stt="1"><a href="#app"><span>02.</span>Giải pháp</a>
								<ul class="header-top__menu-sub">
									<li><a href="/video-diem-noi-bat.html">Video điểm nổi bật
										</a></li>
									<li><a href="chi-tiet-chuc-nang-phan-mem-quan-li-spa-ezs.html">Chi tiết chức
											năng</a></li>

								</ul>
							</li>
							<li data-stt="2"><a href="/bang-gia.html" title="BẢNG GIÁ"><span>03.</span>BẢNG GIÁ</a>
							</li>
							<li data-stt="3"><a href="#system" title="QUY TRÌNH"><span>04.</span>QUY TRÌNH</a>
								<ul class="header-top__menu-sub">
									<li><a href="/quy-trinh.html#tuvan-demo">Tư vấn - demo</a></li>
									<li><a href="/quy-trinh.html#hopdong-thanhtoan">Ký hợp đồng - Thanh toán</a>
									</li>
									<li><a href="/quy-trinh.html#bangiao-huongdan">Bàn giao - Hướng dẫn sử dụng</a>
									</li>
									<li><a href="/quy-trinh.html#baohanh-hotro">Bảo hành - Hỗ trợ - Nâng cấp</a>
									</li>
								</ul>
							</li>
							<li data-stt="4"><a href="/ver2/khach-hang.html" title="Khách Hàng"><span>05.</span>Khách Hàng</a></li>
							<li data-stt="5">
								<?php
								$args = array(
									'type'      => 'post',
									'child_of'  => 0,
									'parent'    => '1',
									'number'    => '1'
								);
								$categories = get_categories($args);
								foreach ($categories as $category) { ?>
								<a href="<?php echo $category->slug; ?>" title="Blogs"><span>06.</span>Blogs</a>
						<?php }
						?>
						<ul class="header-top__menu-sub">
							<?php
							$args = array(
								'type'      => 'post',
								'child_of'  => 0,
								'parent'    => '1'
							);
							$categories = get_categories($args);
							foreach ($categories as $category) { ?>
								<li><a href="<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
							<?php }
							?>
						</ul>
						</li>
						<li data-stt="6"><a href="/ver2/gioi-thieu.html" title="Giới thiệu"><span>07.</span>Giới thiệu</a></li>
						<div class="menu-background-move">
						</div>
						</ul>
					</div>
				</div>
			</div>
			<div class="header-top__tool">
				<div class="header-top__tool-search header-search-index">
					<i class="far fa-phone-alt"></i>
					<p>0981.883.338</p>
				</div>
				<!-- <div class="search-background-move">
                </div> -->
			</div>
		</div>
		<div class="header-fixed">
			<div class="header-fixed__logo">
				<img width="74" height="25" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-mau.png" class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image">
			</div>
			<div class="header-fixed__menu h-100">
				<div class="h-100">

					<div class="header-fixed__menu-detail h-100">
						<ul class="d-inline-flex h-100 align-items-center">
							<li data-stt="0"><a href="/" title="Trang chủ"><span>01.</span>Trang chủ</a>

							</li>
							<li data-stt="1"><a href="#app" title="Giải pháp"><span>02.</span>Giải pháp</a>
								<ul class="header-top__menu-sub">
									<li><a href="/ver2/video-diem-noi-bat.html">Video điểm nổi bật</a></li>
									<li><a href="chi-tiet-chuc-nang-phan-mem-quan-li-spa-ezs.html">Chi tiết chức
											năng</a></li>

								</ul>
							</li>
							<li data-stt="2"><a href="/ver2/bang-gia.html" title="BẢNG GIÁ"><span>03.</span>BẢNG GIÁ</a>
							</li>
							<li data-stt="3"><a href="#system" title="QUY TRÌNH"><span>04.</span>QUY TRÌNH</a>
								<ul class="header-top__menu-sub">
									<li><a href="/ver2/quy-trinh.html#tuvan-demo">Tư vấn - demo</a></li>
									<li><a href="/ver2/quy-trinh.html#hopdong-thanhtoan">Ký hợp đồng - Thanh toán</a>
									</li>
									<li><a href="/ver2/quy-trinh.html#bangiao-huongdan">Bàn giao - Hướng dẫn sử dụng</a>
									</li>
									<li><a href="/ver2/quy-trinh.html#baohanh-hotro">Bảo hành - Hỗ trợ - Nâng cấp</a>
									</li>
								</ul>
							</li>
							<li data-stt="4"><a href="/ver2/khach-hang.html" title="Khách Hàng"><span>05.</span>Khách Hàng</a>
							<li data-stt="5"><a href="#email" title="Blogs"><span>06.</span>Blogs</a>
								<ul class="header-top__menu-sub">
									<li><a href="#">Quản lý và vận hành spa</a></li>
									<li><a href="#">Kinh nghiệm Marketing Spa</a></li>
									<li><a href="#">Chăm sóc khách hàng</a></li>
									<li><a href="#">Tăng doanh thu Spa</a></li>
									<li><a href="#">Nâng cấp chất lượng Spa</a></li>
									<li><a href="#">Tìm kiếm khách hàng cho Spa</a></li>
								</ul>
							</li>
							<li data-stt="6"><a href="/ver2/gioi-thieu.html" title="Giới thiệu"><span>07.</span>Giới thiệu</a></li>
							<div class="menu-fixed-background-move">
							</div>
						</ul>
					</div>
				</div>

			</div>
			<div class="header-fixed__tool">
				<div class="header-fixed__tool-search header-fixed-search-index">
					<i class="far fa-phone-alt"></i>
					<p>0981.883.338</p>
				</div>
				<div class="search-fixed-background-move">
				</div>
			</div>
		</div>
		<div class="header-mobi">
			<div class="header-mobi-detail">
				<div id="phone-call">
					<i class="fas fa-phone-alt txt-white"></i>
					<a href="tel:0981883338"></a>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-trang.png" alt="logo" width="74" height="25">
				</div>
				<div class="nav-menu">
					<div class="icon-menu-1">
					</div>
					<div class="icon-menu-2">
					</div>
					<div class="icon-menu-3">
					</div>
				</div>
			</div>
			<div class="menu-mobi">
				<ul class="menu-mobi__nav">
					<li class="menu-mobi__nav-item">
						<a class="active" href="/ver2" title="Trang chủ">
							<span>01.</span> Trang chủ
						</a>
					</li>
					<li class="menu-mobi__nav-item">
						<a href="#app" title="Giải pháp">
							<span>02.</span> Giải pháp
							<div class="menu-mobi__icon-arrow">
								<i class="fal fa-plus"></i>
							</div>
						</a>
						<ul class="menu-mobi__sub">
							<li><a href="/ver2/video-diem-noi-bat.html">Video điểm nổi bật
								</a></li>
							<li><a href="chi-tiet-chuc-nang-phan-mem-quan-li-spa-ezs.html">Chi tiết chức năng</a></li>

						</ul>
					</li>
					<li class="menu-mobi__nav-item">
						<a href="/ver2/bang-gia.html" title="Bảng giá">
							<span>03.</span> Bảng giá
						</a>
					</li>
					<li class="menu-mobi__nav-item">
						<a href="#system" title="Quy trình">
							<span>04.</span> Quy trình
							<div class="menu-mobi__icon-arrow">
								<i class="fal fa-plus"></i>
							</div>
						</a>
						<ul class="menu-mobi__sub">
							<li><a href="/ver2/quy-trinh.html#tuvan-demo">Tư vấn - demo</a></li>
							<li><a href="/ver2/quy-trinh.html#hopdong-thanhtoan">Ký hợp đồng - Thanh toán</a></li>
							<li><a href="/ver2/quy-trinh.html#bangiao-huongdan">Bàn giao - Hướng dẫn sử dụng</a></li>
							<li><a href="/ver2/quy-trinh.html#baohanh-hotro">Bảo hành - Hỗ trợ - Nâng cấp</a></li>
						</ul>
					</li>
					<li class="menu-mobi__nav-item">
						<a href="/ver2/khach-hang.html" title="Khách Hàng">
							<span>05.</span> Khách hàng
						</a>
					</li>
					<li class="menu-mobi__nav-item">
						<a href="#email" title="blogs">
							<span>06.</span> blogs
							<div class="menu-mobi__icon-arrow">
								<i class="fal fa-plus"></i>
							</div>
						</a>
						<ul class="menu-mobi__sub">
							<li><a href="#">Quản lý và vận hành spa</a></li>
							<li><a href="#">Kinh nghiệm Marketing Spa</a></li>
							<li><a href="#">Chăm sóc khách hàng</a></li>
							<li><a href="#">Tăng doanh thu Spa</a></li>
							<li><a href="#">Nâng cấp chất lượng Spa</a></li>
							<li><a href="#">Tìm kiếm khách hàng cho Spa</a></li>
						</ul>
					</li>
					<li class="menu-mobi__nav-item">
						<a href="/ver2/gioi-thieu.html" title="Giới thiệu">
							<span>07.</span> giới thiệu
						</a>
					</li>
				</ul>
			</div>
		</div>
	</header>