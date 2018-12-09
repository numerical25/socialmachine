<?php

namespace Modules\CMS\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use Modules\CMS\Database\Seeder\PostTableSeeder;

class CMSDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(PostTableSeeder::class);
        $this->call(PostChildrenTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
