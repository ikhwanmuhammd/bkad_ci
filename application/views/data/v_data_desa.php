<div class="content-wrapper halaman" data-halaman="Data Desa">
	<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Desa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item">Database</a></li>
            <li class="breadcrumb-item active">Data Desa</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Flash-data -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
  <?php if($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
      <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data desa <strong>berhasil</strong> <?= 
          $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div> -->
  <?php endif; ?>
  <!-- /.Flash-data -->

  <!-- Main-content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button type="button" class="btn btn-primary mr-3 modalTambahDesa" data-toggle="modal" data-target="#modal-tambah-desa" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm"></i> Tambah Desa</button>
              <div class="card-tools">
                <div class="input-group input-group-sm" >
                  <div class="input-group-append">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabel-desa" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="20px">No</th>
                    <th>Kode Desa</th>
                    <th>Nama Desa</th>
                    <th>Kepala Desa</th>
                    <th>Kecamatan</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($data_desa as $dd) :?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $dd->kode_desa?></td>
                      <td><?php echo strtoupper($dd->nama_desa)?></td>
                      <td><?php echo strtoupper($dd->nama_kepala_desa)?></td>
                      <td><?php echo strtoupper($dd->nama_kecamatan)?></td>
                      <td width="20px">
                        <a href="#" class="btn btn-warning btn-sm modalEditDesa" data-toggle="modal" data-target="#modal-edit-desa" data-backdrop="static" data-keyboard="false" data-placement="top" title="Edit" 
                          data-id="<?= $dd->id;?>" 
                          data-kode_desa="<?= $dd->kode_desa;?>"
                          data-nama_desa="<?= $dd->nama_desa;?>"
                          data-nama_kepala_desa="<?= $dd->nama_kepala_desa;?>"
                          data-nama_kecamatan="<?= $dd->nama_kecamatan;?>"
                          ><i class="fa fa-edit fa-sm"></i></a>
                      </td>
                      <td width="20px">
                        <a href="<?= base_url(); ?>data/data_desa/hapus_desa/<?= $dd->id;?>" class="btn btn-danger btn-sm tombol-hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash fa-sm"></i></a>
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
    <div class="modal fade" id="modal-tambah-desa">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary" id="bgLabelDesa">
            <h4 class="modal-title" id="formLabelDesa">Tambah Data Desa</h4>
          </div>
          <!-- form start -->
          <form method="post" action="<?php echo base_url('data/data_desa/simpan_desa') ?>">
            <div class="modal-body">
              <div class="form-group">
                <label for="tambah_kode_desa">Kode Desa</label>
                <input type="text" class="form-control" id="tambah_kode_desa" placeholder="Kode Desa"  name="kode_desa" style="text-transform: uppercase" required>
              </div>
              <div class="form-group">
                <label for="tambah_nama_desa">Nama Desa</label>
                <input type="text" class="form-control" id="tambah_nama_desa" placeholder="Nama Desa" name="nama_desa" style="text-transform: uppercase" required>
              </div>
              <div class="form-group">
                <label for="tambah_nama_kepala_desa">Kepala Desa</label>
                <input type="text" class="form-control" rows="3" id="tambah_nama_kepala_desa" placeholder="Nama Kepala Desa" name="nama_kepala_desa" style="text-transform: uppercase" required>
              </div>
              <div class="form-group">
                <label or="tambah_nama_kecamatan">Kecamatan</label>
                <select class="form-control" id="tambah_nama_kecamatan" placeholder="--Pilih Kecamatan--" name="nama_kecamatan" style="text-transform: uppercase">
                  <option value="">--Pilih Kecamatan--</option>
                  <?php foreach ($kecamatan as $kcmt):?>
                    <option value="<?php echo $kcmt->nama_kecamatan?>"><?php echo $kcmt->nama_kecamatan; ?></option>
                  <?php endforeach; ?>
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
    <!-- /.modal-tambah-desa -->
    <div class="modal fade" id="modal-edit-desa">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-info" id="bgLabelDesa">
            <h4 class="modal-title" id="formLabelDesa">Edit Data Desa</h4>
          </div>
          <!-- form start -->
          <form method="post" action="<?php echo base_url('data/data_desa/edit_desa') ?>">
            <input type="hidden" name="id" id="id">
            <div class="modal-body">
              <div class="form-group">
                <label for="kode_desa">Kode Desa</label>
                <input type="text" class="form-control" id="kode_desa" placeholder="Kode Desa"  name="kode_desa" style="text-transform: uppercase" required>
              </div>
              <div class="form-group">
                <label for="nama_desa">Nama Desa</label>
                <input type="text" class="form-control" id="nama_desa" placeholder="Nama Desa" name="nama_desa" style="text-transform: uppercase" required>
              </div>
              <div class="form-group">
                <label for="nama_kepala_desa">Kepala Desa</label>
                <input type="text" class="form-control" rows="3" id="nama_kepala_desa" placeholder="Nama Kepala Desa" name="nama_kepala_desa" style="text-transform: uppercase" required>
              </div>
              <div class="form-group">
                <label or="nama_kecamatan">Kecamatan</label>
                <select class="form-control" id="nama_kecamatan" placeholder="--Pilih Kecamatan--" name="nama_kecamatan" style="text-transform: uppercase">
                  <option value="">--Pilih Kecamatan--</option>
                  <?php foreach ($kecamatan as $kcmt):?>
                    <option value="<?php echo $kcmt->nama_kecamatan?>"><?php echo $kcmt->nama_kecamatan; ?></option>
                  <?php endforeach; ?>
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
    <!-- /.modal-edit-desa -->
  </section>
</div>

