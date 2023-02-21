<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $clients = [
        //     [],
        //     [],
        //     [],
        // ];

        // Client::insert($clients);


        // Client::create([ 'name' => 'ARI HANGGARA BIN MAIL','email' => 'arihang@gara.com','mobileno' => '013221234343','nric' => '851223898712',
        //     'dob' => '1986-12-22','address_1' => 'LOT 12-6676','address_2' => 'BANGUNAN RUMAH LAMA','city' => 'KOTA KINABALU','post_code' => '88993',
        //     'state' => 'SABAH','work_location' => 'JABATAN IMIGRESEN','salary' => '3546','duitnow_id' => '851223898712','bank_acc_no' => '5566851223898712',
        //     'bank_code' => '','status' => '1000','company_id' => 2,'user_id' => 2,]);

        Client::create([ 'name' => 'ARI HANGGARA BIN MAI','email' => 'arihang1@gara.com','mobileno' => '013221234343','nric' => '851223898712',
            'dob' => '1986-12-22','address_1' => 'LOT 12-6676','address_2' => 'BANGUNAN RUMAH LAMA','city' => 'KOTA KINABALU','post_code' => '88993',
            'state' => 'SABAH','work_location' => 'JABATAN IMIGRESEN','salary' => '3546','duitnow_id' => '851223898712','bank_acc_no' => '5566851223898712',
            'bank_code' => '','status' => '1000','company_id' => 2,'user_id' => 2,]);


    }
}
