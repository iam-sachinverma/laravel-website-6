<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
             ['id'=>1,'name'=>'car','type'=>'admin','mobile'=>'9310783727','email'=>'admin@admin.com','password'=>Hash::make('soul'),'image'=>'','status'=>1 ],
        ];

        DB::table('admins')->insert($adminRecords);

        /*foreach ($adminRecords as $key => $record) {
            \App\Admin::create($record);
        }*/
    }
}
