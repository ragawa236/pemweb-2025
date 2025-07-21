<?php

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Story::count()==0){
            Story::create([
                'judul' => 'Cerita 1',
                'isi' => 'lorem ipsum',
                'author' => 'John',
            ]);
            Story::create([
                'judul' => 'Cerita 2',
                'isi' => 'lorem ipsum',
                'author' => 'John',
            ]);     
        } 
    }
}
