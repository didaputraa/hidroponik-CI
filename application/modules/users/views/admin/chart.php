<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="grafik"></div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url('asset/highchart/jquery-1.11.3.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/highchart');?>/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url('asset/highchart');?>/exporting.js"></script>
<script type="text/javascript" src="<?php echo base_url('asset/highchart');?>/highcharts-3d.js"></script>
<script type="text/javascript">
  $('.grafik').highcharts({
    chart: {
      type: 'area',
      options3d: {
        enabled: true,
        alpha: 45,
        beta: 0
      },
      marginTop: 80
    },
    credits: {
      enabled: false
    },
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    title: {
      text: 'Data Input Wajah'
    },
    subtitle: {
      text: 'Website CRUD'
    },
    xAxis: {
      categories: <?php echo $array_kategori; ?>,
      labels: {
        style: {
          fontSize: '10px',
          fontFamily: 'Verdana, sans-serif'
        }
      }
    },
    legend: {
      enabled: true
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        depth: 35,
        dataLabels: {
          enabled: false
        },
        showInLegend: true
      }
    },
    series: <?php echo $array_series; ?>
  });
</script>

