<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::where('email','tester@pslc.com.ng')->first();

        if(!$user){
// User::create([
//     'name'=>'John Omoluabi',
//     'cadet_number'=>17,
//     'service_number'=>42564,
//     'sbc'=>48,
//     'verified'=>1,
//     'is_admin'=>1,
//   'path'=>'150.png',
//     'email'=>'omoluabi.ayojay@gmail.com',
//     'phone'=>'09074853315',
//     'password'=>Hash::make('color#ff0000'),

// ]);
User::create([
    'name'=>'Tester Tester',
    'cadet_number'=>666,
    'service_number'=>66666,
    'sbc'=>50,
    'verified'=>1,
    'is_admin'=>1,
   'path'=>'150.png',
    'email'=>'tester@pslc.com.ng',
    'phone'=>'09066666666',
    'password'=>Hash::make('testerpass'),

]);
        }
    }
}
// $table->id();
// $table->string('name');
// $table->integer('cadet_number');
// $table->integer('service_number')->unique();
// $table->integer('sbc');
// $table->boolean('verified')->default(false);
// $table->boolean('is_admin')->default(false);
// $table->string('email')->unique();
// $table->string('phone')->unique();
// $table->string('address')->nullable();
// $table->timestamp('email_verified_at')->nullable();
// $table->string('password');
// $table->rememberToken();
// $table->timestamps();
