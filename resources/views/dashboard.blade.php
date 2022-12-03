@extends('layouts.main')

@section('container')
    <!-- Jumbotron -->
<section class="jumbotron text-center">
  <img src="img/logo smartid.png" alt="" width="150">
  <h2 class="display-4">PMI SAKIP</h2>
    <p class="lead">Home | Dashboard</p>  
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L60,144C120,160,240,192,360,176C480,160,600,96,720,101.3C840,107,960,181,1080,197.3C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</section>
    <!-- End Jumbotron -->

    <!-- Grafik Rangking -->
    <section id="rangking">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>RANGKING</h2>
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-4">
          <label for="exampleDataList" class="form-label">Tahun</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
              <datalist id="datalistOptions">
                  <option value="San Francisco">
                  <option value="New York">
                  <option value="Seattle">
                  <option value="Los Angeles">
                  <option value="Chicago">
              </datalist>
          </div>
          <div class="col-4">
          <label for="exampleDataList" class="form-label">Perangkat Daerah</label>
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
        <div class="row text-center mt-3">
          <div class="col">
            <p>PROGRESS</p>
          </div>
        </div>
      </div>

    </section>

    <!-- End Grafik Rangking -->
  @endsection

