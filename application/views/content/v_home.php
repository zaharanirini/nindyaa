<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
		<div class="clearfix"> </div>
	</div>

	<h3 align="center">Grafik Laporan Produksi</h3>
	<canvas id="myChart" style="chart.canvas.parentNode.style.height = '128px';"></canvas>
	
	<br />
	<h3 align="center">Tabel Laporan Produksi</h3>
	<div>
		<table>
			<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Wilayah</th>
				<th>Produksi</th>
			</tr>
			</thead>
				<tbody>
				<?php $i=1; foreach($list_data as $dt){ ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo date('d-M-Y', strtotime($dt['tanggal'])); ?></td>
						<td><?php echo $dt['wilayah']; ?></td>
						<td><?php echo $dt['produksi']; ?></td>
					</tr>
				<?php $i++; } ?>
				</tbody>
		</table>
	</div>
	<div class="clearfix"></div>
	<br />
</main>	
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Wilayah 1", "Wilayah 2", "Wilayah 3", "Wilayah 4", "Wilayah 5"],
        datasets: [{
            label: 'Laporan Produksi',
            data: [100000, 150000, 200000, 300000, 300000],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>