<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKtpDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

       Schema::create('ktps',function(Blueprint $table){
        $table->bigIncrements('id');
        $table->string('ktp_picture')->nullable();
        $table->string('name');
        $table->string('no_ktp')->unique();
        $table->date('birthday');
        $table->bigInteger('sex')->unsigned();
        $table->bigInteger('birthday_location_id')->unsigned();
        $table->bigInteger('desa_kelurahan_id')->unsigned();
        $table->bigInteger('religion_id')->unsigned();
        $table->bigInteger('blood_type_id')->unsigned()->nullable();
        $table->bigInteger('status_merital_id')->unsigned();
        $table->string('work_status');
        $table->bigInteger('citizenship_id')->unsigned();
        $table->timestamps();

        $table->softDeletes();

        $table->foreign('religion_id')
        ->references('id')->on('religions')
        ->onDelete('cascade');

        $table->foreign('sex')
        ->references('id')->on('sexs')
        ->onDelete('cascade');


        $table->foreign('citizenship_id')
        ->references('id')->on('citizenships')
        ->onDelete('cascade');

         $table->foreign('status_merital_id')
        ->references('id')->on('status_meritals')
        ->onDelete('cascade');


        $table->foreign('blood_type_id')
        ->references('id')->on('blood_types')
        ->onDelete('cascade');


        $table->foreign('desa_kelurahan_id')
        ->references('id')->on('desa_kelurahan')
        ->onDelete('cascade');

        
        $table->foreign('birthday_location_id')
        ->references('id')->on('kota_kabupaten')
        ->onDelete('cascade');


    });

   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('ktps');

    }
}
