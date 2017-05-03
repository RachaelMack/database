<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
          $table->integer('organization_id')->unsigned()->default(0);
          $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
          $table->string('first_name');
          $table->string('last_name');
          $table->string('initial');
          $table->string('status');
          $table->date('start_date');
          $table->date('date_recieved');
          $table->string('address');
          $table->string('city');
          $table->string('prov');
          $table->string('p_code');
          $table->string('residence');
          $table->string('phone');
          $table->integer('healthcard');
          $table->integer('SIN');
          $table->date('DOB');
          $table->string('gender');
          $table->string('prim_diagnosis');
          $table->string('sec_diagnosis');
          $table->string('family_doctor');
          $table->dropColumn('name');
          $table->string('advocate');
          $table->string('special_instructions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
          $table->dropForeign('clients_organization_id_foreign');
          $table->dropColumn('organization_id');
          $table->dropColumn('first_name');
          $table->dropColumn('last_name');
          $table->dropColumn('initial');
          $table->dropColumn('status');
          $table->dropColumn('start_date');
          $table->dropColumn('date_recieved');
          $table->dropColumn('address');
          $table->dropColumn('city');
          $table->dropColumn('prov');
          $table->dropColumn('p_code');
          $table->dropColumn('residence');
          $table->dropColumn('phone');
          $table->dropColumn('healthcard');
          $table->dropColumn('SIN');
          $table->dropColumn('DOB');
          $table->dropColumn('gender');
          $table->dropColumn('prim_diagnosis');
          $table->dropColumn('sec_diagnosis');
          $table->dropColumn('family_doctor');
          $table->string('name');
          $table->dropColumn('advocate');
          $table->dropColumn('special_instructions');

        });
    }
}
