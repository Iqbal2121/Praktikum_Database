  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><strong>Daftar Mahasiswa</strong></h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/prodi/index'); ?>">Prodi</a></li>
              <li class="breadcrumb-item active">Mahasiswa</li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dosen/index'); ?>">Dosen</a></li>

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
              if ($this->session->userdata('ROLE') == 'ADMIN'){
            ?>
                <a href="<?php echo base_url('index.php/mahasiswa/create'); ?>"><button type="button" class="btn btn-success">Create Mahasiswa</button></a>
            <?php
              }
            ?>
            <div class="container mt-3 mx-auto ">
              <div class="table-responsive">
                <table class="table table-light table-hover">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Gender</th>
                      <th>Tempat Tanggal Lahir</th>
                      <th>IPK</th>
                      <th>Kode Prodi</th>
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
                    foreach ($list_mahasiswa as $row) {
                    ?>
                      <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $row->nim ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->gender ?></td>
                        <td><?= $row->tmp_lahir . ", " . $row->tgl_lahir ?></td>
                        <td><?= $row->ipk ?></td>
                        <td><?= $row->prodi_kode ?></td>
                        <?php
                        if ($this->session->userdata('ROLE') == 'ADMIN') {
                        ?>
                          <td>
                            <a href="<?php echo base_url('index.php/mahasiswa/view?id='); ?><?= $row->nim ?>">View</a> |
                            <a href="<?php echo base_url('index.php/mahasiswa/edit?id='); ?><?= $row->nim ?>">Edit</a> |
                            <a href="<?php echo base_url('index.php/mahasiswa/delete?id='); ?><?= $row->nim ?>" onclick="if(!confirm('Anda Yakin Hapus Mahasiswa NIM <?= $row->nim ?>?')) {return false}">Delete</a>
                          </td>
                        <?php
                        } elseif ($this->session->userdata('ROLE') == 'MAHASISWA') {
                        ?>
                          <td>
                            <a href="<?php echo base_url('index.php/mahasiswa/view?id='); ?><?= $row->nim ?>">View</a>
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Daftar Mahasiswa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/pekan10'); ?>">Prodi</a></li>
              <li class="breadcrumb-item active">Mahasiswa</li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/pekan10dosen'); ?>">Dosen</a></li>

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
            <a href="<?php echo base_url('index.php/tambahmahasiswa'); ?>"><button type="button" class="btn btn-success">Tambah Mahasiswa</button></a>
            <div class="container mt-3 mx-auto ">
              <div class="table-responsive">
                <table class="table table-light table-hover">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Gender</th>
                      <th>Tempat Tanggal Lahir</th>
                      <th>IPK</th>
                      <th>Kode Prodi</th>
                      <?php
                      if ($this->session->userdata('ROLE') == 'ADMIN') {
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
                    foreach ($list_mahasiswa as $row) {
                    ?>
                      <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $row->nim ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->gender ?></td>
                        <td><?= $row->tmp_lahir . ", " . $row->tgl_lahir ?></td>
                        <td><?= $row->ipk ?></td>
                        <td><?= $row->prodi_kode ?></td>
                        <?php
                        if ($this->session->userdata('ROLE') == 'ADMIN') {
                        ?>
                          <td>
                            <a href="<?php echo base_url('index.php/pekan10mahasiswa/view?id='); ?><?= $row->nim ?>">View</a> |
                            <a href="<?php echo base_url('index.php/tambahmahasiswa/edit?id='); ?><?= $row->nim ?>">Edit</a> |
                            <a href="<?php echo base_url('index.php/tambahmahasiswa/delete?id='); ?><?= $row->nim ?>" onclick="if(!confirm('Anda Yakin Hapus Mahasiswa NIM <?= $row->nim ?>?')) {return false}">Delete</a>
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