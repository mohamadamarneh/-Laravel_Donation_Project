<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_doners', function (Blueprint $table) {
            $table->id(); 
            $table->string("b_d_name"); 
            $table->string("b_d_gender"); 
            $table->biginteger("b_d_phone"); 
            $table->string("b_d_address"); 
            $table->string("b_d_email");  
            $table->string("b_d_password");  
            $table->string("b_d_reprt");  
            $table->biginteger("b_d_age"); 
            $table->boolean("status"); 
            $table->foreignId('b_d_blood_type')
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
        Schema::dropIfExists('blood_doners');
    }
}
