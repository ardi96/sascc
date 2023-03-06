<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            $table->string('username',12)->unique;
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role_id')->nullable();
            $table->boolean('locked')->nullable();
            $table->string('mobileno',12)->unique;
            $table->integer('company_id')->nullable();
            $table->text('avatar');

            // $table->string('nric',12)->unique;
            // $table->date('dob');
            // $table->string('address_1')->nullable();
            // $table->string('address_2')->nullable();
            // $table->string('city')->nullable();
            // $table->string('state')->nullable();
            // $table->string('employer')->nullable();


            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['username'=>'admin',
            'name' => 'admin',
            'mobileno'=>'0112828743',
            'email' => 'admin@themesbrand.com',
            'locked' => 0,
            'role_id' => 1,
            'password' => Hash::make('123456'),
            'email_verified_at'=>'2022-01-02 17:04:58',
            'avatar' => 'images/avatar-1.jpg',
            'created_at' => now(),
        ]);

        User::create(['username'=>'manager',
        'name' => 'Manager',
        'mobileno'=>'0116728743',
        'email' => 'admin@company.com',
        'locked' => 0,
        'role_id' => 2,
        'password' => Hash::make('123456'),
        'email_verified_at'=>'2022-01-02 17:04:58',
        'avatar' => 'images/avatar-1.jpg',
        'created_at' => now(),
        ]);

        User::create(['username'=>'userx',
            'name' => 'User X Space',
            'mobileno'=>'0131828743',
            'email' => 'userxspace@outerworld.com',
            'locked' => 0,
            'role_id' => 3,
            'password' => Hash::make('123456'),
            'email_verified_at'=>'2022-01-02 17:04:58',
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
        Schema::dropIfExists('users');
    }
}
