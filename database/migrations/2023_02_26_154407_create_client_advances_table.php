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
        Schema::create('client_advances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->datetime('requested_date');
            $table->decimal('advance_amount',9,2,true);
            $table->integer('duration');
            $table->string('status',4);
            $table->datetime('validated_date')->nullable(true);
            $table->bigInteger('validated_user')->nullable(true);
            $table->decimal('disbursed_amount',9,2,true);
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
        Schema::dropIfExists('client_advances');
    }
};
