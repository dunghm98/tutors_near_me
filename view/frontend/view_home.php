	<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

		<!-- Header
			============================================= -->
			<header id="header" class="transparent-header page-section dark">

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

							<ul class="one-page-menu">
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

			<section id="slider" class="slider-element slider-parallax full-screen dark" style="background: url(public/frontend/images/landing/static.jpg) center center no-repeat; background-size: cover">

				<div class="slider-parallax-inner">

					<div class="container-fluid vertical-middle clearfix">
						<?php 
							$c_email = $_SESSION["c_email"];
				$user = $this->model->get_a_record("select * from tbl_user where c_email = '$c_email' ");
						 ?>
						<div class="heading-block title-center nobottomborder">
							<h1>Xin chào <?php echo $user->c_fullname; ?></h1>
							<h1>Kết Nối Gia Sư Chưa Bao Giờ Dễ Dàng Đến Thế</h1>
							<span>Hãy để chúng tôi giúp bạn giỏi hơn và bay xa hơn với nền tảng tìm gia sư theo công nghệ 4.0.</span>
						</div>

						<div class="center bottommargin">
							<a href="index.php?controller=register_class" class="button button-3d button-teal button-xlarge nobottommargin"><i class="icon-star3"></i>Tìm Gia Sư Phù Hợp</a> - OR - <a href="index.php?controller=register_tutor" data-scrollto="#section-pricing" class="button button-3d button-red button-xlarge nobottommargin"><i class="icon-user2"></i>Trở Thành Gia Sư</a>
						</div>

					</div>

				</div>

			</section>

		<!-- Content
			============================================= -->
			<section id="content">

				<div class="content-wrap">
					<div class="container clearfix">

						<div class="heading-block topmargin-lg center">
							<h2>TÌM GIA SƯ THEO CÔNG NGHỆ 4.0</h2>
							<span class="divcenter">Trải nghiệp phương thức tìm gia sư dễ dàng và thuận tiện nhất cùng HMD</span>
						</div>

						<div class="row bottommargin-sm">

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="feature-box fbox-right topmargin" data-animate="fadeIn">
									<div class="fbox-icon">
										<a href="#"><i class="icon-line-heart"></i></a>
									</div>
									<h3>Chất lượng</h3>
									<p>Gia sư được kiểm duyệt kỹ càng và đánh giá khách quan bởi phụ huynh.</p>
								</div>

								<div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
									<div class="fbox-icon">
										<a href="#"><i class="icon-line-paper"></i></a>
									</div>
									<h3>Linh hoạt</h3>
									<p>Chúng tôi cung cấp dịch vụ linh hoạt, tùy chỉnh dễ dàng.</p>
								</div>

								<div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="400">
									<div class="fbox-icon">
										<a href="#"><i class="icon-line-layers"></i></a>
									</div>
									<h3>Kết nối trực tiếp</h3>
									<p>Kết nối học viên với hàng nghìn gia sư khắp cả nước theo mô hình Uber, Grab.</p>
								</div>

							</div>

							<div class="col-lg-4 d-md-none d-lg-block bottommargin center">
								<img src="public/hmd.png" alt="iphone 2">
							</div>

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="feature-box topmargin" data-animate="fadeIn">
									<div class="fbox-icon">
										<a href="#"><i class="icon-line-power"></i></a>
									</div>
									<h3>LỰA CHỌN ĐA DẠNG</h3>
									<p>Gia sư là giảng viên, giáo viên, sinh viên, người nước ngoài,vv..</p>
								</div>

								<div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
									<div class="fbox-icon">
										<a href="#"><i class="icon-line-check"></i></a>
									</div>
									<h3>TÙY CHỌN HỌC PHÍ</h3>
									<p>Nhiều gia sư cùng đấu giá mức học phí, bạn chỉ cần lựa chọn học phí phù hợp nhất.</p>
								</div>

								<div class="feature-box topmargin" data-animate="fadeIn" data-delay="400">
									<div class="fbox-icon">
										<a href="#"><i class="icon-bulb"></i></a>
									</div>
									<h3>NHANH CHÓNG</h3>
									<p>Chỉ mất 2 phút để đăng yêu cầu tìm gia sư</p>
								</div>

							</div>

						</div>

					</div>

					<div class="container clearfix">

						<div id="section-features" class="heading-block title-center page-section">
							<h2>Môn Học Đa Dạng</h2>
							<span>Có hàng ngàn môn học khác nhau yêu cầu tìm gia sư</span>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn">
									<a href="#"><img src="public/frontend/images/icons/features/responsive.png" alt="Responsive Layout"></a>
								</div>
								<h3>Khoa Học Tự Nhiên</h3>
								<p>Các môn học liên quan đến khối khoa học như toán, lý hóa sinh....</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
									<a href="#"><img src="public/frontend/images/icons/features/retina.png" alt="Retina Graphics"></a>
								</div>
								<h3>KHoa HỌc máy Tính</h3>
								<p>Các môn học liên quan đến máy tính hoặc lập trình..</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
									<a href="#"><img src="public/frontend/images/icons/features/performance.png" alt="Powerful Performance"></a>
								</div>
								<h3>Ngoại Ngữ</h3>
								<p>Đầy đủ tiếng Anh, Hàn, Nhật, Pháp..</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="600">
									<a href="#"><img src="public/frontend/images/icons/features/flag.png" alt="Responsive Layout"></a>
								</div>
								<h3>Nghệ Thuật</h3>
								<p>Bạn có thể tìm gia sư về các môn nghệ thuật như vẽ hay nhảy múa...</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="800">
									<a href="#"><img src="public/frontend/images/icons/features/tick.png" alt="Retina Graphics"></a>
								</div>
								<h3>Âm nhạc</h3>
								<p>Tìm gia sư dạy thanh nhạc hoặc nhạc cụ thật dễ dàng.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="1000">
									<a href="#"><img  src="public/frontend/images/icons/features/tools.png" alt="Powerful Performance"></a>
								</div>
								<h3>Kĩ Năng</h3>
								<p>Có rất nhiều gia sư đang dạy các môn kỹ năng mềm lẫn cứng...</p>
							</div>
						</div>

						<div class="clear"></div>

					</div>

					<div class="section">

						<div class="container clearfix">

							<div id="section-testimonials" class="heading-block title-center page-section">
								<h2>LỚP MỚI ĐANG TÌM GIA SƯ</h2>
								<span>Hàng nghìn học sinh đang tìm kiếm gia sư cho mình</span>
							</div>

							<div class="container clearfix">
								<h4>Những lớp mới nhất liên tục được cập nhật</h4>


								<div class="card">
									<!-- Default panel contents -->

									<!-- Table -->

									<table class="table table-hover">

										<thead>

											<tr>
												<th>MS</th>
												<th width="50%">Nội Dung Lớp Học</th>
												<th>Thể Loại</th>
												<th width="20%">Học Phí Mong Muốn</th>
											</tr>

										</thead>

										<tbody>
											<?php 
											$new_class = $this->model->get_all("select * from tbl_class order by pk_class_id desc 	limit 0,4 ");
											foreach($new_class as $rows):
												?>
												<tr>

													<td><?php echo $rows->pk_class_id; ?></td>
													<td>
														<div class="d-flex w-100 justify-content-between">
															<a href="index.php?controller=class_detail&id=<?php echo $rows->pk_class_id; ?>"><h4 class="mb-2"><?php echo $rows->c_desc; ?></h4></a>
														</div>
														<?php 
														$subject = $this->model->get_all("select * from tbl_subject where pk_subject_id = {$rows->fk_subject_id} ");
														foreach($subject as $rows_subject):
															?>
															<?php 
															$add = $this->model->get_all("select * from tbl_address where pk_address_id = {$rows->fk_address_id} ");
															foreach($add as $rows_add):
																?>
																<?php 
													$level = $this->model->get_all("select * from tbl_level where pk_level_id = {$rows->fk_level_id} ");
													foreach($level as $rows_level):
												 ?>
																<?php 
																$topic = $this->model->get_all("select * from tbl_topic where pk_topic_id = {$rows_subject->fk_topic_id} ");
																foreach($topic as $rows_topic):
																	?>
																	<small class="text-muted">
																		<span><?php echo $rows_subject->c_name; ?></span> &nbsp; 
																		<span><?php echo $rows_level->c_name; ?></span>
																		&nbsp;<span>-</span>&nbsp;
																		<span><?php echo $rows_add->c_city; ?></span> 
																	</small>
																</td>
																<td><?php echo $rows_topic->c_name;  ?></td>
																<td><?php echo $rows->c_fee ?> đ</td>
															<?php endforeach; ?>
														<?php endforeach; ?>
													<?php endforeach; ?>
												<?php endforeach; ?>
											<?php endforeach; ?>
											</tr>
										</tbody>
									</table>

								</div>
								<div class="text-center mt-2"><a class="btn btn-info" href="index.php?controller=class">Xem thêm</a></div>
							</div>

						</div>

					</div>

					<div class="container clearfix">

						<div class="heading-block center">
							<h2>Đội Ngũ Gia Sư Chát Lượng</h2>
							<span>Gia sư là các sinh viên giáo viên giỏi,, có nhiều kinh nghiệm, được đánh giá bởi chính các phụ huynh</span>
						</div>

						<div class="row clearfix">
							<?php 
											$tutor = $this->model->get_all("select * from tbl_tutor order by pk_tutor_id desc 	limit 0,4 ");
											foreach($tutor as $rows):
												?>
							<div class="col-lg-6 bottommargin">
								<div class="team team-list clearfix">
									<div class="team-image">
										<img height="300px" src="<?php echo $rows->c_img; ?>" alt="John Doe">
									</div>
									<div class="team-desc">
										<div class="team-title"><h4><?php echo $rows->c_name; ?></h4><span><?php echo $rows->c_type; ?></span></div>
										<div class="team-content">
											<p><?php echo $rows->c_intro; ?></p>
										</div>
										<a href="#" class="social-icon si-rounded si-small si-light si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-light si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-rounded si-small si-light si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
									</div>
								</div>
							</div>

							<?php endforeach; ?>

							

							

						</div>
					<div class="text-center"><a class="btn btn-info" href="index.php?controller=list_tutor">Xem thêm</a></div>
					</div>

					<div class="section footer-stick">

						<div class="container clearfix">

							<div id="section-buy" class="heading-block title-center nobottomborder page-section">
								<h2>Triển thôi</h2>
								<span>Còn chần chừ gì nữa? Hãy trở thành 1 phần của ALU đi nào!</span>
							</div>

							<div class="center">

								<a href="#" data-animate="tada" class="button button-3d button-teal button-xlarge nobottommargin"><i class="icon-star3"></i>Tìm Gia Sư Phù Hợp</a> - OR - <a href="#" data-scrollto="#section-pricing" class="button button-3d button-red button-xlarge nobottommargin"><i class="icon-user2"></i>Trở Thành Gia Sư </a>

							</div>

						</div>

					</div>

				</div>

			</section><!-- #content end -->

