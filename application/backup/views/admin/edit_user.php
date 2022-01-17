<div class="col-md-12">
            <!-- general form elements -->
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url('index.php/Dashboard/edituserpost/'.$isi->Id_user);?>" method='post'>
                <div class="card-body">

                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username" required="" value="<?php echo $isi->username;?>">
                  </div>
                </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" placeholder="Password" name="pw" required="" value="<?php echo $isi->password;?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      
                      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required="" value="<?php echo $isi->nama;?>">

                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">No. HP</label>
                    <div class="col-sm-10">
                      
                      <input type="text" class="form-control" id="no_hp" placeholder="Masukan Nomor HP" name="no_hp" required="" value="<?php echo $isi->no_hp;?>">

                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      
                      <textarea type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" required=""><?php echo $isi->alamat;?></textarea>

                    </div>
                  </div>
                  

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>