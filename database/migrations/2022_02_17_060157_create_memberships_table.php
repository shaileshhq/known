<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('m_status')->nullable();
            $table->string('f_name')->nullable();
            $table->string('pincode')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('designation')->nullable();
            $table->string('qualification')->nullable();
            $table->string('category')->nullable();
            $table->string('paid_amt')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('work')->nullable();
            $table->string('place')->nullable();
            $table->string('image')->nullable();
            $table->string('signature')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->tinyInteger('delete_status')->default('0');
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
        Schema::dropIfExists('memberships');
    }
}
