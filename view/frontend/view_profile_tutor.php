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
							<a href="index.html" class="standard-logo" data-dark-logo="public/frontend/images/logo-dark.png"><img src="public/logo.png" alt="Canvas Logo"></a>
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
			<section id="page-title">

				<div class="container clearfix">
					<h1>Tabs</h1>
					<span>Revolutionalize the way Tabs look</span>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Shortcodes</a></li>
						<li class="breadcrumb-item active" aria-current="page">Tabs</li>
					</ol>
				</div>

			</section><!-- #page-title end -->

		<!-- Content
			============================================= -->
			<section id="content">
				
				<?php 
				$id = isset($_GET["id"])?$_GET["id"]:0;
				$tutor = $this->model->get_all("select * from tbl_tutor where pk_tutor_id = $id");
				foreach($tutor as $rows):
					?>
					<?php 
					$subject = $this->model->get_all("select * from tbl_subject where pk_subject_id = {$rows->fk_subject_id} ");
					foreach($subject as $rows_subject):
						?>
						<?php 
						$add = $this->model->get_all("select * from tbl_address where pk_address_id = {$rows->fk_address_id} ");
						foreach($add as $rows_add):
							?>
							<?php 
							$topic = $this->model->get_all("select * from tbl_topic where pk_topic_id = {$rows_subject->fk_topic_id} ");
							foreach($topic as $rows_topic):
								?>


								<div class="content-wrap">

									<div class="container clearfix">

					<!-- Post Content
						============================================= -->
						<div class="postcontent nobottommargin clearfix">
							
							<h4 class="text-center">Gia Sư  <?php echo $rows->c_name; ?></h4>

							<div class="tabs side-tabs nobottommargin clearfix" id="tab-6">

								<ul class="tab-nav tab-nav2 clearfix">
									<li><a href="#tabs-21"><i class="icon-home2"></i> Thông tin chung</a></li>
									<li><a href="#tabs-22">Lịch dạy</a></li>
									<li><a href="#tabs-23">Đánh giá</a></li>
									<li class="hidden-phone"><a href="#tabs-24">Bài viết</a></li>
								</ul>

								<div class="tab-container">

									<div class="tab-content clearfix" id="tabs-21">
										<h4>Giới thiệu chung và kinh nghiệm giảng dạy</h4>
										<p><?php echo $rows->c_intro; ?> </p>
										<h4>Chủ đề dạy</h4>
										<p><?php echo $rows_topic->c_name; ?></p>
										<h4>Kiểu giáo viên</h4>
										<p><?php echo $rows->c_type; ?></p>
									</div>
									<div class="tab-content clearfix" id="tabs-22">
										<?php echo $rows->c_schedule; ?>
									</div>
									<div class="tab-content clearfix" id="tabs-23">
										<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
										Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.
									</div>
									<div class="tab-content clearfix" id="tabs-24">
										<p>Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, saepe, placeat iste distinctio ad facere libero sed tempora! Esse amet delectus debitis doloribus pariatur accusamus praesentium dolorem voluptatibus eveniet laboriosam.
									</div>

								</div>
								

							</div>
							
							
							<div class="divider"><i class="icon-circle"></i></div>

							<div class="text-center"><a href="dang-yeu-cau.html" class="btn btn-success ">Mời dạy</a></div>
							

						</div><!-- .postcontent end -->

					<!-- Sidebar
						============================================= -->
						<div class="sidebar nobottommargin col_last clearfix">
							<div class="sidebar-widgets-wrap">

								

								<div class="widget clearfix">

									<h4>Dribbble Shots</h4>
									<div id="dribbble-widget" class="dribbble-shots masonry-thumbs" data-user="envato" data-count="16" data-type="user"></div>

								</div>

								<div class="widget widget-twitter-feed clearfix">

									<h4>Twitter Feed</h4>
									<ul class="iconlist twitter-feed" data-username="envato" data-count="2">
										<li></li>
									</ul>

									<a href="#" class="btn btn-secondary btn-sm fright">Follow Us on Twitter</a>

								</div>

							</div>
						</div><!-- .sidebar end -->

					</div>

				</div>
			<?php endforeach; ?>
		<?php endforeach; ?>
	<?php endforeach; ?>
<?php endforeach; ?>

</section><!-- #content end -->
