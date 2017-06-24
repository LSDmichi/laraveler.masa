<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->truncate();

        DB::table('todos')->insert([
          [
            'title'       =>  'Bruj Khalifa',
            'created_at'  =>  '2010-01-04 09:00:00',
            'updated_at'  =>  '2010-01-05 09:00:00',
          ],
          [
            'title'       =>  'tokyoskytree',
            'created_at'  =>  '2012-02-29 13:00:00',
            'updated_at'  =>  '2012-03-10 13:00:00',
          ]
        ]);
    }
}
