<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <form action="<?php echo base_url('cahaya/index');?>" method="post">
          <div class="input-group input-group-sm" style="width: 300px;">
            <input type="text" name="keyword" class="form-control float-right" placeholder="Search Data.." autocomplete="off" autofocus>

            <div class="input-group-append">
              <input type="submit" class="btn btn-primary" name="submit">
            </div>
          </div>
        </form>
        <span>Jumlah Data <?php echo $keyword;?> : <?php echo $total_rows;?> Data</span>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <h3 class="card-title"></h3>

          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed">
          <thead>
            <tr>
              <th>No</th>
              <th>Ketinggian Air Bak Penampung</th>
              <th>Waktu</th>
            </tr>
          </thead>
          <tbody>
            <?php if(empty($isitabel)) : ?>
              <tr>
                <td colspan="4">
                  <div class="alert alert-danger" role="alert">
                    Data Not Found!
                  </div>
                </td>
              </tr>
            <?php endif;?>
            <?php foreach ($isitabel as $key) : ?>
              <tr>
                <td><?php echo ++$start;?></td>
                <td><?php echo $key['tinggi'];?></td>
                <td><?php echo date('d-M-Y H:i:s', strtotime($key['waktu']));?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

      </div>
      <div class="card-footer clearfix">
        <?php echo $this->pagination->create_links(); ?>
      </div>
    </div>
    <!-- /.card -->
  </div>
</div>


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

<?php
/* Mengambil query report*/
foreach($report as $result){
        $cahaya[] = (float) $result->tinggi; //ambil cahaya
        $waktu[] = $result->waktu; //ambil waktu

      }
      /* end mengambil query*/

      ?>

      <script src="<?php echo base_url('asset/chartjs'); ?>/highcharts.js"></script>
      <script src="<?php echo base_url('asset/chartjs'); ?>/exporting.js"></script>
      <script src="<?php echo base_url('asset/chartjs'); ?>/export-data.js"></script>
      <script src="<?php echo base_url('asset/chartjs'); ?>/accessibility.js"></script>
      <script type="text/javascript">
        Highcharts.chart('data_grafik', {
          chart: {
            type: 'spline'
          },
          title: {
            text: 'Data Ketinggian Air Bak Penampung'
          },
          subtitle: {
            text: ''
          },
          xAxis: {
            categories: <?php echo json_encode($waktu);?> ,
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
              formatter: function () {
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
            name: 'Ketinggian Air Bak Penampung',
            data: <?php echo json_encode($cahaya);?>
          }]
        });
      </script>
<!-- End Code View Grafik -->
