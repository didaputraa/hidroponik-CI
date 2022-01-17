<!DOCTYPE html>
<html>
<head>
    <title>MEMBUAT GRAFIK LINE DENGAN PLUGIN HIGHCHART</title>
    <script type="text/javascript" src="<?php echo base_url('asset/highchart/jquery-1.11.3.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/highchart');?>/highcharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/highchart');?>/exporting.js"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/highchart');?>/highcharts-3d.js"></script>
    <style type="text/css">
    .container { margin: auto; padding: 5px; width: 800px; border: 2px solid #DBDBDB; }
</style>

</head>
<body>
    <div class="container">
        <div class="grafik" style="width:100%; height:400px;"></div>
    </div>
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
        text: 'Data Suhu dan Kelembaban Green House'
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
</body>
</html>