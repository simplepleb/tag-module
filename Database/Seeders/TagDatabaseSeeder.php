<?php

/**
 * Putting this here to help remind you where this came from.
 *
 * I'll get back to improving this and adding more as time permits
 * if you need some help feel free to drop me a line.
 *
 * * Twenty-Years Experience
 * * PHP, JavaScript, Laravel, MySQL, Java, Python and so many more!
 *
 *
 * @author  Simple-Pleb <plebeian.tribune@protonmail.com>
 * @website https://www.simple-pleb.com
 * @source https://github.com/simplepleb/tag-module
 *
 * @license Free to do as you please
 *
 * @since 1.0
 *
 */
namespace Modules\Tag\Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Modules\Tag\Entities\Tag;

class TagDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Tags Seed
         * ------------------
         */

        DB::table('taggables')->truncate();
        echo "Truncate: taggables \n";

        DB::table('tags')->truncate();
        echo "Truncate: tags \n";

        Tag::factory()->count(10)->create();
        $tags = Tag::all();
        echo " Insert: tags \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
