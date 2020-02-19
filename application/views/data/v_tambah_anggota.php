<div class="content-wrapper halaman" data-halaman="Tambah Anggota">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Anggota</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item">Database</li>
            <li class="breadcrumb-item">Data Anggota</li>
            <li class="breadcrumb-item active">Tambah Anggota</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Flash-data -->
  <div class="flashgagal" data-flashgagal="<?= $this->session->flashdata('gagal');?>"></div>

  <!-- /.Flash-data -->
  <!-- Main-content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card"><!-- 
            <div class="card-header">
              
            </div> -->
            <!-- /.card-header -->
            <?php echo form_open_multipart('data/data_anggota/simpan_anggota'); ?>
              <div class="card-body">  
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="id">ID Anggota</label>
                      <input type="text" class="form-control" id="id" name="id" placeholder="ID Anggota" required>
                    </div>
                    <div class="form-group">
                      <label for="nik">NIK</label>
                      <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" style="text-transform: uppercase" required>
                    </div>

                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tmp_lahir" placeholder="Tempat" placeholder="Tempat" name="tmp_lahir" style="text-transform: uppercase" required>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <label for="jk">Jenis Kelamin</label>
                      <div class="input-group ml-2">
                        <div class="custom-control custom-radio col-md-6">
                          <input class="custom-control-input" type="radio" id="laki" name="jk" value="L" required>
                          <label for="laki" class="custom-control-label font-weight-normal">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio col-md-6">
                          <input class="custom-control-input" type="radio" id="perempuan" name="jk" value="P" required>
                          <label for="perempuan" class="custom-control-label font-weight-normal">Perempuan</label>
                        </div>
                      </div>
                    </div><br>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="tlp">No. Telepon</label>
                        <input type="text" class="form-control" id="no_tlp" placeholder="No. Tlp" name="no_tlp">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="no_hp">No. HP</label>
                        <input type="text" class="form-control" id="no_hp" placeholder="No. HP" name="no_hp">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="foto">Foto</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="form-control" id="foto_anggota" name="foto_anggota" >
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="dtl_alamat">Alamat</label>
                      <textarea type="text" class="form-control" rows="3" id="dtl_alamat" name="dtl_alamat" placeholder="Detail alamat ..." required></textarea>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="desa">Desa</label>
                        <select class="form-control" id="desa" placeholder="--Pilih Desa--" name="desa" style="text-transform: uppercase">
                          <option value="">--Pilih Desa--</option>
                          <?php foreach ($desa as $ds):?>
                            <option value="<?php echo $ds->nama_desa?>"><?php echo $ds->nama_desa; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="form-control" id="kecamatan" placeholder="--Pilih Kecamatan--" name="kecamatan" style="text-transform: uppercase">
                          <option value="">--Pilih Kecamatan--</option>
                          <?php foreach ($kecamatan as $kcmt):?>
                            <option value="<?php echo $kcmt->nama_kecamatan?>"><?php echo $kcmt->nama_kecamatan; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="kota">Kota</label>
                        <select class="form-control" id="kota" placeholder="--Pilih Kota--" name="kota" style="text-transform: uppercase">
                          <option value="Kediri">Kediri</option>
                          
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="number" class="form-control" id="kode_pos" placeholder="Kode pos" name="kode_pos" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
                    </div>
                    <div class="form-group">
                      <label for="ahli_waris">Ahli Waris</label>
                      <input type="text" class="form-control" id="ahli_waris" name="ahli_waris" placeholder="Ahli Waris" style="text-transform: uppercase" required>
                    </div>
                    <div class="form-group">
                      <label for="status_anggota">Status Anggota</label>
                      <div class="input-group ml-2">
                        <div class="custom-control custom-radio col-md-6">
                          <input class="custom-control-input" type="radio" id="aktif" name="status_anggota" value="Aktif" checked>
                          <label for="aktif" class="custom-control-label font-weight-normal">Aktif</label>
                        </div>
                        <div class="custom-control custom-radio col-md-6">
                          <input class="custom-control-input" type="radio" id="nonaktif" name="status_anggota" value="Nonaktif" required>
                          <label for="nonaktif" class="custom-control-label font-weight-normal">Nonaktif</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.form-body -->
                <a href="<?= base_url();?>data/data_anggota" type="button" class="btn btn-default">Batal</a>
                <button type="submit" class="btn btn-primary float-sm-right">Simpan</button>
              </div>
            <!-- /.card-body -->
            <?php echo form_close(); ?>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>