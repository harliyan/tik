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
							<div class="tab-content">
								<?php
								if($this->session->flashdata('successDelete')){
									echo
									'<div class="alert alert-info">'.
									$this->session->flashdata('successDelete').'</div>';
								} ?>
								<br>
								<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

								<?php if($this->session->flashdata('success')){ ?>  
									<div class="alert alert-success">  
										<a href="#" class="close" data-dismiss="alert">&times;</a>  
										<strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>  
									</div>  
								<?php } else if($this->session->flashdata('error')){ ?>  
									<div class="alert alert-danger">  
										<a href="#" class="close" data-dismiss="alert">&times;</a>  
										<strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>  
									</div>  
								<?php } else if($this->session->flashdata('warning')){ ?>  
									<div class="alert alert-warning">  
										<a href="#" class="close" data-dismiss="alert">&times;</a>  
										<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>  
									</div>  
								<?php } else if($this->session->flashdata('info')){ ?>  
									<div class="alert alert-info">  
										<a href="#" class="close" data-dismiss="alert">&times;</a>  
										<strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>  
									</div>  
								<?php } ?>  
								<div class="table-wrapper-scroll-y my-custom-scrollbar">
										<table class="table table-bordered table-striped mb-0"  id="example2">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Jointing Point</th>
												<th scope="col">JointingID</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 1; ?>
											<?php foreach ($jointing as $j) : ?>
												<tr>
													<th scope="row"><?= $i; ?></th>
													<td><?php echo $j['jointing'] ?></td>
													<td><?php echo $j['id'] ?></td>
												</tr>
												<?php $i++; ?>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

	</div>
</div>
