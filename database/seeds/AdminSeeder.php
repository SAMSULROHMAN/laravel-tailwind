<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new User();
        $administrator->username = "admin";
        $administrator->name = "Site Admin";
        $administrator->email = "adminr@larashop.test";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = Hash::make("123456");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Sarmili, Bintaro, Tangerang Selatan";
        $administrator->save();
        $this->command->info("User Admin berhasil diinsert");
    }
}
