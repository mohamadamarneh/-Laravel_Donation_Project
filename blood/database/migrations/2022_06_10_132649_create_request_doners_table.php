<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestDonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_doners', function (Blueprint $table) {
            $table->id();
            $table->string('request_date');
            $table->boolean("status");
            $table->foreignId('b_d_n_id')
           ->constrained('blood_doner_neededs')
           ->onUpdate('cascade')
           ->onDelete('cascade');
            $table->foreignId('b_d_id')
           ->constrained('blood_doners')
           ->onUpdate('cascade')
           ->onDelete('cascade');
            
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
        Schema::dropIfExists('request_doners');
    }
}
