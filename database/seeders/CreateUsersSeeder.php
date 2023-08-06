<?php

  

namespace Database\Seeders;

  

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;

  

class CreateUsersSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $users = [

            [

               'name'=>'Superadmin',

               'email'=>'sadmin@itsolutionstuff.com',

               'type'=>'1',

               'password'=> bcrypt('123456'),

            ],

            [

               'name'=>'Kms 01',

               'email'=>'kms01@itsolutionstuff.com',

               'type'=> '2',

               'password'=> bcrypt('123456'),

            ],

            [

               'name'=>'Akd01',

               'email'=>'akd01@itsolutionstuff.com',

               'type'=>'3',

               'password'=> bcrypt('123456'),

            ],

            [

                'name'=>'Kmd01',
 
                'email'=>'kmd01@itsolutionstuff.com',
 
                'type'=>'4',
 
                'password'=> bcrypt('123456'),
 
             ],

             [

                'name'=>'Sarpras01',
 
                'email'=>'Sarpras01@itsolutionstuff.com',
 
                'type'=>'5',
 
                'password'=> bcrypt('123456'),
 
             ],

             [

                'name'=>'Dk01',
 
                'email'=>'dk01@itsolutionstuff.com',
 
                'type'=>'6',
 
                'password'=> bcrypt('123456'),
 
             ],
             [
               'name'=>'Keuangan',
               'email'=>'keuangan@itsolutionstuff.com',
               'type'=>'7',
               'password'=>bcrypt(123456),
             ],
             [
               'name'=>'Umum',
               'email'=>'umum@itsolutionstuff.com',
               'type'=>'8',
               'password'=>bcrypt(123456),
             ],
             [
             'name'=>'Akd02',

             'email'=>'akd02@itsolutionstuff.com',

             'type'=>'3',

             'password'=> bcrypt('123456'),

            ],
             [

               'name'=>'Mhs01',

               'email'=>'mhs01@itsolutionstuff.com',

               'type'=>'0',

               'password'=> bcrypt('123456'),

            ],
            [

               'name'=>'Indah Latifah',

               'email'=>'D111911038',

               'type'=>'0',

               'password'=> bcrypt('D111911038'),

            ],
        ];

    

        foreach ($users as $key => $user) {

            User::create($user);

        }

    }

}