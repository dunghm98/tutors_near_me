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
				<h1>Tìm gia sư</h1>
				<span>Dễ dàng tìm được gia sư phù hợp chỉ với vài thao tác</span>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="postcontent">

						<h3>Đăng Yêu Cầu</h3>

						<form action="index.php?controller=register_class" method="post">
							<div class="form-group">
								<label for="inputAddress">Tóm tắt yêu cầu</label>
								<input type="text" name="c_desc" class="form-control" id="inputAddress" required="" placeholder="Ví dụ: tìm gia sư tiếng anh lớp 7 hà nội">
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="exampleFormControlSelect1">Chọn môn học</label>
								<select class="form-control" name="fk_subject_id" id="exampleFormControlSelect1">
									<?php $subject = $this->model->get_all("select * from tbl_subject order by pk_subject_id desc");
									foreach ($subject as $rows): ?>
									<option value="<?php echo $rows->pk_subject_id; ?>">
										<?php echo $rows->c_name; ?>
									</option>
								<?php endforeach; ?>
								</select>
								</div>
								<div class="form-group col-md-4">
									<label for="inputState">Cấp độ học sinh</label>
									<select id="inputState" name="fk_level_id" class="form-control">
										<?php $level = $this->model->get_all("select * from tbl_level order by pk_level_id desc");
									foreach ($level as $rows): ?>
									<option <?php if(isset($record->fk_level_id)&&$record->fk_level_id ==$rows->pk_level_id ): ?> selected <?php endif; ?> value="<?php echo $rows->pk_level_id; ?>">
										<?php echo $rows->c_name; ?>
									</option>
								<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-5">
									<label for="inputAddress">Học phí dự kiến</label>
									<input type="text" name="c_fee" required="" class="form-control" id="inputAddress" placeholder="VD: 120.000/giờ">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputAddress">Điện thoại liên hệ</label>
									<input type="text" required="" name="c_phone" class="form-control" id="inputAddress" placeholder="VD: 0912345678">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="inputCity">Địa chỉ</label>
									<select id="inputState" name="fk_address_id" class="form-control">
										<?php $address = $this->model->get_all("select * from tbl_address order by pk_address_id desc");
									foreach ($address as $rows): ?>
									<option <?php if(isset($record->fk_address_id)&&$record->fk_address_id ==$rows->pk_address_id ): ?> selected <?php endif; ?> value="<?php echo $rows->pk_address_id; ?>">
										<?php echo $rows->c_city; ?>
									</option>
								<?php endforeach; ?>
									</select>
									
								</div>

							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Nội dung chi tiết lớp học</label>
								<textarea class="form-control" required="" name="c_content" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Đăng</button>
						</form>

						<div class="line"></div>


					</div>

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

		</section><!-- #content end -->