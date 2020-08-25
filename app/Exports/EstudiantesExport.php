<?php

namespace App\Exports;

use App\Estudiantes;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class EstudiantesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array
    {
        return [    
            'APELLIDOS',
            'NOMBRES',
            'TIPO_DOCUMENTO_ESTUDIANTE',
            'NUMERO_DOCUMENTO',
            'FECHA_NACIMIENTO',
            'GENERO',
            'CELULAR',
            'CORREO',
            'FECHA_INSCRIPCION',
            'GRADO',
            'JORNADA',
            'SEDE',

        ];
    }
    public function collection()
    {
        return Estudiantes::join("grados", "grados.id", "=", "estudiantes.id_grado")
        ->join("jornadas", "jornadas.id", "=", "estudiantes.id_jornada")
        ->join("sedes", "sedes.id", "=", "estudiantes.id_sede")
        ->join("tipos_de_documentos as tipodocumentEs", "tipodocumentEs.id", "=", "estudiantes.id_tipoDocumento")
        ->join("generos as generoEs", "generoEs.id", "=", "estudiantes.id_genero")
        ->select( "apellidos", "nombres","tipodocumentEs.tipoDocumento", "numeroDocumento","fechaNacimiento", "generoEs.genero","celular", "correo","fechaInscripcion","grados.grado", "jornadas.jornada", "sedes.sede")
        ->get();

    }
}
