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
				<h1>Danh sách các lớp học</h1>
				<span>Hàng ngàn học sinh đang tìm kiếm gia sư cho mình</span>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		

		<section id="content">
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
			<div class="content-wrap">

				<div class="container clearfix">
					<h4>Những lớp mới được cập nhật liên tục</h4>

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
									$class = $this->model->get_all("select * from tbl_class order by pk_class_id desc limit $from,$record_per_page");
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
												<?php 
												$topic = $this->model->get_all("select * from tbl_topic where pk_topic_id = {$rows_subject->fk_topic_id} ");
												foreach($topic as $rows_topic):
													?>
													<tr>
														<td><?php echo $rows->pk_class_id; ?></td>
														<td>
											<div class="d-flex w-100 justify-content-between">
												<a href="index.php?controller=class_detail&id=<?php echo $rows->pk_class_id; ?>"><h4 class="mb-2"><?php echo $rows->c_desc; ?></h4></a>
											</div>
											<p class="mb-1"><?php echo $rows->c_content; ?>.</p>
											<small class="text-muted">
												<span><?php echo $rows_subject->c_name; ?></span> &nbsp; <span><?php echo $rows_level->c_name; ?></span><span>-</span>&nbsp;
												<span><?php echo $rows_add->c_city; ?></span> 
											</small>
										</td>
										<td><?php echo $rows_topic->c_name; ?></td>
										<td><?php echo $rows->c_fee; ?> đ</td>
									</tr>
								<?php endforeach; ?>
							<?php endforeach; ?>
						<?php endforeach; ?>
						<?php endforeach; ?>
					<?php endforeach; ?>

								</tbody>
							</table>

						</div>
						<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
						<?php for($i = 1; $i<=$num_page; $i++): ?>
						<li class="page-item"><a class="page-link" href="index.php?controller=class&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php endfor; ?>
					</ul>
				</div>
				</div>
				
			</div>

		</section><!-- #content end -->