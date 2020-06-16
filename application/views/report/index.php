<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<a href="<?= base_url('report/') .$download; ?>" target="_blank" class="btn btn-danger mb-3"><i class="fas fa-cloud-download-alt"></i> Download PDF</a>
	<!-- <div class="table-wrapper-scroll-y my-custom-scrollbar"> -->
		<table class="table table-hover display table-responsive  w-100 d-block d-md-table" id="example2">
			<thead>
				<tr>
					<th scope="col" class="text-center">#</th>
					<th scope="col" class="text-center">Perangkat/OPD</th>
					<th scope="col" class="text-center">Alamat</th>
					<th scope="col" class="text-center">Cluster</th>
					<th scope="col" class="text-center">Jenis Konverter</th>
					<th scope="col" class="text-center">IP Address</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($report as $d) : ?>
					<tr>
						<th scope="row" class="text-center"><?= $i; ?></th>
						<td><?php echo $d['opd'] ?></td>
						<td><?php echo $d['alamat'] ?></td>
						<td><?php echo $d['cluster'] ?></td>
						<td><?php echo $d['jenis_konverter'] ?></td>
						<td><?php echo $d['ip'] ?></td>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
	<br>
	<!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->