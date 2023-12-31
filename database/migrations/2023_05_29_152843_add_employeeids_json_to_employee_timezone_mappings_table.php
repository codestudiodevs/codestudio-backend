<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_timezone_mappings', function (Blueprint $table) {
            //
            $table->json('employee_ids')->nullable();;
            $table->json('device_ids')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_timezone_mappings', function (Blueprint $table) {
            //
            $table->dropColumn('employee_ids');
            $table->dropColumn('device_ids');
        });
    }
};
