@extends ('layouts.main')

@section('container')

{{-- Head --}}
<section id="container">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="display-4 mt-3 mb-3">Lembar Kerja Gabungan | Form Penilaian</h2>
            </div>
        </div>

{{-- Table --}}
<div class="row mt-3">
    <div class="col-4">
    <label for="exampleDataList" class="form-label">Tahun</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Pilih Tahun">
      <datalist id="datalistOptions">
          <option value="San Francisco">
          <option value="New York">
          <option value="Seattle">
          <option value="Los Angeles">
          <option value="Chicago">
      </datalist>
    </div>

    <table class="table mt-5">
        <thead>
          <tr class="table-primary text-center">
            <th scope="col">No</th>
            <th scope="col">Komponen/Sub Komponen</th>
            <th scope="col">Bobot</th>
            <th scope="col">Nilai Instansi</th>
            <th scope="col">Nilai Unit</th>
            <th colspan="2">Nilai Akuntabilitas Kinerja</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-warning text-center">
            <th scope="row"></th>
            <td>PERENCANAAN KINERJA</td>
            <td>30,0</td>
            <td></td>
            <td></td>
            <td>100,0</td>
            <td>30,0</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Dokumen Perencanaan kinerja telah tersedia</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Dokumen Perencanaan kinerja telah memenuhi standar yang baik, yaitu untuk mencapai hasil dengan ukuran kinerja yang SMART, menggunakan penyelarasan (cascading) disetiap level secara logis, serta memperhatikan kinerja bidang lain (crosscutting)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Perencanaan Kinerja telah dimanfaatkan untuk mewujudkan hasil yang berkesinambungan </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        
          <tr class="table-warning text-center">
            <th scope="row"></th>
            <td>PENGUKURAN KINERJA</td>
            <td>30,0</td>
            <td></td>
            <td></td>
            <td>98,9</td>
            <td>29,8</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Pengukuran kinerja telah dilakukan</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Pengukuran kinerja telah menjadi kebutuhan dalam mewujudkan kinerja secara efektif dan efisien dan telah dilakukan secara berjenjang dan secara berkelanjutan</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>DPengukuran kinerja telah dijadikan dasar dalam pemberian reward dan punishment, serta penyesuaian strategi dalam mencapai kinerja yang efektif dan efisien </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
          <tr class="table-warning text-center">
            <th scope="row"></th>
            <td>PELAPORAN KINERJA </td>
            <td>15,0</td>
            <td></td>
            <td></td>
            <td>100,0</td>
            <td>15,0</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Terdapat Dokumen Laporan yang menggambarkan kinerja </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Dokumen Laporan Kinerja telah memenuhi standar menggambarkan kualitas atas pencapaian kinerja, informasi keberhasilan/kegagalan kinerja serta upaya perbaikan/penyempurnaannya</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Pelaporan Kinerja telah memberikan dampak yang besar dalam penyesuaian strategi/kebijakan dalam mencapai kinerja berikutnya</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
         
        </tbody>
      </table>
</section>



@endsection