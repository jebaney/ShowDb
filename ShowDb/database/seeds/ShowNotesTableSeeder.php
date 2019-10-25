<?php

use Illuminate\Database\Seeder;

class ShowNotesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('show_notes')->delete();

        \DB::table('show_notes')->insert([
            0 => [
                'id' => 1,
                'show_id' => 1486,
                'user_id' => 1,
                'note' => 'Video:&nbsp;<a href="https://www.youtube.com/watch?v=LTosRIEJXHU">Seth thanks the crew</a>',
                'published' => 1,
                'type' => 'public',
                'creator_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'order' => 0,
            ],
            1 => [
                'id' => 2,
                'show_id' => 1472,
                'user_id' => 1,
                'note' => '<p>Warren Haynes &amp; The Avett Brothers Recreate 1986 Jerry Garcia Band Show</p><p><a href="http://www.jambase.com/article/warren-haynes-avett-brothers-recreate-1986-jerry-garcia-band-show">Show Review</a><br></p>',
                'published' => 1,
                'type' => 'public',
                'creator_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'order' => 0,
            ],
            2 => [
                'id' => 3,
                'show_id' => 1472,
                'user_id' => 1,
                'note' => '<img src="http://www.asmylifeturnstoasong.com/wp-content/uploads/2016/10/101516-poster--231x300.jpg" alt="">',
                'published' => 1,
                'type' => 'public',
                'creator_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'order' => 0,
            ],
            3 => [
                'id' => 4,
                'show_id' => 1472,
                'user_id' => 1,
                'note' => '<img src="http://www.asmylifeturnstoasong.com/wp-content/uploads/2016/10/101516-pete-setlist--235x300.jpg" alt="">',
                'published' => 1,
                'type' => 'public',
                'creator_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'order' => 0,
            ],
        ]);
    }
}
