@extends('plantilla')
@section('content')
    <hr>
    {{-- TITULO PRINCIPAL DE LA PAGINA --}}
    <div class="container" style="text-align: center">
       <img style="height: 150px; width: 115px" src=" {{ asset('/images/colegio.jpg') }}"  alt="">
       <h5>INSTITUCION EDUCATIVA NUESTRA SEÑORA DEL CAMEN</h5>
       <hr>
        <h4>INSCRIPCION NUEVO ESTUDIANTE </h4>
    </div>
    {{-- MENSAJE QUE RETORNA EL CONTROLADOR AL HACER EXITOSO EL REGISTRO --}}
    @if (session('mensaje2'))
    <div class="alert alert-danger text-center" id="alert" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <h4>{{ session ('mensaje2')}}</h4>
    </div>
   @endif

     {{-- MENSAJE QUE RETORNA EL CONTROLADOR AL HACER EXITOSO EL REGISTRO --}}
     @if (session('mensaje'))
     <div class="alert alert-primary text-center" id="alert" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         <h4>{{ session ('mensaje')}}</h4>
     </div>
    @endif

    {{-- BARRA DE PROGRESO --}}
    <div class="progress">
     <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="color: black"></div>
    </div>

    {{-- ERROR DE VALIDACION DE CAMPOS Y MUESTRA UNA ALERTA DE QUE HAY CAMPOS VAVIOS --}}
    @if ($errors->any())
    <div class="alert alert-danger text-sm-center" id="alert" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
       <h4>ERROR AL REGISTAR, HAY CAMPOS VACIOS REVISA EL FORMULARIO</h4>
      </div>
      @endif


     {{-- INICIO DEL FORMULARIO --}}
    <form id="regiration_form" novalidate action="{{ route('store') }}"  method="post">
        @csrf
        <fieldset>
        <div class="container" style="background-color: #C0F9DE; text-align: center; border-radius: 50px 50px 50px 50px">
        <h5>DATOS PRINCIPALES </h5>
        </div>
        <hr>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="tipoDocumento">TIPO DE DOCUMENTO</label>
                <select class="form-control"  id="tipoDocumento" name="tipoDocumento" required>
                <option value="">Seleccione...</option>
                @foreach ($tipoDocumento as $tipoDocumento)
                <option value="{{ $tipoDocumento->id }}"  {{ old('tipoDocumento') ==  $tipoDocumento->id  ? 'selected' : '' }}>
                    {{ $tipoDocumento->tipoDocumento }}
                </option>
                @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="numeroDocumento">NUMERO DE DOCUMENTO</label>
                <input type="text" class="form-control" id="numeroDocumento" name="numeroDocumento" value="{{old('numeroDocumento')}}" placeholder="Ingresa Tu Numero de Documento">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="departamentoExp">DEPARTAMENTO DE EXPEDICION</label>
                <select class="form-control"  id="departamentoExp" name="departamentoExp" required>
                    <option value="">Seleccione...</option>
                    @foreach ($departamentoExp as $departamentoExp)
                    <option value="{{ $departamentoExp->id }}"  {{ old('departamentoExp') ==  $departamentoExp->id  ? 'selected' : '' }}>
                        {{ $departamentoExp->departamento }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="municipioExp">MUNICIPIO DE EXPEDICION</label>
                <select class="form-control"  id="municipioExp" name="municipioExp" required>
                    <option value="">Seleccione...</option>
                    @foreach ($municipioExp as $municipioExp)
                    <option value="{{  $municipioExp->id}}" {{ old('municipioExp') == $municipioExp->id ? 'selected' : ''}}>
                        {{  $municipioExp->municipio }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="nombres">NOMBRES</label>
                <input type="text" class="form-control" value="{{ old('nombres') }}" id="nombres" name="nombres" placeholder="Ingresa tus Nombres" required>
            </div>
            <div class="col-md-6 mb-3">
            <label for="apellidos">APELLIDOS</label>
            <input type="text" class="form-control" value="{{ old('apellidos') }}" id="apellidos" name="apellidos" placeholder="Ingresa tus Apellidos" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="fechaN">FECHA DE NACIMIENTO</label>
                <input type="date" class="form-control" value="{{ old('fechaN') }}" id="fechaN" name="fechaN" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="municipioN">MUNICIPIO DE NACIMIENTO</label>
                <select name="municipioN" id="municipioN" class="form-control">
                    <option value="">Seleccione...</option>
                    @foreach ($municipioN as $municipioN)
                        <option value="{{ $municipioN->id }}" {{ old('municipioN') == $municipioN->id ? 'selected' : ''}}>
                            {{ $municipioN->municipio }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="departamentoN">DEPARTAMENTO DE NACIMIENTO</label>
                <select name="departamentoN" id="departamentoN" class="form-control">
                    <option value="">Seleccione...</option>
                    @foreach ($departamentoN as $departamentoN)
                        <option value="{{ $departamentoN->id }}">{{ $departamentoN->departamento }}</option>
                    @endforeach
                </select>
            </div>
        </div
        <hr>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="celular">CELULAR</label>
                <input type="text" class="form-control" value="{{ old('celular') }}" id="celular" name="celular" placeholder="Ingresa tu Numero de Celular" required>
            </div>
            <div class="col-md-6 mb-3">
            <label for="correo">CORREO</label>
            <input type="email" class="form-control" value="{{ old('correo') }}" id="correo" name="correo" placeholder="Ingresa tu Correo" required>
            </div>
        </div>
            <br>
            <div class="container text-center"  style="background-color: #C0F9DE; text-align: center; border-radius: 50px 50px 50px 50px">
            <h5>DIRECCION DEL ESTUDIANTE</h5>
            </div>
            <hr>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="direccion">DIRECCION</label>
                <input type="text" class="form-control" value="{{ old('direccion') }}" id="direccion" name="direccion" placeholder="Ingresa tu Direccion" required>
            </div>
            <div class="col-md-6 mb-3">
            <label for="barrio">BARRIO</label>
            <input type="text" class="form-control" value="{{ old('barrio') }}" id="barrio" name="barrio" placeholder="Ingresa tu Barrio" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="municipioViv'">MUNICIPIO </label>
                <select class="form-control"  id="municipioViv" name="municipioViv" required>
                    <option value="">Seleccione...</option>
                    @foreach ($municipioViv as $municipioViv)
                    <option value="{{  $municipioViv->id}}" {{ old('municipioViv')==$municipioViv->id ? 'selected' : '' }}>
                        {{  $municipioViv->municipio }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="zona">ZONA </label>
                <select class="form-control"  id="zona" name="zona" required>
                    <option value="">Seleccione...</option>
                    @foreach ($zona as $zona)
                    <option value="{{  $zona->id}}" {{ old('zona')==$zona->id ? 'selected' : '' }}>
                        {{  $zona->zona }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="genero">GENERO</label>
                    <select class="form-control"  id="genero" name="genero" required>
                        <option value="">Seleccione...</option>
                        @foreach ($genero as $genero)
                            <option value="{{ $genero->id }}"{{ old('genero')==$genero->id ? 'selected' : '' }}>{{ $genero->genero }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="fechaIns">FECHA INSCRIPCION</label>
                <input class="form-control"  type="date" id="fechaIns" name="fechaIns"  value="<?php echo  date("Y-m-d");?>">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="grado">GRADO A CURSAR</label>
                <select class="form-control"  id="grado" name="grado" required>
                    <option value="">Seleccione...</option>
                    @foreach ($grado as $grado)
                        <option value="{{  $grado->id}}" {{ old('grado')==$grado->id ? 'selected' : ''}}>
                            {{  $grado->grado }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="sede">SEDE</label>
                <select class="form-control"  id="sede" name="sede" required>
                    <option value="">Seleccione...</option>
                    @foreach ($sede as $sede)
                        <option value="{{  $sede->id}}" {{ old('sede')==$sede->id ? 'selected' : '' }}>
                            {{  $sede->sede }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="jornada">JORNADA</label>
                <select class="form-control"  id="jornada" name="jornada" required>
                    <option value="">Seleccione...</option>
                    @foreach ($jornada as $jornada)
                        <option value="{{  $jornada->id}}" {{ old('jornada')==$jornada->id ? 'selected' : '' }}>
                            {{  $jornada->jornada }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="pais">PAIS DE ORIGEN</label>
                <select class="form-control"  id="pais" name="pais" required>
                    <option value="">Seleccione...</option>
                    @foreach ($pais as $pais)
                        <option value="{{  $pais->id}}" {{ old('pais')==$pais->id ? 'selected' : '' }}>
                            {{  $pais->pais }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
                <input type="button" name="data" class="next btn btn-info" value="Siguiente" />
        </fieldset>
        <fieldset>
            <div class="container text-center"  style="background-color: #C0F9DE; text-align: center; border-radius: 50px 50px 50px 50px">
                <h5>POBLACION VICTIMA DE CONFLICTO - SITUACION SOCIOECONOMICA</h5>
            </div>
            <hr>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="victima">POBLACION VICTIMA DEL CONFLICTO</label>
                    <select class="form-control"  id="victima" name="victima" required>
                        <option value="">Seleccione...</option>
                        @foreach ($victima as $victima)
                            <option value="{{  $victima->id}}" {{ old('victima')==$victima->id ? 'selected' : '' }}>
                                {{   $victima->poblacion  }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="situacion">SITUACION SOCIOECONOMICA</label>
                    <select class="form-control"  id="situacion" name="situacion" required>
                        <option value="">Seleccione...</option>
                        @foreach ($situacion as $situacion)
                            <option value="{{  $situacion->id}}" {{ old('situacion')==$situacion->id ? 'selected' : '' }}>
                                {{  $situacion->situacionSocioeconomica }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="etnia">ETNIA</label>
                    <select class="form-control"  id="etnia" name="etnia" required>
                        <option value="">Seleccione...</option>
                        @foreach ($etnia as $etnia)
                            <option value="{{  $etnia->id}}" {{ old('etnia')==$etnia->id ? 'selected' : '' }}>
                                {{  $etnia->etnia }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="estrato">ESTRATO</label>
                    <select class="form-control"  id="estrato" name="estrato" required>
                        <option value="">Seleccione...</option>
                        @foreach ($estrato as $estrato)
                            <option value="{{  $estrato->id}}" {{ old('estrato')==$estrato->id ? 'selected' : '' }}>
                                {{  $estrato->estrato }}
                            </option>
                        @endforeach
                    </select>
                </div>
                </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="Nsisben">NUMERO DE CARNET DEL SISBEN</label>
                    <input type="text" class="form-control" value="{{ old('Nsisben') }}" id="Nsisben" name="Nsisben" placeholder="Ingresa tu No de carnet del Sisben">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Psisben">PUNTAJE DEL SISBEN</label>
                    <input type="text" class="form-control" value="{{ old('Psisben') }}" id="Psisben" name="Psisben" placeholder="Ingresa tu puntaje de sisben">
                </div>
            </div>
            <br>

            <div class="container text-center"  style="background-color: #C0F9DE; text-align: center; border-radius: 50px 50px 50px 50px">
                <h5>INFORMACION DEL ACUDIENTE</h5>
            </div>
            <hr>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="nombresA">NOMBRE DE ACUDINTE</label>
                    <input type="text" class="form-control" value="{{ old('nombresA') }}" id="nombresA" name="nombresA" placeholder="Nombres de acudiente">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="apellidosA">APELLIDOS DE ACUDIENTE</label>
                    <input type="text" class="form-control" value="{{ old('apellidosA') }}" id="apellidosA" name="apellidosA" placeholder="Apellidos de acudientes">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="celularA">CELULAR ACUDIENTE</label>
                    <input type="text" class="form-control" value="{{ old('celularA') }}" id="celularA" name="celularA" placeholder="Ingresa numero de celular">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="correoA">CORREO DE ACUDIENTE</label>
                    <input type="email" class="form-control" value="{{ old('correoA') }}" id="correoA" name="correoA" placeholder="Ingresa el correo">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="tipoDocumentoA">TIPO DE DOCUMENTO DEL ACUDIENTE</label>
                    <select name="tipoDocumentoA" id="tipoDocumentoA" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($tipoDocumentoA as $tipoDocumentoA)
                            <option value="{{ $tipoDocumentoA->id }}" {{ old('tipoDocumentoA')==$tipoDocumentoA->id ? 'selected' : '' }}>
                                {{ $tipoDocumentoA->tipoDocumento }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="NdocumentoA">NUMERO DE DOCUMENTO DE ACUDIENTE</label>
                    <input class="form-control" value="{{ old('NdocumentoA') }}" id="NdocumentoA" name="NdocumentoA" placeholder="Ingresa el numero de documento">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="paisOrigenA">PAIS DE ORIGEN ACUDIENTE</label>
                    <select name="paisOrigenA" id="paisOrigenA" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($paisOrigenA as $paisOrigenA)
                            <option value="{{ $paisOrigenA->id }}" {{ old('paisOrigenA')==$paisOrigenA->id ? 'selected' : '' }}>
                                {{ $paisOrigenA->pais }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="generoA">GENERO ACUDIENTE</label>
                    <select name="generoA" id="generoA" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($generoA as $generoA)
                            <option value="{{ $generoA->id }}" {{ old('generoA')==$generoA->id ? 'selected' : '' }}>
                                {{ $generoA->genero }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="fechaNA">FECHA NACIMIENTO ACUDIENTE</label>
                    <input type="date" class="form-control" value="{{ old('fechaNA') }}" id="fechaNA" name="fechaNA">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="departamentoNA">DEPARTAMENTO DE NACIMIENTO ACUDIENTE</label>
                    <select name="departamentoNA" id="departamentoNA" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($departamentoNA as $departamentoNA)
                            <option value="{{ $departamentoNA->id }}" {{ old('departamentoNA')==$departamentoNA->id ? 'selected' : '' }}>
                                {{ $departamentoNA->departamento }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="municipioNA">MUNICIPIO DE NACIMIENTO ACUDIENTE</label>
                    <select name="municipioNA" id="municipioNA" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($municipioNA as $municipioNA)
                            <option value="{{ $municipioNA->id }}" {{ old('municipioNA')==$municipioNA->id ? 'selected' : '' }}>
                                {{ $municipioNA->municipio }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>

            <div class="container text-center"  style="background-color: #C0F9DE; text-align: center; border-radius: 50px 50px 50px 50px">
                <h5>DIRECCION  - OTRA INFORMACION DEL ACUDIENTE</h5>
            </div>
            <hr>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="direccionA">DIRECCION DE ACUDIENTE</label>
                    <input type="text" class="form-control" value="{{ old('direccionA') }}" id="direccionA" name="direccionA" placeholder="Escriba la direccion" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="barrioA">BARRIO ACUDIENTE</label>
                    <input type="text" class="form-control" value="{{ old('barrioA') }}" id="barrioA" name="barrioA" placeholder="Nombre del barrio" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="departamentoA">DEPARTAMENTO DEL ACUDIENTE</label>
                    <select name="departamentoA" id="departamentoA" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($departamentoA as $departamentoA)
                            <option value="{{ $departamentoA->id }}" {{ old('departamentoA')==$departamentoA->id ? 'selected' : '' }}>
                                {{ $departamentoA->departamento }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="municipioA">MUNICIPIO ACUDIENTE</label>
                    <select name="municipioA" id="municipioA" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($municipioA as $municipioA)
                            <option value="{{ $municipioA->id }}" {{ old('municipioA')==$municipioA->id ? 'selected' : '' }}>
                                {{ $municipioA->municipio }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="zonaA">ZONA</label>
                    <select name="zonaA" id="zonaA" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($zonaA as $zonaA)
                            <option value="{{ $zonaA->id }}" {{ old('zonaA')==$zonaA->id ? 'selected' : '' }}>
                                {{ $zonaA->zona }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="parentesco">PARENTESCO</label>
                    <select name="parentesco" id="parentesco" class="form-control">
                        <option value="">seleccione...</option>
                        @foreach ($parentesco as $parentesco)
                            <option value="{{ $parentesco->id }}" {{ old('parentesco')==$parentesco->id ? 'selected' : ''}}>
                                {{ $parentesco->parentesco }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="tipoEmpleo">TIPO DE EMPLEO</label>
                    <select name="tipoEmpleo" id="tipoEmpleo" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($tipoEmpleo as $tipoEmpleo)
                        <option value="{{ $tipoEmpleo->id }}" {{ old('tipoEmpleo')==$tipoEmpleo->id ? 'selected' : '' }}>
                            {{ $tipoEmpleo->tipoEmpleo }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ocupacion">OCUPACION</label>
                    <input type="text" class="form-control" value="{{ old('ocupacion') }}" id="ocupacion" name="ocupacion" placeholder="Ocupacion...">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="profesion">PROFESION</label>
                    <input type="text" class="form-control" value="{{ old('profesion') }}" id="profesion" name="profesion" placeholder="Profesion...">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="convive">CONVIVES CON EL ESTUDIANTE</label>
                    <select name="convive" id="convive" class="form-control">
                        <option value="">Seleccione...</option>
                        <option value="SI" {{ old('convive')=='SI' ? 'selected' : '' }}>SI</option>
                        <option value="NO" {{ old('convive')=='NO' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>

            <input type="button" name="previous" class="previous btn btn-danger" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
            </fieldset>

            <fieldset>
            <div class="container"  style="background-color: #C0F9DE; text-align: center; border-radius: 50px 50px 50px 50px">
                <h5>OTRA INFORMACION – SISTEMA SALUD</h5>
            </div>
            <hr>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="sectorP">PROVIENE DEL SECTOR PRIVADO?</label>
                    <select class="form-control" id="sectorP"  name="sectorP" >
                        <option value="">Seleccione...</option>
                        <option value="SI" {{ old('sectorP')=='SI' ? 'selected' : '' }}>SI</option>
                        <option value="NO" {{ old('sectorP')=='NO' ? 'selected' : '' }}>NO</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="otroMuni">PROVIENE DE OTRO MUNICIPIO?</label>
                    <select class="form-control" id="otroMuni"  name="otroMuni" >
                        <option value="">Seleccione...</option>
                        <option value="SI" {{ old('otroMuni')=='SI' ? 'selected' : '' }}>SI</option>
                        <option value="NO" {{ old('otroMuni')=='NO' ? 'selected' : '' }}>NO</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="institucion">INSTITUCION DE DONDE PROVIENE</label>
                <input type="text" class="form-control" value="{{ old('institucion') }}" id="institucion" name="institucion" placeholder="Nombre de la institucion de donde proviene">
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="eps">E.P.S</label>
                    <input type="text" class="form-control" value="{{ old('eps') }}" id="eps" name="eps" placeholder="Nombre de la E.P.S">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ips">I.P.S</label>
                    <input type="text" class="form-control" value="{{ old('ips') }}" id="ips" name="ips" placeholder="Nombre de la I.P.S">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="tipoSangre">TIPO DE SANGRE</label>
                    <select class="form-control"  id="tipoSangre" name="tipoSangre" required>
                        <option value="">Seleccione...</option>
                        @foreach ($tipoSangre as $tipoSangre)
                            <option value="{{  $tipoSangre->id}}" {{ old('tipoSangre')==$tipoSangre->id ? 'selected' : '' }}>
                                {{  $tipoSangre->tipoSangre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="discapacidad">DISCAPACIDAD</label>
                    <select class="form-control"  id="discapacidad" name="discapacidad" required>
                        <option value="">Seleccione...</option>
                        @foreach ($discapacidad as $discapacidad)
                            <option value="{{  $discapacidad->id}}" {{ old('discapacidad')==$discapacidad->id ? 'selected' : ''}}>
                                {{  $discapacidad->discapacidad }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="transtorno">TRANSTORNOS DE APRENDIZAJE ESCOLAR </label>
                    <select class="form-control"  id="transtorno" name="transtorno" required>
                        <option value="">Seleccione...</option>
                        @foreach ($transtorno as $transtorno)
                            <option value="{{  $transtorno->id}}" {{ old('transtorno')==$transtorno->id ? 'selected' : ''}}>
                                {{  $transtorno->transtorno }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="apoyoAcademico">APOYO ACADEMICO</label>
                    <select class="form-control"  id="apoyoAcademico" name="apoyoAcademico" required>
                        <option value="">Seleccione...</option>
                        @foreach ($apoyoAcademico as $apoyoAcademico)
                            <option value="{{  $apoyoAcademico->id}}" {{ old('apoyoAcademico')==$apoyoAcademico->id ? 'selected' : '' }}>
                                {{  $apoyoAcademico->apoyoAcademico }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="capacidades">CAPACIDADES EXCEPCIONALES</label>
                    <select class="form-control"  id="capacidades" name="capacidades" required>
                        <option value="">Seleccione...</option>
                        @foreach ($capacidades as $capacidades)
                            <option value="{{  $capacidades->id}}" {{ old('capacidades')==$capacidades->id ? 'selected' : ''}}>
                                {{  $capacidades->capacidadExepcional }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="button" name="previous" class="previous btn btn-danger" value="Previo" />
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
              Registar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <h3>Estas seguro que quieres Hacer esto?</h3>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
                    <button type="submit" class="btn btn-primary">ACEPTAR</button>
                  </div>
                </div>
              </div>
            </div>
            </fieldset>
    </form>
    </div>
    <hr>

    {{--  SCRIPT QUE MUESTRA LOS ERRORES DE CAMPOS VACIION  --}}
    <script>
        var numeroDocumento = document.getElementById("numeroDocumento");
        var tipoDocumento   = document.getElementById("tipoDocumento");
        var departamentoExp = document.getElementById("departamentoExp");
        var municipioExp    = document.getElementById("municipioExp");
        var nombres         = document.getElementById("nombres");
        var apellidos       = document.getElementById("apellidos");
        var fechaN          = document.getElementById("fechaN");
        var municipioN      = document.getElementById("municipioN");
        var departamentoN   = document.getElementById("departamentoN");
        var celular         = document.getElementById("celular");
        var correo          = document.getElementById("correo");
        var direccion       = document.getElementById("direccion");
        var barrio          = document.getElementById("barrio");
        var municipioViv    = document.getElementById("municipioViv");
        var zona            = document.getElementById("zona");
        var genero          = document.getElementById("genero");
        var grado           = document.getElementById("grado");
        var sede            = document.getElementById("sede");
        var jornada         = document.getElementById("jornada");
        var pais            = document.getElementById("pais");
        var victima         = document.getElementById("victima");
        var situacion       = document.getElementById("situacion");
        var etnia           = document.getElementById("etnia");
        var estrato         = document.getElementById("estrato");
        var Nsisben         = document.getElementById("Nsisben");
        var Psisben         = document.getElementById("Psisben");
        var nombresA        = document.getElementById("nombresA");
        var apellidosA      = document.getElementById("apellidosA");
        var tipoDocumentoA  = document.getElementById("tipoDocumentoA");
        var celularA        = document.getElementById("celularA");
        var correoA         = document.getElementById("correoA");
        var NdocumentoA     = document.getElementById("NdocumentoA");
        var paisOrigenA     = document.getElementById("paisOrigenA");
        var generoA         = document.getElementById("generoA");
        var fechaNA         = document.getElementById("fechaNA");
        var departamentoNA  = document.getElementById("departamentoNA");
        var municipioNA     = document.getElementById("municipioNA");
        var direccionA      = document.getElementById("direccionA");
        var barrioA         = document.getElementById("barrioA");
        var departamentoA   = document.getElementById("departamentoA");
        var municipioA      = document.getElementById("municipioA");
        var zonaA           = document.getElementById("zonaA");
        var parentesco      = document.getElementById("parentesco");
        var tipoEmpleo      = document.getElementById("tipoEmpleo");
        var convive         = document.getElementById("convive");
        var sectorP         = document.getElementById("sectorP");
        var otroMuni        = document.getElementById("otroMuni");
        var institucion     = document.getElementById("institucion");
        var ips             = document.getElementById("ips");
        var eps             = document.getElementById("eps");
        var tipoSangre      = document.getElementById("tipoSangre");
        var discapacidad    = document.getElementById("discapacidad");
        var transtorno      = document.getElementById("transtorno");
        var apoyoAcademico  = document.getElementById("apoyoAcademico");
        var capacidades     = document.getElementById("capacidades");



        @if ($errors->first('capacidades'))
        capacidades.style.borderColor = "red"
        @endif

        @if ($errors->first('apoyoAcademico'))
        apoyoAcademico.style.borderColor = "red"
        @endif

        @if ($errors->first('transtorno'))
        transtorno.style.borderColor = "red"
        @endif

        @if ($errors->first('discapacidad'))
        discapacidad.style.borderColor = "red"
        @endif

        @if ($errors->first('tipoSangre'))
        tipoSangre.style.borderColor = "red"
        @endif

        @if ($errors->first('eps'))
            eps.style.borderColor = "red"
            eps.placeholder = "Este campo es Obligatorio"
        @endif

        @if ($errors->first('ips'))
        ips.style.borderColor = "red"
        ips.placeholder = "Este campo es Obligatorio"
        @endif

        @if ($errors->first('institucion'))
        institucion.style.borderColor = "red"
        institucion.placeholder = "Este campo es Obligatorio"
        @endif

        @if ($errors->first('otroMuni'))
        otroMuni.style.borderColor = "red"
        @endif

        @if ($errors->first('sectorP'))
        sectorP.style.borderColor = "red"
        @endif

        @if ($errors->first('convive'))
        convive.style.borderColor = "red"
        @endif

        @if ($errors->first('tipoEmpleo'))
        tipoEmpleo.style.borderColor = "red"
        @endif

        @if ($errors->first('parentesco'))
        parentesco.style.borderColor = "red"
        @endif

        @if ($errors->first('zonaA'))
        zonaA.style.borderColor = "red"
        @endif

        @if ($errors->first('municipioA'))
        municipioA.style.borderColor = "red"
        @endif

        @if ($errors->first('departamentoA'))
        departamentoA.style.borderColor = "red"
        @endif

        @if ($errors->first('barrioA'))
        barrioA.style.borderColor = "red"
        barrioA.placeholder = "Este campo es Obligatorio"
        @endif

        @if ($errors->first('direccionA'))
        direccionA.style.borderColor = "red"
        direccionA.placeholder = "Este campo es obligatorio"
        @endif

        @if ($errors->first('municipioNA'))
        municipioNA.style.borderColor  = "red"
        @endif

        @if ($errors->first('departamentoNA'))
        departamentoNA.style.borderColor = "red"
        @endif

        @if ($errors->first('fechaNA'))
        fechaNA.style.borderColor = "red"
        @endif

        @if ($errors->first('generoA'))
        generoA.style.borderColor = "red"
        @endif

        @if ($errors->first('paisOrigenA'))
        paisOrigenA.style.borderColor = "red"
        @endif

        @if ($errors->first('NdocumentoA'))
        NdocumentoA.style.borderColor = "red"
        NdocumentoA.placeholder = "Este campo es Obligatorio"
        @endif

        @if ($errors->first('correoA'))
        correoA.style.borderColor = "red"
        @endif

        @if ($errors->first('celularA'))
        celularA.style.borderColor = "red"
        celularA.placeholder = "Este campo es Obligatorio"
        @endif

        @if ($errors->first('tipoDocumentoA'))
        tipoDocumentoA.style.borderColor = "red"
        @endif

        @if ($errors->first('apellidosA'))
        apellidosA.style.borderColor = "res"
        apellidosA.placeholder = "Este campo es Obligatorio"
        @endif

        @if ($errors->first('nombresA'))
        nombresA.style.borderColor = "red"
        nombresA.placeholder = "Este campo es Obligatorio"
        @endif

        @if ($errors->first('Psisben'))
        Psisben.style.borderColor = "red"
        Psisben.placeholder = "Este campo es Obligatorio"
        @endif

        @if ($errors->first('Nsisben'))
        Nsisben.style.borderColor = "red"
        Nsisben.placeholder = "Este campo es Obligatorio"
        @endif

        @if ($errors->first('estrato'))
        estrato.style.borderColor = "red"
        @endif

        @if ($errors->first('etnia'))
        etnia.style.borderColor = "red"
        @endif

        @if ($errors->first('situacion'))
        situacion.style.borderColor = "red"
        @endif

        @if ($errors->first('victima'))
        victima.style.borderColor = "red"
        @endif

        @if ($errors->first('pais'))
        pais.style.borderColor = "red"
        @endif

        @if ($errors->first('jornada'))
        jornada.style.borderColor = "red"
        @endif

        @if ($errors->first('sede'))
        sede.style.borderColor = "red"
        @endif

        @if ($errors->first('grado'))
        grado.style.borderColor = "red"
        @endif

        @if ($errors->first('genero'))
        genero.style.borderColor = "red"
        @endif

        @if ($errors->first('zona'))
        zona.style.borderColor = "red"
        @endif

        @if ($errors->first('correo'))
            correo.style.borderColor = "red"
        @endif

        @if ($errors->first('municipioViv'))
        municipioViv.style.borderColor = "red"
        @endif

        @if ($errors->first('barrio'))
        barrio.style.borderColor = "red"
        barrio.placeholder = "Este campo es obligatorio"
        @endif

        @if ($errors->first('direccion'))
        direccion.style.borderColor = "red"
        direccion.placeholder = "Este campo es obligatorio"
        @endif

        @if($errors->first('numeroDocumento'))
            numeroDocumento.style.borderColor = "red"
            numeroDocumento.placeholder = "Este campo es obligatorio"
        @endif

        @if ($errors->first('tipoDocumento'))
            tipoDocumento.style.borderColor = "red"
        @endif

        @if ($errors->first('departamentoExp'))
            departamentoExp.style.borderColor = "red"
        @endif

        @if ($errors->first('municipioExp'))
            municipioExp.style.borderColor = "red"
        @endif

        @if ($errors->first('nombres'))
            nombres.style.borderColor = "red"
            nombres.placeholder = "Este campo es obligatorio"
        @endif

        @if ($errors->first('apellidos'))
            apellidos.style.borderColor = "red"
            apellidos.placeholder = "Este campo es obligatorio"
        @endif

        @if ($errors->first('fechaN'))
            fechaN.style.borderColor = "red"
        @endif

        @if ($errors->first('municipioN'))
            municipioN.style.borderColor = "red"
        @endif

        @if ($errors->first('departamentoN'))
            departamentoN.style.borderColor = "red"
        @endif

        @if ($errors->first('celular'))
            celular.style.borderColor = "red"
            celular.placeholder = "Este campo es obligatorio"
        @endif

    </script>

    {{--  SCRIPT QUE REALIZA LA PAGINACION O DIVIDE EL FORMULARIO EN PARTES  --}}
    <script type="text/javascript">
    $(document).ready(function(){
       var current = 1,current_step,next_step,steps;
       steps = $("fieldset").length;
       $(".next").click(function(){
           current_step = $(this).parent();
           next_step = $(this).parent().next();
           next_step.show();
           current_step.hide();
           setProgressBar(++current);
       });
       $(".previous").click(function(){
           current_step = $(this).parent();
           next_step = $(this).parent().prev();
           next_step.show();
           current_step.hide();
           setProgressBar(--current);
       });
       setProgressBar(current);
       // Change progress bar action
       function setProgressBar(curStep){
           var percent = parseFloat(100 / steps) * curStep;
           percent = percent.toFixed();
           $(".progress-bar")
               .css("width",percent+"%")
               .html(percent+"%");
       }
    });
    </script>

@endsection
