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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobileno',12)->unique;
            $table->string('nric',12)->nullable()->unique;
            $table->date('dob')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('post_code')->nullable();
            $table->string('state')->nullable();
            $table->string('work_location')->nullable();
            $table->decimal('salary',8,2)->nullable();
            $table->string('duitnow_id',12)->nullable();
            $table->string('bank_acc_no')->nullable();
            $table->string('bank_code')->nullable();
            $table->string('status',4)->default('1000');
            $table->foreignId('company_id')->nullable();
            $table->foreignId('user_id');
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
        Schema::dropIfExists('clients');
    }
};
