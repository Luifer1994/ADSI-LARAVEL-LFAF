<?php

use App\Grados;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_de_empleos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipoEmpleo');
        });

        Schema::create('parentescos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parentesco');
        });

        Schema::create('capacidades_exepcionales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('capacidadExepcional');
        });

        Schema::create('apoyos_academicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apoyoAcademico');
        });

        Schema::create('transtorno_aprendisajes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('transtorno');
        });

        Schema::create('discapacidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('discapacidad');
        });

        Schema::create('etnias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('etnia');
        });

        Schema::create('situaciones_socioeconomicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('situacionSocioeconomica');
        });

        Schema::create('estratos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estrato');
        });

        Schema::create('poblaciones_victimas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('poblacion');
        });

        Schema::create('tipos_de_sangres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipoSangre');
        });

        Schema::create('generos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('genero');
        });

        Schema::create('zonas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zona');
        });

        Schema::create('departamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('departamento');
        });

        Schema::create('municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('municipio');
        });

        Schema::create('tipos_de_documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipoDocumento');
        });

        Schema::create('paises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pais');
        });

        Schema::create('sedes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sede');
        });

        Schema::create('jornadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jornada');
        });

        Schema::create('grados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('grado');
        });

        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fechaInscripcion');
            $table->unsignedBigInteger('id_grado');
            $table->foreign('id_grado')->references('id')->on('grados');
            $table->unsignedBigInteger('id_jornada');
            $table->foreign('id_jornada')->references('id')->on('jornadas');
            $table->unsignedBigInteger('id_sede');
            $table->foreign('id_sede')->references('id')->on('sedes');
            $table->unsignedBigInteger('id_pais');
            $table->foreign('id_pais')->references('id')->on('paises');
            $table->unsignedBigInteger('id_tipoDocumento');
            $table->foreign('id_tipoDocumento')->references('id')->on('tipos_de_documentos');
            $table->string('numeroDocumento');
            $table->unsignedBigInteger('id_genero');
            $table->foreign('id_genero')->references('id')->on('generos');
            $table->unsignedBigInteger('id_municipioExp');
            $table->foreign('id_municipioExp')->references('id')->on('municipios');
            $table->unsignedBigInteger('id_departamentoExp');
            $table->foreign('id_departamentoExp')->references('id')->on('departamentos');
            $table->date('fechaNacimiento');
            $table->unsignedBigInteger('id_municipioNac');
            $table->foreign('id_municipioNac')->references('id')->on('municipios');
            $table->unsignedBigInteger('id_departamentoNac');
            $table->foreign('id_departamentoNac')->references('id')->on('departamentos');
            $table->string('apellidos');
            $table->string('nombres');
            $table->string('direccion');
            $table->string('barrio');
            $table->unsignedBigInteger('id_municipioViv');
            $table->foreign('id_municipioViv')->references('id')->on('municipios');
            $table->unsignedBigInteger('id_zona');
            $table->foreign('id_zona')->references('id')->on('zonas');
            $table->string('celular');
            $table->string('correo');
            $table->string('sectorPrivado');
            $table->string('provieneDeOtroMunicipio');
            $table->string('institucionDeDondeProviene');
            $table->string('eps');
            $table->string('ips');
            $table->unsignedBigInteger('id_tipoSangre');
            $table->foreign('id_tipoSangre')->references('id')->on('tipos_de_sangres');
            $table->unsignedBigInteger('id_poblacionVictima');
            $table->foreign('id_poblacionVictima')->references('id')->on('poblaciones_victimas');
            $table->date('fechaExpulsion');
            $table->string('numeroCarnetSisben');
            $table->string('puntajeSisben');
            $table->unsignedBigInteger('id_estrato');
            $table->foreign('id_estrato')->references('id')->on('estratos');
            $table->unsignedBigInteger('id_situacionSocioeconomica');
            $table->foreign('id_situacionSocioeconomica')->references('id')->on('situaciones_socioeconomicas');
            $table->unsignedBigInteger('id_etnia');
            $table->foreign('id_etnia')->references('id')->on('etnias');
            $table->unsignedBigInteger('id_discapacidad');
            $table->foreign('id_discapacidad')->references('id')->on('discapacidades');
            $table->unsignedBigInteger('id_trasntornoAprend');
            $table->foreign('id_trasntornoAprend')->references('id')->on('transtorno_aprendisajes');
            $table->unsignedBigInteger('id_apoyoAcademico');
            $table->foreign('id_apoyoAcademico')->references('id')->on('apoyos_academicos');
            $table->unsignedBigInteger('id_capacidadExepcional');
            $table->foreign('id_capacidadExepcional')->references('id')->on('capacidades_exepcionales');
            $table->string('nombreAcudiente');
            $table->string('apellidoAcudiente');
            $table->unsignedBigInteger('id_paisAcud');
            $table->foreign('id_paisAcud')->references('id')->on('paises');
            $table->string('direccionAcud');
            $table->string('barrioAcud');
            $table->unsignedBigInteger('id_parentesco');
            $table->foreign('id_parentesco')->references('id')->on('parentescos');
            $table->unsignedBigInteger('id_zonaAcud');
            $table->foreign('id_zonaAcud')->references('id')->on('zonas');
            $table->string('celularAcud');
            $table->string('correoAcud');
            $table->unsignedBigInteger('id_tipoDocumentoAcud');
            $table->foreign('id_tipoDocumentoAcud')->references('id')->on('tipos_de_documentos');
            $table->string('numeroDocumentoAcud');
            $table->unsignedBigInteger('id_generoAcud');
            $table->foreign('id_generoAcud')->references('id')->on('generos');
            $table->unsignedBigInteger('id_departamentoAcud');
            $table->foreign('id_departamentoAcud')->references('id')->on('departamentos');
            $table->unsignedBigInteger('id_municipioAcud');
            $table->foreign('id_municipioAcud')->references('id')->on('municipios');
            $table->char('conviveConEstudiante');
            $table->date('fechaNacimientoAcud');
            $table->unsignedBigInteger('id_departamentoNacAcud');
            $table->foreign('id_departamentoNacAcud')->references('id')->on('departamentos');
            $table->unsignedBigInteger('id_municipioNacAcud');
            $table->foreign('id_municipioNacAcud')->references('id')->on('municipios');
            $table->unsignedBigInteger('id_tipoEmpleo');
            $table->foreign('id_tipoEmpleo')->references('id')->on('tipos_de_empleos');
            $table->string('ocupacion');
            $table->string('profesion');
            $table->string('direccionEmpresa');
            $table->string('nombreEmpresa');
            $table->string('cargoDesempeña');
            $table->string('telefonoEmpresa');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_de_empleos');
        Schema::dropIfExists('parentescos');
        Schema::dropIfExists('capacidades_exepcionales');
        Schema::dropIfExists('apoyos_academicos');
        Schema::dropIfExists('transtorno_aprendisajes');
        Schema::dropIfExists('discapacidades');
        Schema::dropIfExists('etnias');
        Schema::dropIfExists('situaciones_socioeconomicas');
        Schema::dropIfExists('estratos');
        Schema::dropIfExists('poblaciones_victimas');
        Schema::dropIfExists('tipos_de_sangres');
        Schema::dropIfExists('generos');
        Schema::dropIfExists('zonas');
        Schema::dropIfExists('departamentos');
        Schema::dropIfExists('municipios');
        Schema::dropIfExists('tipos_de_documentos');
        Schema::dropIfExists('paises');
        Schema::dropIfExists('sedes');
        Schema::dropIfExists('jornadas');
        Schema::dropIfExists('grados');
        Schema::dropIfExists('estudiantes');
    }
}
