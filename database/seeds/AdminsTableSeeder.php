<?php

use Illuminate\Database\Seeder;

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
            [
            'id'=>2,'name'=>'admin','type'=>'admin','mobile'=>88822299,'email'=>'admin@gmail.com','password'=>'$2y$10$7XqcjpE6BGjwy0zi2vSzieKGexvR5m.l7y7juKBucopzEc1BMM8Xi','image'=>'ffff','status'=>1],
    ];

    //  foreach ($adminRecords as  $key  => $record ){
    //      \App\Admin::create[$record];
    //  }

    DB::table('admins')->insert($adminRecords);
    }
}
