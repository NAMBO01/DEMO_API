<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            // \App\Models\User::factory(10)->create();

            // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
        ;


        DB::table('products')->insert(
            array(
                'name'     =>   'OPPO FIND X 5',
                'price'   =>   20000000,
                'created_at' => '2023-02-22 16:44:33',
                'updated_at' => '2023-02-22 16:44:33',
            )
        );
    }
}
