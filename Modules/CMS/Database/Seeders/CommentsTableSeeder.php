<?php

namespace Modules\CMS\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            //What is unguard ?
            //Model::unguard();
            $lipsum = new \joshtronic\LoremIpsum();
            DB::table('comments')->insert([
                'post_id'=>3,
                'user_id'=>1,
                'username' => 'Anthony Gordon',
                'comment' => $lipsum->sentences(3),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
        } catch(Exception $e) {
            $message = $e->getMessage();
        }
    }
}
