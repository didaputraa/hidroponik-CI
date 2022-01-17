<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle"
          src="<?php echo base_url('asset/AdminLTE');?>/dist/img/avatar5.png"
          alt="User profile picture">
        </div>

        <h3 class="profile-username text-center"><?php echo($this->session->userdata('Admin')['log_nama']);?></h3>

        <p class="text-muted text-center">Software Engineer</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Followers</b> <a class="float-right">1,322</a>
          </li>
          <li class="list-group-item">
            <b>Following</b> <a class="float-right">543</a>
          </li>
          <li class="list-group-item">
            <b>Friends</b> <a class="float-right">13,287</a>
          </li>
        </ul>

        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- About Me Box -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">About Me</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <strong><i class="fas fa-book mr-1"></i> Education</strong>

        <p class="text-muted">
          Politeknik Harapan Bersama Tegal
        </p>

        <hr>

        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

        <p class="text-muted">Tegal, Jawa Tengah</p>

        <hr>

        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

        <p class="text-muted">
          <span class="tag tag-danger">UI Design, </span>
          <span class="tag tag-success">Coding, </span>
          <span class="tag tag-info">Javascript, </span>
          <span class="tag tag-warning">PHP, </span>
          <span class="tag tag-primary">Node.js</span>
        </p>

        <hr>

        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

        <p class="text-muted">Belajar Terus</p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
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