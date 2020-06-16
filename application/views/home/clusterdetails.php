<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h3><strong><span><?= $icon ?></span> <?= $title ?></strong></h3>
	
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-lg-9 col-md-12 col-sm-12">
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
								<div class="table-wrapper-scroll-y my-custom-scrollbar">
									<?php 
									foreach ($getcluster as $j)
										: ?>
									<div class="col">
										<div class="card-box">
											<h3><?php echo $j -> cluster; ?></h3>
										<?php endforeach ?>
									</div> 

									<div class="table-wrapper-scroll-y my-custom-scrollbar">
										<table class="table table-bordered table-striped mb-0" id="example2">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">OPD</th>
												<th scope="col">IP</th>
												<th scope="col">Kondisi</th>
												<th scope="col" class="text-center">Time</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 1; ?>
											<?php foreach ($cluster as $j) : ?>
												<tr>
													<th scope="row"><?= $i; ?></th>
													<td><?php echo $j['opd'] ?></td>
													<td><?php echo $j['ip'] ?></td>
													<td><?php echo $j['kondisi'] ?></td>
													<td class="text-center"><?php echo $j['time'] ?></td>
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