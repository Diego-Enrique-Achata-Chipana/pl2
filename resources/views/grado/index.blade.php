@extends('layouts.admin')
@section('contenido')
<button type="button" class="btn btn-inverse-primary btn-fw mb-2" data-toggle="modal" data-target="#modal-add" id="btn-add">Nuevo</button>
<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">GRADO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-add">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="seccion">Sección:</label>
              <select name="seccion" id="seccion" class="form-control">
                  <option value="0">Seleccione una sección</option>
                  <option value="1">A</option>
                  <option value="2">B</option>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Send message</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<div class="row">
    <div class="col-md-12 stretch-card">
        <div class="card">
        <div class="card-body">
            <p class="card-title">Grados</p>
            <div class="table-responsive">
            <table id="recent-purchases-listing" class="table hover">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Sección</th>
                    <th>Operación</th>
                </tr>
                </thead>
                @foreach ($grados as $grado)
                <tbody>
                <tr>
                    @if ($grado->nombre == 1)
                        <td>Primero</td>
                    @elseif ($grado->nombre == 2)
                        <td>Segundo</td>
                    @else
                        <td>Tercero</td>
                    @endif
                    
                    @if ($grado->seccion == 1)
                        <td>A</td>
                    @else
                        <td>B</td>
                    @endif
                    <td>
                        <button type="button" class="btn btn-inverse-success btn-icon">
                            <i class="mdi mdi-border-color"></i>
                        </button>
                        <button type="button" class="btn btn-inverse-warning btn-icon">
                            <i class="mdi mdi-eye"></i>
                        </button>
                        <button type="button" class="btn btn-inverse-danger btn-icon">
                            <i class="mdi mdi-close"></i>
                        </button>
                        
                    </td>
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
@section('script')
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
})

function addGrad(){
    $(document).on('click','#btn-add', function(){
        alert('ABRIEND')
    })

    $('#form-add').on('submit', function(e){
        e.preventDefault();
        let nombre = $('#nombre').val();
        let seccion = $('#seccion').val();
        let url = 'grado/create';
        $.ajax({
            url: url,
            data: {
                nombre: nombre,
                seccion: seccion
            }, 
            method: 'post',
            datatype: 'json',
            success: function(data){
                console.log('grado registrado')
                $('#modal-add').modal('hide')
                toastr.success('Grado creado exitosamente')
            }
        })
    })
}

addGrad()
</script>
@endsection