<div class="row">
  <div class="col-md-7">
<div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle"
          src="<?php echo base_url('uploads/'.$isi->foto_user);?>"
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
          <li class="list-group-item">
            <b>Friends</b> <a class="float-right">13,287</a>
          </li>
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
</div>
</div>
