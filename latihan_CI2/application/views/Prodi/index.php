  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3><strong>Daftar Prodi</strong></h3>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard'); ?>">Home</a></li>
                          <li class="breadcrumb-item active">Prodi</li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/mahasiswa'); ?>">Mahasiswa</a></li>
                          <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dosen'); ?>">Dosen</a></li>

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
                      <?php
                        if ($this->session->userdata('ROLE') == 'ADMIN') {
                        ?>
                          <a href="<?php echo base_url('index.php/prodi/create'); ?>"><button type="button" class="btn btn-success">Create Prodi</button></a>
                      <?php
                        }
                        ?>
                      <div class="container mt-3 mx-auto ">
                          <div class="table-responsive">
                              <table class="table table-light table-hover">
                                  <thead>
                                      <tr>
                                          <th>NO</th>
                                          <th>KODE</th>
                                          <th>Nama Prodi</th>
                                          <th>Ketua Prodi</th>
                                          <?php
                                            if ($this->session->userdata('ROLE') == 'ADMIN' or $this->session->userdata('ROLE') == 'MAHASISWA') {
                                            ?>
                                              <th>Action</th>
                                          <?php
                                            }
                                            ?>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $nomor = 1;
                                        foreach ($list_prodi as $row) {
                                        ?>
                                          <tr>
                                              <td><?= $nomor ?></td>
                                              <td><?= $row->kode ?></td>
                                              <td><?= $row->nama ?></td>
                                              <td><?= $row->kaprodi ?></td>
                                              <?php
                                                if ($this->session->userdata('ROLE') == 'ADMIN') {
                                                ?>
                                                  <td>
                                                      <a href="<?php echo base_url('index.php/prodi/view?id='); ?><?= $row->kode ?>">View</a> |
                                                      <a href="<?php echo base_url('index.php/prodi/edit?id='); ?><?= $row->kode ?>">Edit</a> |
                                                      <a href="<?php echo base_url('index.php/prodi/delete?id='); ?><?= $row->kode ?>" onclick="if(!confirm('Anda Yakin Hapus Prodi KODE <?= $row->kode ?>?')) {return false}">Delete</a>
                                                  </td>
                                              <?php
                                                } elseif ($this->session->userdata('ROLE') == 'MAHASISWA') {
                                                ?>
                                                  <td>
                                                      <a href="<?php echo base_url('index.php/prodi/view?id='); ?><?= $row->kode ?>">View</a>
                                                  </td>
                                              <?php
                                                }
                                                ?>
                                          </tr>
                                      <?php
                                            $nomor++;
                                        }
                                        ?>
                                  </tbody>
                              </table>
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