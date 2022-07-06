  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard'); ?>">Home</a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/prodi/create'); ?>">Create Prodi</a></li>
                          <li class="breadcrumb-item active">Create Mahasiswa</li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dosen/create'); ?>">Create Dosen</a></li>



                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

          <!-- Default box -->
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Form Tambah Mahasiswa</h3>

                  <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                          <i class="fas fa-times"></i>
                      </button>
                  </div>
              </div>
              <div class="card-body">
                  <div class="col-md-12">


                      <?php echo form_open('mahasiswa/save'); ?>
                      <div class="form-group row">
                          <label for="nim" class="col-4 col-form-label">NIM</label>
                          <div class="col-8">
                              <input id="nim" name="nim" type="text" class="form-control">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="nama" class="col-4 col-form-label">Nama</label>
                          <div class="col-8">
                              <input id="nama" name="nama" type="text" class="form-control">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-4">Jenis Kelamin</label>
                          <div class="col-8">
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L">
                                  <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P">
                                  <label for="gender_1" class="custom-control-label">Perempuan</label>
                              </div>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                          <div class="col-8">
                              <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                          <div class="col-8">
                              <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="ipk" class="col-4 col-form-label">IPK</label>
                          <div class="col-8">
                              <input id="ipk" name="ipk" type="text" class="form-control">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="prodi_kode" class="col-4 col-form-label">Kode Prodi</label>
                          <div class="col-8">
                              <select id="prodi_kode" name="prodi_kode" class="custom-select">
                                  <option value="SI">Sistem Informasi</option>
                                  <option value="TI">Teknik Informatika</option>
                                  <option value="BD">Bisnis Digital</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="offset-4 col-8">
                              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </div>
                      <?php echo form_close(); ?>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">

                  </div>
                  <!-- /.card-footer-->
              </div>
              <!-- /.card -->

      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->