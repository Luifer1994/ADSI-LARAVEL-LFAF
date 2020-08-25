@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center bg-dark text-white p-3 rounded-left rounded-right">
        <h3>TABLA DE ESTUDIANTES INSCRITOS</h3>
    </div>
    <hr>
    {{-- MENSAJE QUE RETORNA EL CONTROLADOR AL ELIMINAR UN FUNCIONARIO --}}
    @if (session('mensaje'))
    <div class="alert alert-danger text-center" id="alert" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <h4>{{ session ('mensaje')}}</h4>
    </div>
   @endif

  <ul class="nav nav-tabs">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <svg style="color: rgb(99, 114, 245)" width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
            </svg>
            <span style="color: black">FUNCIONARIOS</span>
        </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
            LISTADO
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" title="REGISTRAR NUEVO FUNCIONARIO" type="button" data-toggle="modal" data-target="#exampleModal">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
              </svg>
            REGISTRAR
        </a>
      </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <svg style="color: rgb(236, 202, 10)" width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-folder-symlink-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3zM2.19 3c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3H2.19zm9.608 5.271l-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z"/>
            </svg>
            <samp style="color: black">FOLDER ESTUDIANIL</samp>
        </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route('exportar') }}">
                <svg style="color: rgb(11, 190, 20)" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-earmark-spreadsheet-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 3a2 2 0 0 1 2-2h5.293a1 1 0 0 1 .707.293L13.707 5a1 1 0 0 1 .293.707V13a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3zm7 2V2l4 4h-3a1 1 0 0 1-1-1zM3 8v1h2v2H3v1h2v2h1v-2h3v2h1v-2h3v-1h-3V9h3V8H3zm3 3V9h3v2H6z"/>
                </svg>
            <span style="color:black">EXCEL</span>
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('estudiantesExport.pdf') }}">
                <svg style="color: rgb(194, 33, 33)" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                    <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                </svg>
            <span style="color:black">PDF
            </span>
        </a>
      </div>
    </li>
  </ul>

<!-- Modal REGISTRAR FUNCIONARIOS -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title" id="exampleModalLabel">REGISTRAR FUNCIONARIO</h4>
      </div>
      <div class="modal-body">
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NOMBRE') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('CORREO') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('CONTRASEÑA') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('CONFIRMAR CONTRASEÑA') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <hr>
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success btn-block">
                            {{ __('REGISTRAR') }}
                        </button>
                        <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">CANCELAR</button>
                    </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header bg-danger">
            <h4 class="text-white">TABLA DE FUNCIONARIOS</h4>
        </div>
        <div class="p-3">
            <div class="table-responsive">
                <table id="funcionario" class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">FECHA_REGISTRO</th>
                        <th scope="col">ACCION</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($funcionarios as $funcionarios)
                    <tr>
                        <td>{{ $funcionarios->name }}</td>
                        <td>{{ $funcionarios->email }}</td>
                        <td>{{ $funcionarios->created_at }}</td>
                        <td>
                            <!-- Button trigger modal -->
<button type="button" class="btn" data-toggle="modal" data-target="#staticBackdrop">
    <svg style="color: rgb(238, 54, 54)" width="2.4em" height="2.4em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
      </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="p-1">
      <div class="modal-header text-danger text-center">
        <h4 class="modal-title">
              <div class="alert alert-danger" role="alert">
                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-exclamation-triangle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 5zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
              </div>
            ESTA SEGURO QUE DESEA ELIMINAR ESTE FUNCIONARIO?
        </h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('eliminar', $funcionarios->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')

        <button title="ELIMINAR FUNCIONARIO"  type="submit"  class="btn btn-primary btn-block">
            ACEPTAR
        </button>
        <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">CANCELAR</button>
        </form>
      </div>
    </div>
    </div>
  </div>
</div>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      <div class="text-center">
        <button type="button" class="btn btn-danger" data-dismiss="modal">SALIR</button>
      </div>
      <hr>
    </div>
  </div>
</div>

    <div>

    </div>
    <hr>
    <div class="table-responsive">
        <table id="estudiantes" class="table table-striped">
            <thead class="bg-dark text-white ">
            <tr>
                <th scope="col">DOCUMENTO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">CORREO</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $item)
            <tr>
                <td>{{ $item->numeroDocumento }}</td>
                <td>{{ $item->nombres }}</td>
                <td>{{ $item->apellidos }}</td>
                <td>{{ $item->correo }}</td>
            </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    <div class="container text-center">
        <h4 class="bg-dark p-2 text-white">ESTADISTICA ESTUDIANTIL</h4>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <div class="card p-3 text-center" style="border-radius: 30px 30px 30px 30px">
                <h5>NUMERO DE ESTUDIANTES POR GENERO</h5>
                <hr>
            <canvas id="myChart" width="200" height="100"></canvas>
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="card p-3 text-center" style="border-radius: 30px 30px 30px 30px">
                <h5>NUMERO DE ESTUDIANTES POR SEDE</h5>
                <hr>
                <canvas id="myChart2" width="200" height="100"></canvas>
            </div>
        </div>
    </div>
    <hr>
</div>

{{--  SCRIPT GRAFICA  --}}



<script>
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['LOS CEREZOS', 'CONSOLATA'],
        datasets: [{
            label: 'ESTUDIANTES',
            data: [{{ $data }}],
            backgroundColor: [
                'rgba(24, 545, 34, 0.5)',
                'rgba(255, 39, 76, 0.5)',

            ],
            borderColor: [
                'rgb(60, 177, 6)',
                'rgba(255, 39, 76, 1)'
            ],
            borderWidth: 2
        }]
    },

});
</script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['FEMENINO', 'MASCULINO'],
            datasets: [{
                label: 'CANTIDAD DE ESTUDIANTES POR GENERO',
                data: [{{ $estudiantesF }}, {{ $estudiantesM }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgb(99, 114, 245)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgb(99, 114, 245)',
                ],
                borderWidth: 1
            }]
        },
    });
    </script>

    {{--  SCRIP DATATABLE  --}}
<script>
    $(document).ready(function() {
        $('#funcionario').DataTable({
            responsive: true,
            language: {
                "decimal": "",
                "emptyTable": "No hay datos",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                "infoFiltered": "(Filtro de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar Funcionario:",
                "zeroRecords": "No se encontraron coincidencias",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Próximo",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar orden de columna ascendente",
                    "sortDescending": ": Activar orden de columna desendente"
                }
            }
        });
    });
 </script>
@endsection
