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
                  Start Buat Resep Non Racik
              </h2>
          </div>
      </div>
      @auth
      <form action="{{ route('checkout.store') }}" class="basic-form" method="POST">
      <div class="row justify-content-center">
          <div class="col-lg-9 col-12">
              <div class="row">
                    <div class="col-lg-6 col-12">
                        @csrf
                        <div class="mb-4">
                          <label for="exampleInputEmail1" class="form-label">Nama</label>
                          <select name="obat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                              <option value="">- Pilih Obat -</option>
                              @foreach ($data_obat as $obat)
                              <option value="{{ $obat->obatalkes_nama }}">{{ $obat->obatalkes_nama }}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Signa</label>
                            <select name="signa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <option value="">- Pilih Signa -</option>
                                @foreach ($data_signa as $signa)
                                <option value="{{ $signa->signa_nama }}">{{ $signa->signa_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Qty</label>
                            <input name="qty" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <button type="button" class="w-100 btn btn-primary mt-4" id="add">Tambakan</button>
                </div>
                <div class="col-lg-1 col-12"></div>
                <div class="col-lg-5 col-12 mt-4">
                    <div class="item-resep">
                        <table class="table table-sm table-hover shadow-sm">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Signa</th>
                                    <th>Qty</th>
                                </tr>
                            </thead>
                            <tbody>      
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-5">
                        <button type="submit" id="store" class="w-100 btn btn-primary mt-4" id="add">Simpan</button>
                        <button type="button" id="print" class="w-100 btn btn-primary mt-4" id="add">Cetak</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
      </form>
      @else
      <div class="col-12">
          <h4>Silahkan login terlebih dahulu sesi login anda telah habis</h4>
      </div>
      @endauth
  </div>
</section>
@endsection

@push('script-custom')
    <script src="{{ asset('js/jquery-3.6.0.js')}}"></script>
    <script>
        $(function() {
            $('#add').click(function() {
                var _obat = $('select[name="obat"]').val();
                var _signa = $('select[name="signa"]').val();
                var _qty = $('input[name="qty"]').val();

                var _tr = '<tr><td name="j_obat">'+ _obat +'</td>  <td name="j_signa">'+ _signa +'</td>  <td name="j_qty">'+ _qty +'</td></tr>';

                $('tbody').append(_tr);
            });
        });
    </script>
@endpush