@extends ('layouts.main')

@section('container')

{{-- Head --}}
<section id="container">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="display-4 mt-3 mb-3">Lembar Kerja Instansi | Form Penilaian</h2>
            </div>
        </div>

{{-- Table --}}
<div class="row justify-content-center mt-3">
    <div class="col">
      <label for="tahun">Tahun</label>
      <select class="form-control mt-2" name="tahun">
             <option value="">Pilih Tahun</option>
             <?php $tahun = date('Y');
             for ($i = 2021; $i < $tahun + 5; $i++) { ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
             <?php } ?>
      </select>
    </div>
    <div class="col">
      <label for="instansi" class="form-label">Pemerintah Daerah</label>
      <div class="col">
          <select class="form-select" aria-label="Default select example" id="instansi" name="instansi" autofocus>
              <option selected>Pilih instansi</option>
              <option value="Badan Kesatuan Bangsa dan Politik ">Badan Kesatuan Bangsa dan Politik</option>
              <option value="Badan Penanggulangan Bencana Daerah">Badan Penanggulangan Bencana Daerah</option>
              <option value="Badan Pengelolaan Keuangan dan Pendapatan Daerah ">adan Pengelolaan Keuangan dan Pendapatan Daerah</option>
              <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
              <option value="Badan Kepegawaian dan Pengembangan Sumber Daya Manusia ">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</option>
              <option value="Dinas Pekerjaan Umum dan Penataan Ruang ">Dinas Pekerjaan Umum dan Penataan Ruang</option>
              <option value="Dinas Sosial ">Dinas Sosial</option>
              <option value="Dinas Pemberdayaan Perempuan dan Perlindungan Anak Serta Pengendalian Penduduk dan KB">Dinas Pemberdayaan Perempuan dan Perlindungan Anak Serta Pengendalian Penduduk dan KB</option>
              <option value="Dinas Perindustrian dan Perdagangan ">Dinas Perindustrian dan Perdagangan </option>
              <option value="Dinas Perpustakaan dan Kearsipan">Dinas Perpustakaan dan Kearsipan</option>
              <option value="Dinas Pendidikan dan Kebudayaan ">Dinas Pendidikan dan Kebudayaan</option>
              <option value="Dinas Kepemudaan, Olah Raga dan Pariwisata ">Dinas Kepemudaan, Olah Raga dan Pariwisata</option>
              <option value="Dinas Kelautan dan Perikanan ">Dinas Kelautan dan Perikanan </option>
              <option value="Dinas Kesehatan ">Dinas Kesehatan </option>
              <option value="Dinas Kependudukan dan Pencatatan Sipil">Dinas Kependudukan dan Pencatatan Sipil</option>
              <option value="Dinas Perhubungan">Dinas Perhubungan</option>
              <option value="Dinas Pemberdayaan Masyarakat dan Desa">Dinas Pemberdayaan Masyarakat dan Desa</option>
              <option value="Dinas Koperasi, Usaha Kecil dan Menengah">Dinas Koperasi, Usaha Kecil dan Menengah</option>
              <option value="Dinas Komunikasi dan Informatika">Dinas Komunikasi dan Informatika</option>
              <option value="Inspektorat Daerah">Inspektorat Daerah</option>
              <option value="Kecamatan Pamekasan ">Kecamatan Pamekasan</option>
              <option value="Kecamatan Pademawu">Kecamatan Pademawu</option>
              <option value="Kecamatan Galis">Kecamatan Galis</option>
              <option value="Kecamatan Kadur">Kecamatan Kadur</option>
              <option value="Kecamatan Proppo">Kecamatan Proppo</option>
              <option value="Kecamatan Pegantenan">Kecamatan Pegantenan</option>
              <option value="Kecamatan Waru">Kecamatan Waru</option>
              <option value="Kecamatan Batumarmar">Kecamatan Batumarmar</option>
              <option value="RSUD dr. Slamet Martodirdjo">RSUD dr. Slamet Martodirdjo</option>
              <option value="RSUD Waru">RSUD Waru</option>
              </select>
      </div>
    </div>

    <div class="row">
      <button type="submit" class="col-2 btn btn-primary mt-3 me-auto"><i class="bi bi-save-fill"></i> Simpan penilaian</button>
    </div>

    <table class="table mt-5">
        <thead>
          <tr class="table-primary text-center">
            <th scope="col">No</th>
            <th scope="col">Komponen/Sub Komponen</th>
            <th scope="col">Bobot</th>
            <th scope="col">Y</th>
            <th scope="col">Nilai</th>
            <th scope="col">Kerangka Kontrol</th>
            <th scope="col">Bukti Dukung</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-warning text-center">
            <th scope="row"></th>
            <td>PERENCANAAN (30%)</td>
            <td>30</td>
            <td>0,92</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>DOKUMEN PERENCANAAN KINERJA TELAH TERSEDIA (6%)</td>
            <td>6</td>
            <td>100,0</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Terdapat pedoman teknis perencanaan kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Terdapat dokumen perencanaan kinerja jangka panjang</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Terdapat dokumen perencanaan kinerja jangka menengah</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Terdapat dokumen perencanaan kinerja jangka pendek</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Terdapat dokumen perencanaan aktivitas yang mendukung kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Terdapat dokumen perencanaan anggaran yang mendukung kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Setiap unit/satuan kerja merumuskan dan menetapkan Perencanaan Kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Dokumen telah dipertahankan setidaknya 1 tahun terakhir</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Dokumen telah dipertahankan setidaknya 5 tahun terakhir</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>Dokumen Perencanaan kinerja telah memenuhi standar yang baik, yaitu untuk mencapai hasil dengan ukuran kinerja yang SMART, menggunakan penyelarasan (cascading) disetiap level secara logis, serta memperhatikan kinerja bidang lain (crosscutting) (9%)</td>
            <td>9</td>
            <td>100,0</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Dokumen Perencanaan Kinerja telah diformalkan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Dokumen Perencanaan Kinerja telah dipublikasikan tepat waktu</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Dokumen Perencanaan Kinerja telah menggambarkan Kebutuhan atas Kinerja sebenarnya yang perlu dicapai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Kualitas Rumusan Hasil (Tujuan/Sasaran) telah jelas menggambarkan kondisi kinerja yang akan dicapai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Ukuran Keberhasilan (Indikator Kinerja) telah memenuhi kriteria SMART</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Indikator Kinerja Utama (IKU) telah menggambarkan kondisi Kinerja Utama yang harus dicapai, tertuang secara berkelanjutan (sustainable - tidak sering diganti dalam 1 periode Perencanaan Strategis)</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Target yang ditetapkan dalam Perencanaan Kinerja dapat dicapai (achievable), menantang, dan realistis</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Setiap Dokumen Perencanaan Kinerja menggambarkan hubungan yang berkesinambungan, serta selaras antara Kondisi/Hasil yang akan dicapai di setiap level jabatan (Cascading)</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Perencanaan kinerja dapat memberikan informasi tentang hubungan kinerja, strategi, kebijakan, bahkan aktivitas antar bidang/dengan tugas dan fungsi lain yang berkaitan (Crosscutting)</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Terdapat beberapa upaya yang dapat dihargai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">11</th>
            <td>Terdapat upaya inovatif yang layak menjadi percontohan nasional</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>Perencanaan Kinerja telah dimanfaatkan untuk mewujudkan hasil yang berkesinambungan (15%)</td>
            <td>15</td>
            <td>100,0</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Anggaran yang ditetapkan telah mengacu pada Kinerja yang ingin dicapai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Aktivitas yang dilaksanakan telah mendukung Kinerja yang ingin dicapai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Rencana aksi kinerja dapat berjalan dinamis karena capaian kinerja selalu dipantau secara berkala</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Terdapat perbaikan/penyempurnaan Dokumen Perencanaan Kinerja yang ditetapkan dari hasil analisis perbaikan kinerja sebelumnya</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Terdapat perbaikan/penyempurnaan Dokumen Perencanaan Kinerja dalam mewujudkan kondisi/hasil yang lebih baik</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Setiap unit/satuan kerja memahami dan peduli, serta berkomitmen dalam mencapai kinerja yang telah direncanakan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Pimpinan terlibat dalam mencapai kinerja yang telah direncanakan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Setiap Pegawai berkomitmen dalam mencapai kinerja yang telah direncanakan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Kinerja individu telah selaras dengan kinerja organisasi</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Terdapat beberapa upaya yang dapat dihargai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">11</th>
            <td>Terdapat upaya inovatif yang layak menjadi percontohan nasional</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-warning text-center">
            <th scope="row"></th>
            <td>PENGUKURAN KINERJA (30%)</td>
            <td>30</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>Pengukuran kinerja telah dilakukan (6%)</td>
            <td>6</td>
            <td>100,0</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Terdapat pedoman teknis pengukuran kinerja dan pengumpulan data kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Terdapat Definisi Operasional yang jelas atas kinerja dan cara mengukur indikator kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Terdapat mekanisme yang jelas terhadap pengumpulan data kinerja yang dapat diandalkan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Dokumen telah dipertahankan setidaknya 1 tahun terakhir</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Dokumen telah dipertahankan setidaknya 5 tahun terakhir</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>Pengukuran kinerja telah menjadi kebutuhan dalam mewujudkan kinerja secara efektif dan efisien dan telah dilakukan secara berjenjang dan secara berkelanjutan (9%)</td>
            <td>9</td>
            <td>100</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Data kinerja yang dikumpulkan telah relevan untuk mengukur capaian kinerja yang diharapkan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Data kinerja yang dikumpulkan telah mendukung capaian kinerja yang diharapkan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Pengukuran kinerja telah dilakukan secara berkala</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Setiap level organisasi melakukan pemantauan atas pengukuran capaian kinerja unit dibawahnya secara berjenjang</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Pengumpulan data kinerja telah memanfaatkan Teknologi Informasi (Aplikasi)</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Terdapat beberapa upaya yang dapat dihargai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Terdapat upaya inovatif yang layak menjadi percontohan nasional</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>Pengukuran kinerja telah dijadikan dasar dalam pemberian reward dan punishment, serta penyesuaian strategi dalam mencapai kinerja yang efektif dan efisien (15%)</td>
            <td>15</td>
            <td>100</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Pimpinan selalu terlibat sebagai pengambil keputusan (Decision Maker) dalam mengukur capaian kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Pengukuran Kinerja telah menjadi dasar dalam penyesuaian (pemberian/pengurangan) tunjangan kinerja/penghasilan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Pengukuran Kinerja telah menjadi dasar dalam penempatan/penghapusan Jabatan baik struktural maupun fungsional</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Pengukuran kinerja telah mempengaruhi penyesuaian (Refocusing) Organisasi</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Pengukuran kinerja telah mempengaruhi penyesuaian Strategi dalam mencapai kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Pengukuran kinerja telah mempengaruhi penyesuaian Kebijakan dalam mencapai kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Pengukuran kinerja telah mempengaruhi penyesuaian Aktivitas dalam mencapai kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Pengukuran kinerja telah mempengaruhi penyesuaian Anggaran dalam mencapai kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Terdapat efisiensi atas penggunaan anggaran dalam mencapai kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Setiap unit/satuan kerja memahami dan peduli atas hasil pengukuran kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">11</th>
            <td>Setiap pegawai memahami dan peduli atas hasil pengukuran kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">12</th>
            <td>Terdapat beberapa upaya yang dapat dihargai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">13</th>
            <td>Terdapat upaya inovatif yang layak menjadi percontohan nasional</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-warning text-center">
            <th scope="row"></th>
            <td>PELAPORAN KINERJA (15%)</td>
            <td>15</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>Terdapat Dokumen Laporan yang menggambarkan kinerja (3%)</td>
            <td>3</td>
            <td>100,0</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Dokumen Laporan Kinerja telah disusun</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Dokumen Laporan Kinerja telah disusun secara berkala</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Dokumen Laporan Kinerja telah direviu</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Dokumen Laporan Kinerja telah dipublikasikan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Dokumen Laporan Kinerja telah disampaikan tepat waktu</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Dokumen telah dipertahankan setidaknya 1 tahun terakhir</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Dokumen telah dipertahankan setidaknya 5 tahun terakhir</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>Dokumen Laporan Kinerja telah memenuhi standar menggambarkan kualitas atas pencapaian kinerja, informasi keberhasilan/kegagalan kinerja serta upaya perbaikan/penyempurnaannya (4,5%)</td>
            <td>4,5</td>
            <td>100,0</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Dokumen Laporan Kinerja telah diformalkan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Dokumen Laporan Kinerja disusun secara berkualitas sesuai dengan standar</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Dokumen Laporan Kinerja telah mengungkap seluruh informasi tentang pencapaian kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Dokumen Laporan Kinerja telah menginfokan analisis dan evaluasi realisasi kinerja dengan target tahunan</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Dokumen Laporan Kinerja telah menginfokan analisis dan evaluasi realisasi kinerja dengan target jangka menengah</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Dokumen Laporan Kinerja telah menginfokan analisis dan evaluasi realisasi kinerja dengan realisasi kinerja tahun-tahun sebelumnya</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Dokumen Laporan Kinerja telah menginfokan perbandingan realisasi kinerja dengan realiasi kinerja di level nasional/internasional (Benchmark Kinerja)</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Dokumen Laporan Kinerja telah menginfokan detail kinerja dalam keberhasilan/kegagalan mencapai target kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Dokumen Laporan Kinerja telah menginfokan kualitas atas keberhasilan/kegagalan mencapai target kinerja beserta upaya nyata dan/atau hambatannya</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Dokumen Laporan Kinerja telah menginfokan efisiensi atas penggunaan sumber daya dalam mencapai kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">11</th>
            <td>Dokumen Laporan Kinerja telah menginfokan upaya perbaikan dan penyempurnaan kinerja ke depan (Rekomendasi perbaikan kinerja)</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">12</th>
            <td>Terdapat beberapa upaya yang dapat dihargai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">13</th>
            <td>Terdapat upaya inovatif yang layak menjadi percontohan nasional</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-warning text-center">
            <th scope="row"></th>
            <td>EVALUASI AKUNTABILITAS INTERNAL (25%)</td>
            <td>25</td>
            <td>0,85</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan (5%)</td>
            <td>5</td>
            <td>100,0</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Terdapat pedoman teknis Evaluasi Akuntabilitas Kinerja Internal</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan pada seluruh unit kerja/perangkat daerah</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan secara berjenjang</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Dokumen telah dipertahankan setidaknya 1 tahun terakhir</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Dokumen telah dipertahankan setidaknya 5 tahun terakhir</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan secara berkualitas dengan Sumber Daya yang memadai (7,5%)</td>
            <td>7,5</td>
            <td>100,0</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan sesuai standar</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan oleh SDM yang memadai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan dengan pendalaman yang memadai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan pada seluruh unit kerja/perangkat daerah</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Evaluasi Akuntabilitas Kinerja Internal telah dilaksanakan menggunakan Teknologi Informasi (Aplikasi)</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Terdapat beberapa upaya yang dapat dihargai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Terdapat upaya inovatif yang layak menjadi percontohan nasional</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="table-secondary text-center">
            <th scope="row"></th>
            <td>Implementasi SAKIP telah meningkat karena evaluasi Akuntabilitas Kinerja Internal sehingga memberikan kesan yang nyata (dampak) dalam efektifitas dan efisiensi Kinerja (12,5%)</td>
            <td>12,5</td>
            <td>70,0</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Seluruh rekomendasi atas hasil evaluasi akuntabilitas kinerja internal telah ditindaklanjuti</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Telah terjadi peningkatan implementasi SAKIP dengan melaksanakan tindak lanjut atas rekomendasi hasil evaluasi akuntabilitas Kinerja internal</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Hasil Evaluasi Akuntabilitas Kinerja Internal telah dimanfaatkan untuk perbaikan dan peningkatan akuntabilitas kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Hasil dari Evaluasi Akuntabilitas Kinerja Internal telah dimanfaatkan dalam mendukung efektifitas dan efisiensi kinerja</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Telah terjadi perbaikan dan peningkatan kinerja dengan memanfaatkan hasil evaluasi akuntabilitas kinerja internal</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Terdapat beberapa upaya yang dapat dihargai</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Terdapat upaya inovatif yang layak menjadi percontohan nasional</td>
            <td></td>
            <td><div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" id="nilai" name="nilai"  autofocus>
                  <option selected>Nilai</option>
                  <option value="10,0">Y</option>
                  <option value="00,0">T</option>
              </select>
          </div></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>


</section>



@endsection