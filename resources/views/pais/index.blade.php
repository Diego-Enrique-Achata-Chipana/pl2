@extends('layouts.admin')
@section('contenido')

<div class="row">
<div class="col-md-12 stretch-card">
  <div class="card">
    <div class="card-body">
      <p class="card-title">Países</p>
      <div class="table-responsive">
        <table id="recent-purchases-listing" class="table">
          <thead>
            <tr>
                <th>Nombre</th>
                <th>Status report</th>
                <th>Office</th>
                <th>Price</th>
                <th>Date</th>
                <th>Gross amount</th>
            </tr>
          </thead>
          @foreach ($paises as $pais)
          <tbody>
            <tr>
                <td>{{$pais->nombre}}</td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
