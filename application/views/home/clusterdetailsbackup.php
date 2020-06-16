<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h3><strong><span><?= $icon ?></span> <?= $title ?></strong></h3>
	
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<!-- Custom Tabs -->
				<div class="box-body">
					<div class="card">
						<div class="card-header d-flex p-0">
						</div><!-- /.card-header -->
						<div class="card-body">
							<div class="row">
								<?php 
								foreach ($cluster as $data)
									: ?>
								<div class="col">
									<div class="card-box">
										<div class="container">
											<div class="row">
												<div class="col-sm">
													<p><?php echo $data -> cluster; ?></p>
												</div>
											</div>
										</div>
									<?php endforeach ?>
								</div> 
							</div>
						</section>
					</div>
				</div>
