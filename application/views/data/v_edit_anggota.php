<div class="content-wrapper halaman" data-halaman="Edit Anggota">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Anggota
            <span class="badge badge-secondary">#<?php echo $detail->id ?></span>
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item">Database</li>
            <li class="breadcrumb-item">Data Anggota</li>
            <li class="breadcrumb-item active">Edit Anggota</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

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
            <?php echo form_open_multipart('data/data_anggota/update_anggota'); ?>
              <div class="card-body">  
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="id">ID Anggota</label>
                      <input type="text" class="form-control" id="id" name="id" placeholder="ID Anggota" value="<?= $detail->id ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="nik">NIK</label>
                      <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= $detail->nik ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" style="text-transform: uppercase" value="<?= $detail->nama ?>" required>
                    </div>

                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tmp_lahir" placeholder="Tempat" placeholder="Tempat" name="tmp_lahir" style="text-transform: uppercase" value="<?= $detail->tmp_lahir ?>" required>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $detail->tgl_lahir ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <label for="jk">Jenis Kelamin</label>
                      <div class="input-group ml-2">
                        <div class="custom-control custom-radio col-md-6">
                          <input class="custom-control-input" type="radio" id="laki" name="jk" value="L" 
                          <?php if ($detail->jk == 'L') echo 'checked';?> required>
                          <label for="laki" class="custom-control-label font-weight-normal">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio col-md-6">
                          <input class="custom-control-input" type="radio" id="perempuan" name="jk" value="P" 
                          <?php if ($detail->jk == 'P') echo 'checked';?> required>
                          <label for="perempuan" class="custom-control-label font-weight-normal">Perempuan</label>
                        </div>
                      </div>
                    </div><br>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="tlp">No. Telepon</label>
                        <input type="text" class="form-control" id="no_tlp" placeholder="No. Tlp" name="no_tlp" value="<?= $detail->no_tlp ?>">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="no_hp">No. HP</label>
                        <input type="text" class="form-control" id="no_hp" placeholder="No. HP" name="no_hp" value="<?= $detail->no_hp ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="dtl_alamat">Alamat</label>
                      <textarea type="text" class="form-control" rows="4" id="dtl_alamat" name="dtl_alamat" placeholder="Detail alamat ..." required><?= $detail->dtl_alamat ?></textarea>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="desa">Desa</label>
                        <select class="form-control" id="desa" placeholder="--Pilih Desa--" name="desa" style="text-transform: uppercase">
                          <option value="<?= $detail->desa ?>"><?= $detail->desa ?></option>
                          <?php foreach ($desa as $ds):?>
                            <option value="<?php echo $ds->nama_desa?>"><?php echo $ds->nama_desa; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="form-control" id="kecamatan" placeholder="--Pilih Kecamatan--" name="kecamatan" style="text-transform: uppercase">
                          <option value="<?= $detail->kecamatan ?>"><?= $detail->kecamatan ?></option>
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
                        <input type="number" class="form-control" id="kode_pos" placeholder="Kode pos" name="kode_pos" value="<?= $detail->kode_pos ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="<?= ucwords($detail->pekerjaan) ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="ahli_waris">Ahli Waris</label>
                      <input type="text" class="form-control" id="ahli_waris" name="ahli_waris" placeholder="Ahli Waris" style="text-transform: uppercase" value="<?= $detail->ahli_waris ?>" required>
                    </div>
                  </div>
                </div>
                <!-- /.form-body -->
                <a href="javascript:history.go(-1)" type="button" class="btn btn-default">Batal</a>
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