<?php

use App\Models\DocumentType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_types', function (Blueprint $table) {
            $table->id();
            $table->string('document_name');
            $table->timestamps();
        });

        DocumentType::create(['document_name' => 'NRIC']);
        DocumentType::create(['document_name' => 'Latest Pay Slip']);
        DocumentType::create(['document_name' => 'Approval Letter from Employer']);
        DocumentType::create(['document_name' => 'Bank Statement (Showing actual account number for salary']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_types');
    }
};
