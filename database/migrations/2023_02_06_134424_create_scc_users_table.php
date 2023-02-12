<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\SccUser;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('scc_users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('user_id')->unique();
                $table->string('email')->unique();
                $table->string('password');
                $table->text('avatar');
                $table->date('dob');
                $table->rememberToken();
                $table->timestamps();
            });

            SccUser::create(
                ['name' => 'IT Administrator',
                'user_id'=>'991',
                'dob'=>'2000-10-10',
                'email' => 'admin@themesbrand.com',
                'password' => Hash::make('123456'),
                'avatar' => 'images/avatar-1.jpg',
                'created_at' => now(),
            ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scc_users');
    }
};
