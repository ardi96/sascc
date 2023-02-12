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
        //
        // last drawn salary
        // mobile no
        // employer
        // work-adress
        // bank-acc-no
        // home-address
        Schema::table('users', function (Blueprint $table) {
            $table->string('nric',12)->unique;
            $table->string('mobileno',12)->unique;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
