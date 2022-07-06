  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Biodata Mahasiswa</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard'); ?>">Home</a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/prodi'); ?>">Prodi</a></li>

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
                  <h3 class="card-title">Data Mahasiswa</h3>

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

                      <div class="row mb-2">
                          <div class="col-sm-8">
                              <table class="table table-striped">
                                  <tbody>
                                      <tr>
                                          <td>NIM</td>
                                          <td><?= $prd->kode ?></td>
                                      </tr>
                                      <tr>
                                          <td>Nama Lengkap</td>
                                          <td><?= $prd->nama ?></td>
                                      </tr>
                                      <tr>
                                          <td>Gender</td>
                                          <td><?= $prd->kaprodi ?></td>
                                      </tr>
                                  </tbody>
                              </table>

                          </div>
                          <div class="col-sm-4">
                              INI FOTO
                          </div>
                      </div>
                  </div>
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