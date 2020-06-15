<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
//        php artisan db:seed --class=UsersTableSeeder
        DB::table('users')->truncate();
        DB::table('users')->insert(array(
            array(
                'name' => 'James',
                'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-05-20 12:15:29', 'UTC'),
            ),
            array(
                'name' => 'Mark',
                'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-06-18 13:37:29', 'UTC'),
            ),
            array(
                'name' => 'Ertugral',
                'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-05-15 14:25:29', 'UTC'),
            ),
            array(
                'name' => 'Turget',
                'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-06-15 09:37:29', 'UTC'),
            ),
            array(
                'name' => 'John',
                'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-06-19 12:35:29', 'UTC'),
            ),
            array(
                'name' => 'Smith',
                'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-06-15 16:35:22', 'UTC'),
            ),
            array(
                'name' => 'Jackson',
                'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-06-15 19:35:29', 'UTC'),
            ),
            array(
                'name' => 'Ronaldo',
                'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-09-18 11:35:29', 'UTC'),
            ),
        ));
    }
}
