<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDonerNeededsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_doner_neededs', function (Blueprint $table) {
            $table->id(); 
            $table->string("b_d_n_name"); 
            $table->string("b_d_n_gender"); 
            $table->biginteger("b_d_n_phone"); 
            $table->string("b_d_n_address"); 
            $table->string("b_d_n_email");  
            $table->string("b_d_n_password");  
            $table->biginteger("b_d_n_age"); 
            $table->foreignId('b_d_n_blood_type')
           ->constrained('blood_types')
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
        Schema::dropIfExists('blood_doner_neededs');
    }
}
