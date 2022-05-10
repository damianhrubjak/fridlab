<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\File;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First create one image -> id will be 1
        File::create([
            'source_path' => 'files/seeder-img/harry-cunningham-L0nLG8t7zho-unsplash.jpg',
            'file_name' => 'harry-cunningham-L0nLG8t7zho-unsplash.jpg',
            'size' => '3263307'
        ]);


        // Then seed blogs table
        Blog::factory(30)->create();
    }
}
