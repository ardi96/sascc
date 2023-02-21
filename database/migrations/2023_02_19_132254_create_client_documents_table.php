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
        Schema::create('client_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('document_type_id');
            $table->string('description');
            $table->string('status')->default('1000');
            $table->dateTime('uploaded_date');
            $table->string('filename');
            $table->bigInteger('validated_by')->nullable();
            $table->dateTime('validated_at')->nullable();
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
        Schema::dropIfExists('client_documents');
    }
};
