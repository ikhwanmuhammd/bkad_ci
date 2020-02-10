<div class="content-wrapper halaman" data-halaman="Data Kelompok">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Kelompok</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item">Database</a></li>
            <li class="breadcrumb-item active">Data Kelompok</li>
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
              <button type="button" class="btn btn-primary mr-3" data-toggle="modal" data-target="#modal-tambah-kelompok" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm"></i> Tambah Kelompok</button>
              <!-- <div class="form-horizontal form-inline float-right">
                <label class="control-label mr-2" for="filter_status">Filter</label>
                <select class="form-control form-sm" id="filter_status" name="filter_status">
                  <option value="All" selected>All</option>
                  <?php foreach ($data_kelompok as $dk):?>
                    <option value="<?php echo $dk->status_kelompok?>"><?php echo $dk->status_kelompok; ?></option>
                  <?php endforeach; ?>
                </select>
              </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabel-kelompok" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="20px">No</th>
                    <th>ID Kelompok</th>
                    <th>Nama Kelompok</th>
                    <th>Ketua Kelompok</th>
                    <th>Status Kelompok</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($data_kelompok as $dk) :?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $dk->id_kelompok?></td>
                      <td><?php echo $dk->nama_kelompok?></td>
                      <td><?php echo $dk->ketua_kelompok?></td>
                      <td><h5><span id="status" class="badge badge-pill badge-success"><?php echo $dk->status_kelompok?></span></h5></td>
                      <td width="20px">
                        <a href="<?= base_url(); ?>data/data_kelompok/detail_kelompok/<?= $dk->id_kelompok;?>" class="btn btn-info btn-sm" data-backdrop="static" data-keyboard="false" data-placement="top" title="Detail"><i class="fa fa-eye fa-sm"></i></a>
                      </td>
                      <td width="20px">
                        <a href="<?= base_url(); ?>data/data_kelompok/hapus_kelompok/<?= $dk->id_kelompok;?>" class="btn btn-danger btn-sm tombol-hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash fa-sm"></i></a>
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
    <div class="modal fade" id="modal-tambah-kelompok">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title" id="formLabelKelompok">Tambah Data Kelompok</h4>
          </div>
          <!-- form start -->
          <form method="post" action="<?php echo base_url('data/data_kelompok/simpan_kelompok') ?>">
            <div class="modal-body">
              <div class="form-group">
                <label for="id_kelompok">ID Kelompok</label>
                <input type="text" class="form-control" id="id_kelompok" placeholder="ID Kelompok"  name="id_kelompok" style="text-transform: uppercase" required>
              </div>
              <div class="form-group">
                <label for="nama_kelompok">Nama Kelompok</label>
                <input type="text" class="form-control" id="nama_kelompok" placeholder="Nama Kelompok" name="nama_kelompok" style="text-transform: uppercase" required>
              </div>
              <div class="form-group">
                <label for="ketua_kelompok">Ketua Kelompok</label>
                <select class="form-control select2" id="ketua_kelompok" placeholder="--Pilih Ketua--" name="ketua_kelompok" style="text-transform: uppercase">
                  <option value=""></option>
                  <?php foreach ($anggota as $agt):?>
                    <option value="(<?php echo $agt->id?>) <?php echo $agt->nama?>">(<?php echo $agt->id?>) <?php echo $agt->nama; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="status_kelompok">Status Kelompok</label>
                <select class="form-control" id="status_kelompok" placeholder="--Pilih--" name="status_kelompok">
                  <option>Aktif</option>
                  <option>Nonaktif</option>
                </select>
              </div>
            </div>
            <!-- /.modal-body -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal-tambah-kelompok -->
  </section>
</div>
