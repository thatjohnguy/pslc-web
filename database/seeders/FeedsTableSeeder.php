<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Hash;


use App\Models\Feed;

class FeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feed::create([
            'title'=>'The Passing-out Parade for the 49th Superintendent Basic Course is finally here!!!',
            'content'=>'Something nice happened',
            'Author'=>'John Omoluabi',
        
        ]);
    }
}
