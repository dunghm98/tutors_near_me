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
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('public/frontend/images/about/parallax.jpg'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1>Thông tin lớp học</h1>
				<span>Đừng ngần ngại gửi lời mời dạy nếu bạn thấy phù hợp</span>
				
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<?php 
						$id = isset($_GET['id'])?$_GET["id"]:0;
						$class = $this->model->get_a_record("SELECT * from tbl_class WHERE pk_class_id = $id");
						$subject = $this->model->get_a_record("select * from tbl_subject where pk_subject_id = {$class->fk_subject_id} ");
						$add = $this->model->get_a_record("select * from tbl_address where pk_address_id = {$class->fk_address_id} ");
						$topic = $this->model->get_a_record("select * from tbl_topic where pk_topic_id = {$subject->fk_topic_id} ");
						$level = $this->model->get_a_record("select * from tbl_level where pk_level_id = {$class->fk_level_id} ");
						?>

					<div class="col_three_fifth nobottommargin">

						<div class="fancy-title title-bottom-border">
							<h3><?php echo $class->c_desc; ?></h3>
						</div>

						<p><?php echo $class->c_content; ?></p>

						<div class="accordion accordion-bg clearfix">

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Nội dung cơ bản</div>
							<div class="acc_content clearfix">
								<ul class="iconlist iconlist-color nobottommargin">
									<li><i class="icon-ok"></i>Chủ đề: <?php echo $topic->c_name; ?></li>
									<li><i class="icon-ok"></i>Môn học:  <?php echo $subject->c_name; ?></li>
									<li><i class="icon-ok"></i>Địa chỉ: <?php echo $add->c_city; ?></li>
									<li><i class="icon-ok"></i>Địa chỉ cụ thể: <?php echo $add->c_desc_city; ?></li>
									<li><i class="icon-ok"></i>Cấp độ học sinh: <?php echo $level->c_name; ?></li>
									<li><i class="icon-ok"></i>Học phí mong muốn: <?php echo $class->c_fee; ?> đ</li>
									<li><i class="icon-ok"></i>Lịch học: <?php echo $class->c_schedule; ?></li>
								</ul>
							</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Thông tin liên hệ</div>
							<div class="acc_content clearfix">
								<ul class="iconlist iconlist-color nobottommargin">
									<li><i class="icon-plus-sign"></i>Điện thoại: <?php echo $class->c_phone; ?></li>
								</ul>
							</div>


						</div>

						<a href="#" data-scrollto="#job-apply" class="button button-3d button-black nomargin">Apply Now</a>

						<div class="divider divider-short"><i class="icon-star3"></i></div>

					</div>

					<div class="col_two_fifth nobottommargin col_last">

						<div id="job-apply" class="heading-block highlight-me">
							<h2>Apply Now</h2>
							<span>And we'll get back to you within 48 hours.</span>
						</div>

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form action="include/jobs.php" id="template-jobform" name="template-jobform" method="post" role="form">

								<div class="form-process"></div>

								<div class="col_half">
									<label for="template-jobform-fname">First Name <small>*</small></label>
									<input type="text" id="template-jobform-fname" name="template-jobform-fname" value="" class="sm-form-control required" />
								</div>

								<div class="col_half col_last">
									<label for="template-jobform-lname">Last Name <small>*</small></label>
									<input type="text" id="template-jobform-lname" name="template-jobform-lname" value="" class="sm-form-control required" />
								</div>

								<div class="clear"></div>

							
								<div class="col_full">
									<button class="button button-3d button-large btn-block nomargin" name="template-jobform-apply" type="submit" value="apply">Send Application</button>
								</div>

							</form>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->