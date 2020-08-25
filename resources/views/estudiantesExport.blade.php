@extends('plantilla')
@yield('content')
 {{-- TITULO PRINCIPAL DE LA PAGINA --}}
 <div class="container" style="text-align: center">
    <h4>INSTITUCION EDUCATIVA NUESTRA SENIORA DEL CAMEN</h4>
    <hr>
     <h5>LISTA DE ESTUDIANTES INSCRITOS</h5>
 </div>
<table class="table table-striped">
    <thead class="bg-dark text-white">
      <tr>
        <th scope="col">DOCUMENTO</th>
        <th scope="col">NOMBRES</th>
        <th scope="col">APELLIDOS</th>
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
