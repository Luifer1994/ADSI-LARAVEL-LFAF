<?php
namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App;
use App\ApoyosAcademicos;
use App\CapacidadesExepcionales;
use App\Departamentos;
use App\Discapacidades;
use App\Estratos;
use App\Estudiantes;
use App\Etnias;
use App\Exports\EstudiantesExport;
use App\Generos;
use App\Grados;
use App\Jornadas;
use App\Municipios;
use App\Paises;
use App\Parentescos;
use App\Sedes;
use App\PoblacionesVictimas;
use App\SituacionesSocioeconomicas;
use App\TiposDeDocumentos;
use App\TiposDeEmpleos;
use App\TiposDeSangres;
use App\Zonas;
use App\TranstornoAprendisajes;
use App\User;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function exportPDF()
    {
        $estudiantes = Estudiantes::get();
        $pdf = PDF::loadView('estudiantesExport', compact('estudiantes'));

        return $pdf->download('estudiantes-list.pdf');

    }

    public function exportEXCEL()
    {
        return Excel::download(new EstudiantesExport, 'estudiantes-list.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipoDocumento   = TiposDeDocumentos::all();
        $departamentoExp = Departamentos::all();
        $municipioExp    = Municipios::all();
        $genero          = Generos::all();
        $municipioViv    = Municipios::all();
        $zona            = Zonas::all();
        $tipoSangre      = TiposDeSangres::all();
        $discapacidad    = Discapacidades::all();
        $apoyoAcademico  = ApoyosAcademicos::all();
        $grado           = Grados::all();
        $sede            = Sedes::all();
        $jornada         = Jornadas::all();
        $pais            = Paises::all();
        $transtorno      = TranstornoAprendisajes::all();
        $capacidades     = CapacidadesExepcionales::all();
        $victima         = PoblacionesVictimas::all();
        $situacion       = SituacionesSocioeconomicas::all();
        $etnia           = Etnias::all();
        $estrato         = Estratos::all();
        $tipoDocumentoA  = TiposDeDocumentos::all();
        $paisOrigenA     = Paises::all();
        $generoA         = Generos::all();
        $zonaA           = Zonas::all();
        $tipoEmpleo      = TiposDeEmpleos::all();
        $municipioN      = Municipios::all();
        $departamentoN   = Departamentos::all();
        $departamentoA   = Departamentos::all();
        $municipioA      = Municipios::all();
        $departamentoNA  = Departamentos::all();
        $municipioNA     = Municipios::all();
        $parentesco      = Parentescos::all();
        return view('inscripcion', compact('tipoDocumento', 'departamentoExp',
                     'municipioExp', 'genero', 'municipioViv', 'zona', 'tipoSangre',
                     'discapacidad','apoyoAcademico', 'grado', 'sede', 'jornada', 'pais',
                     'transtorno', 'capacidades','victima','situacion','etnia','estrato',
                    'tipoDocumentoA','paisOrigenA','generoA','zonaA','tipoEmpleo','municipioN',
                    'departamentoN','departamentoA','municipioA','departamentoNA','municipioNA','parentesco'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Estudiantes::where('numeroDocumento', '=', $request->numeroDocumento)->count() > 0)
        {
            return back()->with('mensaje2', 'YA EXISTE UN ESTUDIANTE CON ESTE NUMERO DE DOCUMENTO');

        }elseif (Estudiantes::where('correo', '=', $request->correo)->count() > 0) {


            return back()->with('mensaje2', 'YA EXISTE UN ESTUDIANTE CON ESTE CORREO');

        }else {
            $request->validate([
                'tipoDocumento'=>'required',
                'numeroDocumento'=>'required',
                'departamentoExp'=>'required',
                'municipioExp'=>'required',
                'nombres'=>'required',
                'apellidos'=>'required',
                'fechaN'=>'required',
                'celular'=>'required',
                'correo'=>'required|email',
                'direccion'=>'required',
                'barrio'=>'required',
                'municipioViv'=>'required',
                'zona'=>'required',
                'genero'=>'required',
                'fechaIns'=>'required',
                'grado'=>'required',
                'sede'=>'required',
                'jornada'=>'required',
                'pais'=>'required',
                'victima'=>'required',
                'situacion'=>'required',
                'etnia'=>'required',
                'estrato'=>'required',
                'Nsisben'=>'required',
                'Psisben'=>'required',
                'nombresA'=>'required',
                'apellidosA'=>'required',
                'celularA'=>'required',
                'correoA'=>'required',
                'tipoDocumentoA'=>'required',
                'NdocumentoA'=>'required',
                'paisOrigenA'=>'required',
                'generoA'=>'required',
                'direccionA'=>'required',
                'barrioA'=>'required',
                'zonaA'=>'required',
                'parentesco'=>'required',
                'tipoEmpleo'=>'required',
                'ocupacion'=>'nullable',
                'profesion'=>'nullable',
                'sectorP'=>'required',
                'otroMuni'=>'required',
                'institucion'=>'required',
                'eps'=>'required',
                'ips'=>'required',
                'tipoSangre'=>'required',
                'discapacidad'=>'required',
                'transtorno'=>'required',
                'apoyoAcademico'=>'required',
                'capacidades'=>'required',
                'municipioN'=>'required',
                'departamentoN'=>'required',
                'departamentoA'=>'required',
                'municipioA'=>'required',
                'convive'=>'required',
                'fechaNA'=>'required',
                'departamentoNA'=>'required',
                'municipioNA'=>'required',

            ]);

            $newEstudiente = new App\Estudiantes;


            $newEstudiente->fechaInscripcion=$request->fechaIns;
            $newEstudiente->id_grado=$request->grado;
            $newEstudiente->id_jornada=$request->jornada;
            $newEstudiente->id_sede=$request->sede;
            $newEstudiente->id_pais=$request->pais;
            $newEstudiente->id_tipoDocumento=$request->tipoDocumento;
            $newEstudiente->numeroDocumento=$request->numeroDocumento;
            $newEstudiente->id_genero=$request->genero;
            $newEstudiente->id_municipioExp=$request->municipioExp;
            $newEstudiente->id_departamentoExp=$request->departamentoExp;
            $newEstudiente->fechaNacimiento=$request->fechaN;
            $newEstudiente->id_municipioNac=$request->municipioN;
            $newEstudiente->id_departamentoNac=$request->departamentoN;
            $newEstudiente->apellidos=$request->apellidos;
            $newEstudiente->nombres=$request->nombres;
            $newEstudiente->direccion=$request->direccion;
            $newEstudiente->barrio=$request->barrio;
            $newEstudiente->id_municipioViv=$request->municipioViv;
            $newEstudiente->id_zona=$request->zona;
            $newEstudiente->celular=$request->celular;
            $newEstudiente->correo=$request->correo;
            $newEstudiente->sectorPrivado=$request->sectorP;
            $newEstudiente->provieneDeOtroMunicipio=$request->otroMuni;
            $newEstudiente->institucionDeDondeProviene=$request->institucion;
            $newEstudiente->eps=$request->eps;
            $newEstudiente->ips=$request->ips;
            $newEstudiente->id_tipoSangre=$request->tipoSangre;
            $newEstudiente->id_poblacionVictima=$request->victima;
            $newEstudiente->numeroCarnetSisben=$request->Nsisben;
            $newEstudiente->puntajeSisben=$request->Psisben;
            $newEstudiente->id_estrato=$request->estrato;
            $newEstudiente->id_situacionSocioeconomica=$request->situacion;
            $newEstudiente->id_etnia=$request->etnia;
            $newEstudiente->id_discapacidad=$request->discapacidad;
            $newEstudiente->id_trasntornoAprend=$request->transtorno;
            $newEstudiente->id_apoyoAcademico=$request->apoyoAcademico;
            $newEstudiente->id_capacidadExepcional=$request->capacidades;
            $newEstudiente->nombreAcudiente=$request->nombresA;
            $newEstudiente->apellidoAcudiente=$request->apellidosA;
            $newEstudiente->id_paisAcud=$request->paisOrigenA;
            $newEstudiente->direccionAcud=$request->direccionA;
            $newEstudiente->barrioAcud=$request->barrioA;
            $newEstudiente->id_parentesco=$request->parentesco;
            $newEstudiente->id_zonaAcud=$request->zonaA;
            $newEstudiente->celularAcud=$request->celularA;
            $newEstudiente->correoAcud=$request->correoA;
            $newEstudiente->id_tipoDocumentoAcud=$request->tipoDocumentoA;
            $newEstudiente->numeroDocumentoAcud=$request->NdocumentoA;
            $newEstudiente->id_generoAcud=$request->generoA;
            $newEstudiente->id_departamentoAcud=$request->departamentoA;
            $newEstudiente->id_municipioAcud=$request->municipioA;
            $newEstudiente->conviveConEstudiante=$request->convive;
            $newEstudiente->fechaNacimientoAcud=$request->fechaNA;
            $newEstudiente->id_departamentoNacAcud=$request->departamentoNA;
            $newEstudiente->id_municipioNacAcud=$request->municipioNA;
            $newEstudiente->id_tipoEmpleo=$request->tipoEmpleo;
            $newEstudiente->ocupacion=$request->ocupacion;
            $newEstudiente->profesion=$request->profesion;


            $newEstudiente->save();

            return back()->with('mensaje', 'REGISTRO EXITOSO');
        }


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar(request $request, $id){

        $funcionarios = App\User::findOrFail($id);
        $funcionarios->delete();

        return back()->with('mensaje', 'FUNCIONARIO ELIMINADO CON EXITO');
    }


}
