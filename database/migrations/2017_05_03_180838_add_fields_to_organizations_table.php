<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organizations', function (Blueprint $table) {
          $table->string('address');
          $table->string('city');
          $table->string('prov');
          $table->string('p_code');
          $table->string('phone');
          $table->boolean('is_deleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organizations', function (Blueprint $table) {
          $table->dropColumn('address');
          $table->dropColumn('city');
          $table->dropColumn('prov');
          $table->dropColumn('p_code');
          $table->dropColumn('phone');
          $table->dropColumn('is_deleted');
        });
    }
}
