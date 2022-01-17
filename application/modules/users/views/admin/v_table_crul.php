<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <h3 class="card-title">Data User</h3>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed">
          <thead>
            <tr>
              <th>No</th>
              <!-- <th>Username</th> -->
              <th>Name</th>
              <th>Username</th>
              <th>Contact</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($crul as $key) { ?>
              <tr>
                <td><?php echo $key->id;?></td>
                <td><?php echo $key->nama;?></td>
                <td><?php echo $key->user;?></td>
                <td><?php echo $key->no_telp;?></td>
                
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.card -->
  </div>
</div>