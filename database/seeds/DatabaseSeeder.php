<?php

use Illuminate\Database\Seeder;
use App\Program;
use App\Faculty;
use App\Section;
use App\Admission;
use App\Event;
use App\Partner;
use App\AboutParent;
use App\About;
use App\News;
use App\NewsCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Section::class,4)->create();
        factory(Faculty::class,20)->create();
        factory(Program::class,10)->create();
        factory(Admission::class,10)->create();
        factory(Event::class,10)->create();
        factory(Partner::class,10)->create();
        factory(AboutParent::class,5)->create();
        factory(About::class,4)->create();
        factory(NewsCategory::class,10)->create();
        
        factory(News::class,10)->create();


    }
}
