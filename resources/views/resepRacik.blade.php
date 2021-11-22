@extends('layouts.app')

@section('content')
<section class="recipe">
  <div class="container">
      <div class="row text-center pb-70">
          <div class="col-lg-12 col-12 header-wrap">
              <p class="story">
                  BISMILLAH
              </p>
              <h2 class="primary-header">
                  Start Buat Resep Racik
              </h2>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-lg-9 col-12">
              <div class="row">
                    <div class="col-lg-6 col-12">
                        <form action="#" class="basic-form">
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Pilih Obat Diracik</label>
                                <select class="form-control" id="select2-obat" data-dropdown-css-class="select2-purple" name="obat[]" multiple="multiple" data-placeholder="Pilih Obat">
                                    @foreach ($data['obat'] as $obat )
                                    <option value="{{ $obat['obatalkes_nama'] }}">{{ $obat['obatalkes_nama'] }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Pilih Signa</label>
                                <select name="signa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    <option value="">- Pilih Signa -</option>
                                    @foreach ($data_signa as $signa)
                                    <option value="{{ $signa->signa_nama }}">{{ $signa->signa_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Nama Racikan</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Tambahkan</button>
                        </form>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-5 col-12">
                    <div class="item-resep">
                        Ini table resep
                    </div>
                  </div> 
              </div>
          </div>
      </div>
  </div>
</section>
@endsection