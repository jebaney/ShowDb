<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBadgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('code');
            $table->string('image_url');
            $table->string('description');
            $table->timestamps();
        });

	DB::table('badges')->insert([
            array(
              'title' => 'Early Adopter', 
              'code' => 'EARLY',
              'image_url' => '/img/early-adopter.png',
              'description' => 'Account created within the first month'
            ),
            array(
              'title' => 'Donor', 
              'code' => 'DONOR',
              'image_url' => '/img/donor.png',
              'description' => 'Donates time or resources to this site'
            ),
            array(
              'title' => 'Note Maker', 
              'code' => 'NOTE',
              'image_url' => '/img/note-maker.png',
              'description' => 'Contributes notes to this site'
            ),
            array(
              'title' => 'Album Complete: Self Titled', 
              'code' => 'ALBUM1',
              'image_url' => '/img/album-self-titled.png',
              'description' => 'Has seen 100% of songs on this album'
            ),
            array(
              'title' => 'Album Complete: Country Was', 
              'code' => 'ALBUM2',
              'image_url' => '/img/album-country-was.png',
              'description' => 'Has seen 100% of songs on this album'
            ),
            array(
              'title' => 'Album Complete: Carolina Jubilee', 
              'code' => 'ALBUM3',
              'image_url' => '/img/album-carolina-jubilee.png',
              'description' => 'Has seen 100% of the songs on this album'
            ),
            array(
              'title' => 'Album Complete: Mignonette', 
              'code' => 'ALBUM4',
              'image_url' => '/img/album-migonette.png',
              'description' => 'Has seen 100% of the songs on this album'
            ),
            array(
              'title' => 'Album Complete: Four Thieves Gone', 
              'code' => 'ALBUM5',
              'image_url' => '/img/album-ftg.png',
              'description' => 'Has seen 100% of the songs on this album'
            ),
            array(
              'title' => 'Album Complete: The Gleam', 
              'code' => 'ALBUM6',
              'image_url' => '/img/album-gleam.png',
              'description' => 'Has seen 100% of the songs on this album'
            ),
            array(
              'title' => 'Album Complete: Emotionalism', 
              'code' => 'ALBUM7',
              'image_url' => '/img/album-emotionalism.png',
              'description' => 'Has seen 100% of the songs on this album'
            ),
            array(
              'title' => 'Album Complete: The Second Gleam', 
              'code' => 'ALBUM8',
              'image_url' => '/img/album-second-gleam.png',
              'description' => 'Has seen 100% of the songs on this album'
            ),
            array(
              'title' => 'Album Complete: I and Love and You', 
              'code' => 'ALBUM9',
              'image_url' => '/img/album-ilu.png',
              'description' => 'Has seen 100% of the songs on this album'
            ),
            array(
              'title' => 'Album Complete: The Carpenter', 
              'code' => 'ALBUM10',
              'image_url' => '/img/album-carpenter.png',
              'description' => 'Has seen 100% of the songs on this album'
            ),
            array(
              'title' => 'Album Complete: The Magpie and the Dandelion', 
              'code' => 'ALBUM11',
              'image_url' => '/img/album-magpie.png',
              'description' => 'Has seen 100% of the songs on this album'
            ),
            array(
              'title' => 'Album Complete: True Sadness', 
              'code' => 'ALBUM12',
              'image_url' => '/img/album-true-sadness.png',
              'description' => 'Has seen 100% of the songs on this album'
            ),
            array(
              'title' => 'Year Club: 2000', 
              'code' => 'YEAR2000',
              'image_url' => '/img/year-2000-club.png',
              'description' => 'First show was in 2000'
            ),
            array(
              'title' => 'Year Club: 2001', 
              'code' => 'YEAR2001',
              'image_url' => '/img/year-2001-club.png',
              'description' => 'First show was in 2001'
            ),
            array(
              'title' => 'Year Club: 2002', 
              'code' => 'YEAR2002',
              'image_url' => '/img/year-2002-club.png',
              'description' => 'First show was in 2002'
            ),
            array(
              'title' => 'Year Club: 2003', 
              'code' => 'YEAR2003',
              'image_url' => '/img/year-2003-club.png',
              'description' => 'First show was in 2003'
            ),
            array(
              'title' => 'Year Club: 2004', 
              'code' => 'YEAR2004',
              'image_url' => '/img/year-2004-club.png',
              'description' => 'First show was in 2004'
            ),
            array(
              'title' => 'Year Club: 2005', 
              'code' => 'YEAR2005',
              'image_url' => '/img/year-2005-club.png',
              'description' => 'First show was in 2005'
            ),
            array(
              'title' => 'Year Club: 2006', 
              'code' => 'YEAR2006',
              'image_url' => '/img/year-2006-club.png',
              'description' => 'First show was in 2006'
            ),
            array(
              'title' => 'Year Club: 2007', 
              'code' => 'YEAR2007',
              'image_url' => '/img/year-2007-club.png',
              'description' => 'First show was in 2007'
            ),
            array(
              'title' => 'Year Club: 2008', 
              'code' => 'YEAR2008',
              'image_url' => '/img/year-2008-club.png',
              'description' => 'First show was in 2008'
            ),
            array(
              'title' => 'Year Club: 2009', 
              'code' => 'YEAR2009',
              'image_url' => '/img/year-2009-club.png',
              'description' => 'First show was in 2009'
            ),
            array(
              'title' => 'Year Club: 2010', 
              'code' => 'YEAR2010',
              'image_url' => '/img/year-2010-club.png',
              'description' => 'First show was in 2010'
            ),
            array(
              'title' => 'Year Club: 2011', 
              'code' => 'YEAR2011',
              'image_url' => '/img/year-2011-club.png',
              'description' => 'First show was in 2011'
            ),
            array(
              'title' => 'Year Club: 2012', 
              'code' => 'YEAR2012',
              'image_url' => '/img/year-2012-club.png',
              'description' => 'First show was in 2012'
            ),
            array(
              'title' => 'Year Club: 2013', 
              'code' => 'YEAR2013',
              'image_url' => '/img/year-2013-club.png',
              'description' => 'First show was in 2013'
            ),
            array(
              'title' => 'Year Club: 2014', 
              'code' => 'YEAR2014',
              'image_url' => '/img/year-2014-club.png',
              'description' => 'First show was in 2014'
            ),
            array(
              'title' => 'Year Club: 2015', 
              'code' => 'YEAR2015',
              'image_url' => '/img/year-2015-club.png',
              'description' => 'First show was in 2015'
            ),
            array(
              'title' => 'Year Club: 2016', 
              'code' => 'YEAR2016',
              'image_url' => '/img/year-2016-club.png',
              'description' => 'First show was in 2016'
            ),
            array(
              'title' => 'Year Club: 2017', 
              'code' => 'YEAR2017',
              'image_url' => '/img/year-2017-club.png',
              'description' => 'First show was in 2017'
            ),
            array(
              'title' => 'Year Club: 2018', 
              'code' => 'YEAR2018',
              'image_url' => '/img/year-2018-club.png',
              'description' => 'First show was in 2018'
            ),
            array(
              'title' => 'Year Club: 2019', 
              'code' => 'YEAR2019',
              'image_url' => '/img/year-2019-club.png',
              'description' => 'First show was in 2019'
            ),
            array(
              'title' => 'Year Club: 2020', 
              'code' => 'YEAR2020',
              'image_url' => '/img/year-2020-club.png',
              'description' => 'First show was in 2020'
            ),
            array(
              'title' => 'Songs: 500', 
              'code' => 'SONGS500',
              'image_url' => '/img/songs-500.png',
              'description' => 'Seen between 500 and 999 song performances'
            ),
            array(
              'title' => 'Songs: 1000', 
              'code' => 'SONGS1000',
              'image_url' => '/img/songs-1000.png',
              'description' => 'Seen between 1000 and 1499 song performances'
            ),
            array(
              'title' => 'Songs: 1500', 
              'code' => 'SONGS1500',
              'image_url' => '/img/songs-1500.png',
              'description' => 'Seen between 1500 and 1999 song performances'
            ),
            array(
              'title' => 'Songs: 2000', 
              'code' => 'SONGS2000',
              'image_url' => '/img/songs-2000.png',
              'description' => 'Seen between 2000 and 2999 song performances'
            ),
            array(
              'title' => 'Songs: 3000', 
              'code' => 'SONGS3000',
              'image_url' => '/img/songs-3000.png',
              'description' => 'Seen between 3000 and 3999 song performances'
            ),
            array(
              'title' => 'Songs: 4000', 
              'code' => 'SONGS4000',
              'image_url' => '/img/songs-4000.png',
              'description' => 'Seen between 4000 and 4999 song performances'
            ),
            array(
              'title' => 'Songs: 5000', 
              'code' => 'SONGS5000',
              'image_url' => '/img/songs-5000.png',
              'description' => 'Has seen 5000+ song performances'
            ),
            array(
              'title' => 'Unique Songs: 100', 
              'code' => 'UNIQUE100',
              'image_url' => '/img/unique-100.png',
              'description' => 'Seen between 100 and 149 unique songs'
            ),
            array(
              'title' => 'Unique Songs: 150', 
              'code' => 'UNIQUE150',
              'image_url' => '/img/unique-150.png',
              'description' => 'Seen between 150 and 199 unique songs'
            ),
            array(
              'title' => 'Unique Songs: 200', 
              'code' => 'UNIQUE200',
              'image_url' => '/img/unique-200.png',
              'description' => 'Seen between 200 and 249 unique songs'
            ),
            array(
              'title' => 'Unique Songs: 250', 
              'code' => 'UNIQUE250',
              'image_url' => '/img/unique-250.png',
              'description' => 'Seen between 250 and 299 unique songs'
            ),
            array(
              'title' => 'Unique Songs: 300', 
              'code' => 'UNIQUE300',
              'image_url' => '/img/unique-300.png',
              'description' => 'Seen 300+ unique songs'
            ),
            array(
              'title' => 'Shows: 10', 
              'code' => 'SHOWS10',
              'image_url' => '/img/shows-10.png',
              'description' => 'Attended between 10 and 24 shows'
            ),
            array(
              'title' => 'Shows: 25', 
              'code' => 'SHOWS25',
              'image_url' => '/img/shows-25.png',
              'description' => 'Attended between 25 and 49 shows'
            ),
            array(
              'title' => 'Shows: 50', 
              'code' => 'SHOWS50',
              'image_url' => '/img/shows-50.png',
              'description' => 'Attended between 50 and 74 shows'
            ),
            array(
              'title' => 'Shows: 75', 
              'code' => 'SHOWS75',
              'image_url' => '/img/shows-75.png',
              'description' => 'Attended between 75 and 99 shows'
            ),
            array(
              'title' => 'Shows: 100', 
              'code' => 'SHOWS100',
              'image_url' => '/img/shows-100.png',
              'description' => 'Attended 100+ shows'
            ),

        ]);

        Schema::create('badge_user', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('user_id')->unsigned();
           $table->integer('badge_id')->unsigned();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('badge_id')->references('id')->on('badges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	Schema::drop('badge_user');
        Schema::drop('badges');        
    }
}