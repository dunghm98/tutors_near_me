

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
							<a href="index.php" class="standard-logo"><img src="public/logo.png" alt="Logo"></a>
							<a href="index.php" class="retina-logo" ><img src="public/frontend/images/logo@2x.png" alt="Logo"></a>
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
		<!-- Content
		============================================= -->
		<section id="content">
			<?php
				$c_email = $_SESSION["c_email"];
				$user = $this->model->get_a_record("select * from tbl_user where c_email = '$c_email' ");

				$id = $user->pk_user_id;
								?>

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row clearfix">

						<div class="col-md-9">

							<img src="public/frontend/images/icons/avatar.jpg" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">

							<div class="heading-block noborder">
								<h3><?php echo $user->c_fullname; ?></h3>
								<span><?php echo $user->c_email; ?></span>
							</div>

							<div class="clear"></div>

							<div class="row clearfix">

								<div class="col-lg-12">

									<div class="tabs tabs-alt clearfix" id="tabs-profile">

										<ul class="tab-nav clearfix">
											<li><a href="#tab-feeds"><i class="icon-rss2"></i>Các lớp đã đăng</a></li>
											<li><a href="#tab-posts"><i class="icon-pencil2"></i> Posts</a></li>
											<li><a href="#tab-replies"><i class="icon-reply"></i> Đánh giá</a></li>
											<li><a href="#tab-connections"><i class="icon-users"></i> Gia sư quen thuộc</a></li>
										</ul>

										<div class="tab-container">

											<div class="tab-content clearfix" id="tab-feeds">

												<?php 

						// quy định số bản ghi trên 1 trang
												$record_per_page = 10;
						// tính tổng số bản ghi có trong database
												$total = $this->model->num_rows("select pk_class_id from tbl_class");
						// tính số trang
												$num_page = ceil($total/$record_per_page);
						// lấy biến p truyền từ url để biết trang hiện tại là 1 hay 2
												$p = isset($_GET["p"])&&$_GET["p"]>1?($_GET["p"]-1):0;
						// lấy từ bản ghi nào
												$from = $p*$record_per_page;

												?>


												<div class="row topmargin-sm clearfix">
													<?php 
													$class = $this->model->get_all("select * from tbl_class where fk_user_id= $id order by pk_class_id desc limit $from,$record_per_page");
													foreach($class as $rows):
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
																$level = $this->model->get_all("select * from tbl_level where pk_level_id = {$rows->fk_level_id} ");
																foreach($level as $rows_level):
																	?>
													<div class="col-12 bottommargin-sm">
														<div class="ipost clearfix">
															<div class="row clearfix">
																
																<div class="col-md-8">
																	<div class="entry-title">
																		<h3><a href="index.php?controller=class_detail&id=<?php echo $rows->pk_class_id; ?>"><?php echo $rows->c_desc; ?></a></h3>
																	</div>
																	<ul class="entry-meta clearfix">
																		<li><i class="icon-calendar3"></i> <?php echo $rows_subject->c_name; ?></li>
																		<li><a href="#"><i class="icon-comments"></i><?php echo $rows_level->c_name; ?></a></li>
																		<li><?php echo $rows_add->c_city; ?></li>

																	</ul>
																	<div class="entry-content">
																		<p><?php echo $rows->c_content; ?></p>
																	</div>
																	<a class="btn btn-info" href="index.php?controller=edit_class&act=edit&id=<?php echo $rows->pk_class_id; ?>">Sửa</a>
																	<a class="btn btn-danger" href="index.php?controller=profile&act=delete&id=<?php echo $rows->pk_class_id; ?>">Xóa</a>
																</div>
															</div>
														</div>
													</div>
												<?php endforeach; ?>
											<?php endforeach; ?>
										<?php endforeach; ?>
									<?php endforeach; ?>
												</div>		

												

											</div>
											<div class="tab-content clearfix" id="tab-posts">

												<!-- ========= -->

											</div>
											<div class="tab-content clearfix" id="tab-replies">

												<!-- ========= -->

											</div>
											<div class="tab-content clearfix" id="tab-connections">

												<div class="row topmargin-sm">
													<div class="col-lg-3 col-md-6 bottommargin">

														<div class="team">
															<div class="team-image">
																<img src="public/frontend/images/team/3.jpg" alt="John Doe">
															</div>
															<div class="team-desc">
																<div class="team-title"><h4>A</h4><span>TOán</span></div>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
																	<i class="icon-facebook"></i>
																	<i class="icon-facebook"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
																	<i class="icon-twitter"></i>
																	<i class="icon-twitter"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
																	<i class="icon-gplus"></i>
																	<i class="icon-gplus"></i>
																</a>
															</div>
														</div>

													</div>

													<div class="col-lg-3 col-md-6 bottommargin">

														<div class="team">
															<div class="team-image">
																<img src="public/frontend/images/team/2.jpg" alt="Josh Clark">
															</div>
															<div class="team-desc">
																<div class="team-title"><h4>B</h4><span>Văn</span></div>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
																	<i class="icon-facebook"></i>
																	<i class="icon-facebook"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
																	<i class="icon-twitter"></i>
																	<i class="icon-twitter"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
																	<i class="icon-gplus"></i>
																	<i class="icon-gplus"></i>
																</a>
															</div>
														</div>

													</div>

													<div class="col-lg-3 col-md-6 bottommargin">

														<div class="team">
															<div class="team-image">
																<img src="public/frontend/images/team/8.jpg" alt="Mary Jane">
															</div>
															<div class="team-desc">
																<div class="team-title"><h4>C</h4><span>Ngoại Ngữ</span></div>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
																	<i class="icon-facebook"></i>
																	<i class="icon-facebook"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
																	<i class="icon-twitter"></i>
																	<i class="icon-twitter"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
																	<i class="icon-gplus"></i>
																	<i class="icon-gplus"></i>
																</a>
															</div>
														</div>

													</div>

													<div class="col-lg-3 col-md-6">

														<div class="team">
															<div class="team-image">
																<img src="public/frontend/images/team/4.jpg" alt="Nix Maxwell">
															</div>
															<div class="team-desc">
																<div class="team-title"><h4>D</h4><span>Tin học</span></div>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
																	<i class="icon-facebook"></i>
																	<i class="icon-facebook"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
																	<i class="icon-twitter"></i>
																	<i class="icon-twitter"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
																	<i class="icon-gplus"></i>
																	<i class="icon-gplus"></i>
																</a>
															</div>
														</div>

													</div>
												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="w-100 line d-block d-md-none"></div>

						<div class="col-md-3 clearfix">

							<div class="list-group">
								<a href="#" class="list-group-item list-group-item-action clearfix">Profile <i class="icon-user float-right"></i></a>
								<a href="#" class="list-group-item list-group-item-action clearfix">Servers <i class="icon-laptop2 float-right"></i></a>
								<a href="#" class="list-group-item list-group-item-action clearfix">Messages <i class="icon-envelope2 float-right"></i></a>
								<a href="#" class="list-group-item list-group-item-action clearfix">Billing <i class="icon-credit-cards float-right"></i></a>
								<a href="#" class="list-group-item list-group-item-action clearfix">Settings <i class="icon-cog float-right"></i></a>
								<a href="#" class="list-group-item list-group-item-action clearfix">Logout <i class="icon-line2-logout float-right"></i></a>
							</div>

							<div class="fancy-title topmargin title-border">
								<h4>Giới thiệu bản thân</h4>
							</div>

							<p></p>

							<div class="fancy-title topmargin title-border">
								<h4>Kết nối với tôi</h4>
							</div>

							<a href="#" class="social-icon si-facebook si-small si-rounded si-light" title="Facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-gplus si-small si-rounded si-light" title="Google+">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-dribbble si-small si-rounded si-light" title="Dribbble">
								<i class="icon-dribbble"></i>
								<i class="icon-dribbble"></i>
							</a>

							<a href="#" class="social-icon si-flickr si-small si-rounded si-light" title="Flickr">
								<i class="icon-flickr"></i>
								<i class="icon-flickr"></i>
							</a>

							<a href="#" class="social-icon si-linkedin si-small si-rounded si-light" title="LinkedIn">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>

							<a href="#" class="social-icon si-twitter si-small si-rounded si-light" title="Twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->