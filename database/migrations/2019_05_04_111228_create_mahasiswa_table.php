<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateMahasiswaTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('mahasiswa', function (Blueprint $table) {
$table->bigIncrements('id');
$table->string('nama');
$table->string('jurusan');
$table->text('alamat');
$table->timestamps();
});
}
/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('mahasiswa');
}
}