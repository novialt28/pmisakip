@extends('layouts.main')

@section('container')
<!-- Container -->
<section id="container">
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="display-4 text-center mt-3 mb-3">Lembar Kerja Gabungan</h1>
            </div>
        </div>

        <button type="button" class="btn btn-primary"><i class="bi bi-plus"></i> Tambah Penilaian</button>
        
        <div class="row justify-content-center mt-3">
            <div class="col">
            <label for="exampleDataList" class="form-label" style="width: 2rem">Tahun</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
              <datalist id="datalistOptions">
                  <option value="San Francisco">
                  <option value="New York">
                  <option value="Seattle">
                  <option value="Los Angeles">
                  <option value="Chicago">
              </datalist>
            </div>
        </div>
    
    </div>
</section>
<!-- End Container -->
@endsection 