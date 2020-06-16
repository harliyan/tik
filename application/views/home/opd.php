<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h3><strong><span><?= $icon ?></span> <?= $title ?></strong></h3>
	
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
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
								<div class="container-fluid">
									<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
									<div class="table-wrapper-scroll-y my-custom-scrollbar">
										<table class="table table-bordered table-striped mb-0"  id="example2">
										<thead>
											<tr>
												<th scope="col" class="text-center">#</th>
												<th scope="col">Perangkat/OPD</th>
												<th scope="col">Nama OPD</th>
												<th scope="col">Alamat</th>
												<th scope="col">Email</th>
												<th scope="col">Kontak</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 1; ?>
											<?php foreach ($opd as $d) : ?>
												<tr>
													<th scope="row" class="text-center"><?= $i; ?></th>
													<td><?php echo $d['opd'] ?></td>
													<td><?php echo $d['opd_nama'] ?></td>
													<td><?php echo $d['alamat'] ?></td>
													<td><?php echo $d['email'] ?></td>
													<td><?php echo $d['kontak'] ?></td>
												</tr>
												<?php $i++; ?>
											<?php endforeach; ?>
										</tbody>
									</table>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>

</div>
</div>
