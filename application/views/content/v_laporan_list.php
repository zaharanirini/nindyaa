<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Laporan Produksi</h1>
		<div class="clearfix"> </div>
	</div>

	<h3 align="center">Tabel Laporan Produksi</h3>
	<br />
	<div>
		<table id ="myTable" class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Wilayah</th>
				<th>Hasil Produksi</th>
				<th>Penulis Laporan</th>
				<th>Tanggal Penulisan Laporan</th>
				<th>Status Laporan</th>
				<th>Aksi</th>
			</tr>
			</thead>
				<tbody>
				<?php $i=1; foreach($list_data as $dt){ ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo date('d-M-Y', strtotime($dt['tanggal'])); ?></td>
						<td><?php echo $dt['wilayah']; ?></td>
						<td><?php echo $dt['produksi']; ?></td>
						<td><?php echo $dt['email']; ?></td>
						<td><?php echo date('d-M-Y H:i:s', strtotime($dt['create_date'])); ?></td>
						<td><?php if($dt['status']!='0') { echo "Laporan telah di perbarui"; } else { echo "-"; } ?></td>
						<td>
							<a href="<?php echo base_url(); ?>laporan/view_laporan/<?php echo $dt['no'] ?>" title="Lihat Data <?php echo $dt['no']; ?> ">Lihat Detail Data</a>
						</td>
					</tr>
				<?php $i++; } ?>
				</tbody>
		</table>
	</div>
	<div class="clearfix"></div>
	<br />
</main>

<script>
$(document).ready(function(){
	$('#myTable').DataTable({
        "scrollX": true
    });
});
</script>