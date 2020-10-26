<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Detail Data Laporan Produksi</h1>
		<div class="clearfix"> </div>
	</div>

	<h3 align="center">Laporan Produksi Wilayah <?php echo $dt_view[0]->wilayah; ?></h3>
	<br />
	<table>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td><?php echo date('d-M-Y', strtotime($dt_view[0]->tanggal)); ?></td>
		</tr>
		<tr>
			<td>Wilayah</td>
			<td>:</td>
			<td><?php echo $dt_view[0]->wilayah; ?></td>
		</tr>
		<tr>
			<td>Hasil Produksi</td>
			<td>:</td>
			<td><?php echo $dt_view[0]->produksi; ?></td>
		</tr>
		<tr>
			<td>Penulis Laporan</td>
			<td>:</td>
			<td><?php echo $dt_view[0]->email; ?></td>
		</tr>
		<tr>
			<td>Tanggal Penulisan Laporan</td>
			<td>:</td>
			<td><?php echo date('d-M-Y', strtotime($dt_view[0]->create_date)); ?></td>
		</tr>
		<tr>
			<td>Status Laporan</td>
			<td>:</td>
			<td><?php if($dt_view[0]->status!='0') { echo "Laporan telah di perbarui"; } else { echo "-"; } ?></td>
		</tr>
	</table>
	<div class="clearfix"></div>
	<br />
	<button type="button" class="btn btn-primary" name="icon-back" id="icon-back"><span class="fa fa-undo"></span> Kembali</button>
	<br />
	<br />
</main>

<script>
	$("#icon-back").on("click", function(){
		window.location.replace('<?php echo base_url();?>laporan');
	});
</script>