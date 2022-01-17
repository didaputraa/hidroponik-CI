
  <div class="col-md-9">
    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Data User</a></li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div>
          

          <div class="tab-pane" id="settings">
            <form class="form-horizontal">
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputName" placeholder="Name" value="<?php echo $isi->username;?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $isi->nama;?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputName2" class="col-sm-2 col-form-label">No. Telp</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName2" placeholder="Name" value="<?php echo $isi->no_hp;?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="inputExperience" placeholder="Experience"><?php echo $isi->alamat;?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputSkills" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputSkills" placeholder="Aktif">
                </div>
              </div>
              
              
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>