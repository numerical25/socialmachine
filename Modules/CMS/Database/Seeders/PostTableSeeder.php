<?php
namespace Modules\CMS\Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use \DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $lipsum = new \joshtronic\LoremIpsum();
        DB::table('posts')->insert([
            'title' => 'About',
            'author' => 'Anthony Gordon',
            'content' => $lipsum->paragraphs(5,'p'),
            'published' => 1,
            'page_only' => 1,
            'show_in_menu' => 1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'slug'=>'about'
        ]);
        for($i = 0; $i < 40; $i++) {
            DB::table('posts')->insert([
                'title' => $lipsum->words(4),
                'author' => $lipsum->words(2),
                'content' => $lipsum->paragraphs(5,'p'),
                'published' => 1,
                'page_only' => 0,
                'show_in_menu' => 0,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
                'slug'=>'post-page-'.($i+1)
            ]);
        }
    }
}
