<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="<?php echo base_url('users/input_user');?>" class="btn btn-sm btn-flat btn-info"><i class="fa fa-user-plus"></i>  Tambah</a>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <h3 class="card-title"></h3>
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
              <th>No. Telp</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($untuktabel as $key) { ?>
              <tr>
                <td><?php echo $key->Id_user;?></td>
                <!-- <td><?php echo $key->username;?></td> -->
                <td><?php echo $key->nama;?></td>
                <td><?php echo $key->no_hp;?></td>
                <td><?php echo $key->alamat;?></td>
                <td class="text">
                  <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View</a>
                  <a href="<?php echo base_url('users/edit_user/'.$key->Id_user);?>" class="btn btn-warning btn-xs"><i class="fa fa-user-edit"></i> Edit</a>
                  <!-- <a href="<?php echo base_url('users/delete/'.$key->Id_user);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-sm btn-flat bg-red"><i class="fa fa-trash"></i></a> -->

                  <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action', '<?php echo base_url('users/delete/'.$key->Id_user);?>')" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash"></i> Delete
                  </a>

                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.card -->
  </div>
</div>

<!-- Modal Untuk Action Delete -->
<div class="modal fade" id="modalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-tittle">Yakin menghapus data ini ?</h4>
            </div>
            <div class="modal-footer">
                <form id="formDelete" action="" method="post">
                    <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>