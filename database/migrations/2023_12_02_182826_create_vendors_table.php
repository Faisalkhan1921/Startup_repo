<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table-string('uname')->nullable();
            $table-string('dept_name')->nullable();
            $table-string('dept_address')->nullable();
            $table-string('st_address')->nullable();
            $table-string('p_code')->nullable();
            $table-string('email')->nullable();
            $table-string('phone')->nullable();
            $table-string('password')->nullable();
            $table-string('lts_code')->nullable();
            // $table-string('lts_number')->nullable();
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
        Schema::dropIfExists('vendors');
    }
}
