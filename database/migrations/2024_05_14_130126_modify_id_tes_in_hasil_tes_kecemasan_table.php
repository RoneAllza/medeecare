<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyIdTesInHasilTesKecemasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hasil_tes_kecemasan', function (Blueprint $table) {
            // Remove the `modify` statement
            // Change `id_tes` column to auto-incrementing primary key
            $table->bigIncrements('id_tes')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hasil_tes_kecemasan', function (Blueprint $table) {
            // This will remove the `created_at` and `updated_at` columns
            $table->dropTimestamps();
            // Rollback the modification of the `id_tes` column
            $table->bigInteger('id_tes')->change();
        });
    }
}
