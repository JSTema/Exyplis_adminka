<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'name' => 'Artem',
            'description' => 'how to become a junior php developer',
            'text' => 'Some body text about how to become a junior php developer'
        ]);
    }
}
