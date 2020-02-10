<div class="content-wrapper halaman" data-halaman="Data Anggota">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Anggota</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item">Database</a></li>
            <li class="breadcrumb-item active">Data Anggota</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Flash-data -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>

  <!-- /.Flash-data -->

  <!-- Main-content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="<?= base_url(); ?>data/tambah_anggota/" type="button" class="btn btn-primary mr-3"><i class="fas fa-plus fa-sm"></i> Tambah Anggota</a>
              <!-- <div class="form-horizontal form-inline float-right">
                <label class="control-label mr-2" for="filter_status">Filter</label>
                <select class="form-control form-sm" id="filter_status" name="filter_status">
                  <option value="All" selected>All</option>
                  <?php foreach ($data_anggota as $dk):?>
                    <option value="<?php echo $dk->status_anggota?>"><?php echo $dk->status_anggota; ?></option>
                  <?php endforeach; ?>
                </select>
              </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabel-anggota" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="20px">No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>HP</th>
                    <th>Desa</th>
                    <th>Pekerjaan</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($data_anggota as $da) :?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $da->id?></td>
                      <td><?php echo strtoupper($da->nama)?></td>
                      <td><?php echo $da->jk?></td>
                      <td><?php echo $da->no_hp?></td>
                      <td><?php echo strtoupper($da->nama_desa)?></td>
                      <td><?php echo strtoupper($da->pekerjaan)?></td>
                      <td><h5><span id="status" class="badge badge-pill badge-success"><?php echo $da->status_anggota?></span></h5></td>
                      <td width="20px">
                        <a href="<?= base_url(); ?>data/data_anggota/detail_anggota/<?= $da->id;?>" class="btn btn-info btn-sm" data-backdrop="static" data-keyboard="false" data-placement="top" title="Detail"><i class="fa fa-eye fa-sm"></i></a>
                      </td>
                      <td width="20px">
                        <a href="<?= base_url(); ?>data/data_anggota/hapus_anggota/<?= $da->id;?>" class="btn btn-danger btn-sm tombol-hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash fa-sm"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>
