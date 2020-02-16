<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="index">
  <div class="w-100">
    <h1 class="mb-0">SERTIFIKAT
      <span class="text-primary">KU</span>
    </h1>
    <div class="subheading mb-5">Lampung · Agus Komarudin, +62 8xx xxx xxx ·
      <a href="mailto:name@email.com">aguskomarudin@email.com</a>
    </div>
    <p class="lead mb-5"></p>
    <div class="social-icons">
      
    </div>
  </div>
</section>
<hr class="m-0">
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="sertifikat">
  <div class="w-100">
    <h2 class="mb-5">Data</h2>
    <div class="w-100">
      
      <table id="keywords" class="tabel-sertifikat table table-striped table-bordered">
      <thead>
        <tr>
          <th><span>No</span></th>
          <th><span>Nama</span></th>
          <th><span>Tanggal</span></th>
          <th><span>Kegiatan</span></th>
          <th><span></span></th>
        </tr>
      </thead>
      <tbody>
        <?php $no =1; foreach($sertifikats->result_array() as $data){ ?>
        <tr>
          <td><?= $no++ ?></td>
          <td class="lalign"><?= $data['nama']; ?></td>
          <td><?= date('l, d F Y', strtotime($data['tanggal'])); ?></td>
          <td><?= $data['kegiatan']; ?></td>
          <td>
            <a href="<?= base_url('cetak/'.$data['id']); ?>" target="_blank" class="text-info"><span class="fa fa-print"></span></a>
            <a href="<?= base_url('ubah/'.$data['id']); ?>#ubah" class="text-info"><span class="fa fa-edit"></span></a>
            <a href="<?= base_url('hapus/'.$data['id']); ?>" class="text-danger"><span class="fa fa-trash"></span></a>            
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>

  </div>

</section>
<hr class="m-0">
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="buat">
  <div class="w-100">
    <h2 class="mb-5">Tambah</h2>
    <form method="post" action="<?= base_url('tambah'); ?>">
      <div class="w-50">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh : Agus Komarudin" required="">
        </div>
      </div>
      <div class="w-50">
        <div class="form-group">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control" id="tanggal" name="tanggal" required="">
        </div>
      </div>
      
      <div class="form-group">
        <label for="kegiatan">Kegiatan</label>
        <textarea class="form-control" id="kegiatan" name="kegiatan" rows="3"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
        <a href="<?= base_url('/'); ?>#sertifikat" class="js-scroll-trigger btn btn-secondary">BATAL</a>
      </div>
    </form>

  </div>

</section>

<hr class="m-0">
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="ubah">
  <div class="w-100">
    <h2 class="mb-5">Ubah</h2>
    <form method="post" action="<?= base_url('ubah/aksi'); ?>">
      <div class="w-50">
        <input type="hidden" name="id" value="<?= $sertifikat->id; ?>">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh : Agus Komarudin" required="" value="<?= $sertifikat->nama; ?>">
        </div>
      </div>
      <div class="w-50">
        <div class="form-group">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control" id="tanggal" name="tanggal" required="" value="<?= $sertifikat->tanggal; ?>">
        </div>
      </div>
      
      <div class="form-group">
        <label for="kegiatan">Kegiatan</label>
        <textarea class="form-control" id="kegiatan" name="kegiatan" rows="3"><?= $sertifikat->kegiatan; ?></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
        <a href="<?= base_url('/'); ?>#sertifikat" class="js-scroll-trigger btn btn-secondary">BATAL</a>
      </div>
    </form>

  </div>

</section>

<div id="cetak">
  <h2><b>SERTIFIKAT</b></h2>
  <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th><span>No</span></th>
          <th><span>Nama</span></th>
          <th><span>Tanggal</span></th>
          <th><span>Kegiatan</span></th>
        </tr>
      </thead>
      <tbody>
        <?php $no =1; foreach($sertifikats->result_array() as $data){ ?>
        <tr>
          <td><?= $no++ ?></td>
          <td class="lalign"><?= $data['nama']; ?></td>
          <td><?= date('l, d F Y', strtotime($data['tanggal'])); ?></td>
          <td><?= $data['kegiatan']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>