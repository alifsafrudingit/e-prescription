@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

@section('content')
<section class="recipe">
  <div class="container">
    <h2 class="mb-4">Data Obat</h2>
      <table id="table_obat" class="table table-striped">
          <thead>
              <tr>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Stok</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($data_obat as $obat )
              <tr>
                <td>{{ $obat->obatalkes_kode }}</td>
                <td>{{ $obat->obatalkes_nama }}</td>
                <td>{{ $obat->stok }}</td>

              </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</section>
@endsection

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#table_obat').DataTable();
} );
</script>
