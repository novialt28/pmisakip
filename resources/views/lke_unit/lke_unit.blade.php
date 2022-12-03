@extends('layouts.main')

@section('container')
<!-- Container -->
<section id="container">
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="display-4 text-center mt-3 mb-3">Lembar Kerja Unit</h1>
            </div>
        </div>

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
            <button type="submit" class="col-2 btn btn-primary mt-3 me-auto"><i class="bi bi-eye-fill"></i> Tampilkan Data</button>
            <a href="/form_penilaian" class="col-2 btn btn-primary mt-3"><i class="bi bi-plus"></i> Tambah Penilaian</a>
        </div>

       
    </div>
</section>
<!-- End Container -->

@endsection