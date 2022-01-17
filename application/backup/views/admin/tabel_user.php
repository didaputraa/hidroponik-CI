<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data User</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <a href="<?php echo base_url('index.php/Dashboard/input_user');?>"><i class="fa fa-user"></i>Tambah</a>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Name</th>
              <th>No. Telp</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($isi as $key) { ?>

              <tr>
                <td><?php echo $key->Id_user;?></td>
                <td><?php echo $key->username;?></td>
                <td><?php echo $key->nama;?></td>
                <td><?php echo $key->no_hp;?></td>
                <td><?php echo $key->alamat;?></td>
                <td class=" last">

                  <a href="<?php echo base_url('index.php/Dashboard/delete/'.$key->Id_user);?>"><i class="fa fa-trash"></i>Delete</a>
                  <a href="<?php echo base_url('index.php/Dashboard/edit_user/'.$key->Id_user);?>"> <i class="fa fa-edit"></i> Edit</a>
                </td>
              </tr>

            <?php } ?>

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>