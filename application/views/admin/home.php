<div class="row">
	<?php foreach($suhu as $suhu) { ?>
	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box">
			<span class="info-box-icon bg-info elevation-1"><i class="fas fa-temperature-high"></i></span>

			<div class="info-box-content" href="#">
				<span class="info-box-text">Suhu</span>

				<span class="info-box-number">
					<?php echo $suhu->suhu; ?>
				</span>

			</div>

			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box mb-3">
			<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-tint"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">Kelembaban</span>
				<span class="info-box-number">
					<?php echo $suhu->kelembaban; ?>
				</span>

			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>


	<!-- /.col -->
	<?php } ?>

	<!-- fix for small devices only -->
	<div class="clearfix hidden-md-up"></div>
	<?php foreach($cahaya as $cahaya) { ?>
	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box mb-3">
			<span class="info-box-icon bg-success elevation-1"><i class="fas fa-sun"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">Intensitas Cahaya</span>
				<span class="info-box-number">
					<?php echo $cahaya->cahaya; ?>

				</span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
	<?php } ?>

	<div class="clearfix hidden-md-up"></div>
	<?php foreach($tinggi as $tinggi) { ?>
	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box mb-3">
			<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-water"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">Ketinggian Air</span>
				<span class="info-box-number">
					<?php echo $tinggi->tinggi; ?>
			</div>
		</div>
		<!-- /.info-box-content -->
	</div>
	<!-- /.info-box -->
</div>
<!-- /.col -->
<?php } ?>

<!-- Code View Grafik -->
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div id="data_grafik"></div>
			</div>
		</div>
	</div>
</div>

</div>

<!-- Query untuk mengambil data tabel Grafik Suhu -->
<?php
    /* Mengambil query report*/
    foreach($report as $result){
        $suhureport[] = (float) $result->suhu; //ambil suhu
        $waktu[] = date('d-M-Y H:i:s', strtotime($result->waktu)); //ambil waktu dengan mengubah format
        $kelembabanreport[] = (float) $result->kelembaban;
				$cahayareport[] = (float) $result->cahaya;
				$tinggireport[] = (float) $result->tinggi;
    }
    /* end mengambil query*/

		/* Mengambil query report cahaya*/
    // foreach($report_cahaya as $result_cahaya){
    //     $cahayareport[] = (float) $result_cahaya->cahaya; //ambil cahaya
    //     $waktu_cahaya[] = date('d-M-Y H:i:s', strtotime($result_cahaya->waktu)); //ambil waktu dengan mengubah format
    // }
    /* end mengambil query*/

?>


<script src="<?php echo base_url('asset/chartjs'); ?>/highcharts.js"></script>
<script src="<?php echo base_url('asset/chartjs'); ?>/exporting.js"></script>
<script src="<?php echo base_url('asset/chartjs'); ?>/export-data.js"></script>
<script src="<?php echo base_url('asset/chartjs'); ?>/accessibility.js"></script>
<script type="text/javascript">
	Highcharts.chart('data_grafik', {
		chart: {
			type: 'area'
		},
		title: {
			text: 'Data Grafik'
		},
		subtitle: {
			text: ''
		},
		xAxis: {
			categories: <?php echo json_encode($waktu);?>,
			tickmarkPlacement: 'on',
			title: {
				enabled: false
			}
		},
		yAxis: {
			title: {
				text: 'Nilai'
			},
			labels: {
				formatter: function() {
					return this.value;
				}
			}
		},
		tooltip: {
			split: true,
			valueSuffix: ''
		},
		plotOptions: {
			area: {
				stacking: 'normal',
				lineColor: '#666666',
				lineWidth: 1,
				marker: {
					lineWidth: 1,
					lineColor: '#666666'
				}
			}
		},
		series: [{
				name: 'Kelembaban',
				data: <?php echo json_encode($kelembabanreport);?>
			},
			{
				name: 'Suhu',
				data: <?php echo json_encode($suhureport);?>
			},
			{
				name: 'Cahaya',
				data: <?php echo json_encode($cahayareport);?>
			},
			{
				name: 'Tinggi',
				data: <?php echo json_encode($tinggireport);?>
			},
		]
	});

</script>
<!-- End Code View Grafik -->
