<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="public/frontend/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="public/frontend/style.css" type="text/css" />
	<link rel="stylesheet" href="public/frontend/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="public/frontend/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="public/frontend/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="public/frontend/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="public/frontend/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Đăng nhập | HMD</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
			============================================= -->
			<header id="header" class="full-header">

				<div id="header-wrap">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="public/logo-dark.png"><img src="public/logo.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="public/frontend/images/logo-dark@2x.png"><img src="public/frontend/images/logo@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

					<!-- Primary Navigation
						============================================= -->
						<nav id="primary-menu">

							<ul>
								<li><a href="index.php?controller=home"><div>Trang chủ</div></a>
								</li>
								<li><a href="index.php?controller=register_class"><div>Đăng yêu cầu</div></a>
								</li>
								<li><a href="index.php?controller=register_tutor"><div>Trở thành gia sư</div></a>
								</li>
								<li><a href="index.php?controller=class"><div>Lớp mới</div></a>
								</li>
								<li><a href="index.php?controller=profile"><div>Trang cá nhân</div></a>
								</li>
								<li><a href="index.php?controller=logout"><div>Đăng xuất</div></a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>

				</div>

			</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

						<ul class="tab-nav tab-nav2 center clearfix">
							<li class="inline-block"><a href="#tab-login">Đăng nhập</a></li>
							<li class="inline-block"><a href="#tab-register">Đăng kí</a></li>
						</ul>

						<div class="tab-container">

							<div class="tab-content clearfix" id="tab-login">
								<div class="card nobottommargin">
									<div class="card-body" style="padding: 40px;">
										<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

											<h3>Xin mời bạn đăng nhập</h3>

											<div class="col_full">
												<label for="login-form-username">Email:</label>
												<input type="email" id="login-form-username" name="c_email" value="" class="form-control" />
											</div>

											<div class="col_full">
												<label for="login-form-password">Mật khẩu:</label>
												<input type="password" id="login-form-password" name="c_password" value="" class="form-control" />
											</div>

											<div class="col_full nobottommargin">
												<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="Đăng nhập">Đăng nhập</button>
												<a href="#" class="fright">Quên mật khẩu?</a>
											</div>

										</form>
									</div>
								</div>
							</div>

							<div class="tab-content clearfix" id="tab-register">
								<div class="card nobottommargin">
									<div class="card-body" style="padding: 40px;">
										<h3>Đăng kí tài khoản mới</h3>
										<script type="text/javascript">
												function checkPw() {
													var pw1 = document.getElementById('register-form-password').value();

													var pw2 = document.getElementById('register-form-repassword').value();
													if (pw1 != pw2) {
														alert ("Mật khẩu bạn nhập chưa khớp, xin mời nhập lại");
														return false;
													}
													else return true;
												}
											</script>
										<form  id="register-form" name="register-form" class="nobottommargin" action="index.php?controller=login&act=do_add" method="post">

											<div class="col_full">
												<label for="register-form-name">Họ và Tên:</label>
												<input type="text" required="" id="register-form-name" name="c_fullname" value="" class="form-control" />
											</div>

											<div class="col_full">
												<label for="register-form-email">Địa chỉ email:</label>
												<input type="text" required="" id="register-form-email" name="c_email" value="" class="form-control" />
											</div>

											<div class="col_full">
												<label for="register-form-password">Nhập mật khẩu:</label>
												<input type="password" required="" id="register-form-password" name="c_password" value="" class="form-control" />
											</div>

											<div class="col_full">
												<label for="register-form-repassword">Nhập lại mật khẩu:</label>
												<input type="password" required="" name="re_password" id="register-form-repassword" value="" class="form-control" />
											</div>

											<div class="col_full nobottommargin">
												<button onclick="checkPw();" class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Đăng Ký Ngay</button>
											</div>

											
											
										</form>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">


			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2018 All Rights Reserved by HMD.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> dungmanh998@gmail.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +0901766120 <span class="middot">&middot;</span> <i class="icon-skype2"></i>Skype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="public/frontend/js/jquery.js"></script>
	<script src="public/frontend/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="public/frontend/js/functions.js"></script>

	<script>
		$(function() {
			$( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
		});
	</script>
</body>
</html>