<div class="row">
  <div class="col-10">
    <div class="card">
      <div class="card-header">
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <h3 class="card-title"></h3>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 500px;">
        <table class="table table-head-fixed">
          <thead>
            <tr>
              <th>No</th>
              <th>Suhu</th>
              <th>Kelembaban</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($crul as $key) { ?>
              <tr>
                <td><?php echo $key->id;?></td>
                <td><?php echo $key->Suhu;?></td>
                <td><?php echo $key->Kelembaban;?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.card -->
  </div>
</div>