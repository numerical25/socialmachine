<?php
namespace Modules\CMS\Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use \DB;

class PostChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post_childrens')->insert([
            'parent_id' => 1,
            'child_id' => 2,
        ]);
    }
}
