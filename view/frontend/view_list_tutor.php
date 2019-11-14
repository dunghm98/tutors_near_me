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
	<section id="page-title">

		<div class="container clearfix">
			<h1>Gia sư tại HMD</h1>
			<span>Dễ dang tìm cho bạn 1 gia sư hợp lý nhất</span>
			
		</div>

	</section><!-- #page-title end -->

		<!-- Content
			============================================= -->
			<section id="content">

				<div class="content-wrap">

					<div class="container clearfix">

						<h3>Các gia sư mới nhất</h3>

						<ul class="testimonials-grid clearfix">
							<?php 
							$tutor = $this->model->get_all("select * from tbl_tutor order by pk_tutor_id desc 	limit 0,4 ");
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
											<li>
												<div class="testimonial">
													<div class="testi-image">
														<a href="#"><img src="<?php echo $rows->c_img; ?>" alt="Customer Testimonails"></a>
													</div>
													<div class="">
														<div class="team-title"><h4><?php echo $rows->c_name; ?></h4><span><?php echo $rows->c_type; ?></span></div>
														<p><?php echo $rows->c_intro; ?></p>
														<small class="text-muted">
															<span><?php echo $rows_topic->c_name; ?></span> &nbsp;<span>-</span>&nbsp;
															<span><?php echo $rows_add->c_city; ?></span> 
														</small>
													</div>
													<a class="btn btn-info" href="#">Mời dạy</a>
												</div>
											</li>
										<?php endforeach; ?>
									<?php endforeach; ?>
								<?php endforeach; ?>
							<?php endforeach; ?>
						</ul>



					</div>



				</div>

		</section><!-- #content end -->