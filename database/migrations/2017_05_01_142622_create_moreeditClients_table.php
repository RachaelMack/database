<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoreeditClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::table('clients', function (Blueprint $table) {
         $table->string('first_name');
         $table->string('last_name');
         $table->string('intial');
         $table->string('status');
         $table->date('start_date');
         $table->date('date_recieved');
         $table->string('address');
         $table->string('city');
         $table->string('prov');
         $table->string('p_code');
         $table->string('residence');
         $table->integer('phone');
         $table->integer('healthcard');
         $table->integer('SIN');
         $table->date('DOB');
         $table->string('gender');
         $table->string('prim_diagnosis');
         $table->string('sec_diagnosis');
         $table->string('family_doctor');
       });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('clients');
     }
   }
