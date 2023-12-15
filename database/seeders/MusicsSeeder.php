<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MusicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('musics')->insert([
            [
                'music_name' => "Cinta Ini Membunuhku",
                'imageURL' => 'https://images.genius.com/232ca3383d33d8a0f327d4b915ae2f79.1000x1000x1.jpg',
                'description' => "Lagu Cinta Ini Membunuhku adalah sebuah karya musik yang sangat mengena dari band populer D'Masiv. Dirilis pada tahun 2008, lagu ini telah mengukir jejak yang mendalam dalam dunia musik Indonesia. Dengan lirik yang puitis dan mendalam, lagu ini menggambarkan perjalanan emosional seseorang yang terjebak dalam perasaan cinta yang begitu kuat hingga terasa menyakitkan. Melodi yang indah dan terasa menyayat hati, cocok dengan lirik yang mengungkapkan rasa sakit dan kebingungan akan cinta yang begitu membingungkan. Lagu Cinta Ini Membunuhku bukan hanya lagu tentang cinta yang kuat, tetapi juga tentang konflik batin yang muncul ketika seseorang terjebak dalam hubungan yang penuh liku-liku. D'Masiv berhasil menyampaikan kompleksitas emosi dalam hubungan dengan penghayatan yang mendalam melalui lagu ini, menjadikannya salah satu lagu yang meraih tempat istimewa di hati pendengar musik Indonesia.",
                'detail' => "Cinta Ini Membunuhku adalah lagu dari grup musik Indonesia, D'MASIV. Lagu ini dirilis pada tahun 2008 dan merupakan salah satu lagu dari album pertama D'Masiv yang berjudul Perubahan. Lagu ini sempat viral dan menjadi salah satu lagu terpopuler D'MASIV.",
                'publication_date' => date('2010-10-10'),
                'creators_id' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'music_name' => 'Sempurna',
                'imageURL' => 'https://i.ytimg.com/vi/PDoow4At4SY/maxresdefault.jpg',
                'description' => 'Sempurna adalah sebuah lagu yang menjadi salah satu ikon dari era 2000-an yang dipopulerkan oleh band rock Indonesia, Andra and The Backbone. Dengan lirik yang menggambarkan perasaan cinta yang tulus dan melodi yang kuat, lagu ini berhasil meraih popularitas yang besar di kalangan pendengar musik Indonesia. Dalam lagu ini, Andra and The Backbone berhasil menggambarkan dinamika emosional dalam hubungan, dengan sentuhan musik rock yang khas dari band ini.',
                'detail' => 'Lagu "Sempurna" dirilis pada 11 November 2007. Lagu ini merupakan singel dari album eponim Andra and the BackBone. Lagu ini bergenre pop rock dan cocok didengarkan saat suasana hati sedang galau',
                'publication_date' => date('2007-11-11'),
                'creators_id' => '2',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'music_name' => 'Aku Lelakimu',
                'imageURL' => 'https://s2.dmcdn.net/v/BuSJ91QDqZ-Gv75iB/x1080',
                'description' => 'Aku Lelakimu adalah sebuah lagu yang menggambarkan perasaan mencintai seseorang dengan tulus tanpa batas. Dinyanyikan oleh Virzha, penyanyi Indonesia yang memiliki karakter vokal yang kuat, lagu ini memadukan melodi yang menghanyutkan dengan lirik yang menyentuh hati. Rilis pada tahun 2014, lagu ini segera meraih popularitas besar dan menjadi salah satu lagu cinta favorit pendengar musik Indonesia.',
                'detail' => 'Aku Lelakimu adalah lagu dari Virzha, penyanyi jebolan Indonesia Idol musim kedelapan. Lagu ini dirilis pada tahun 2014 dan menjadi lagu utama dari album Satu yang dirilis pada Februari 2015. Lagu ini merupakan lagu recycle ciptaan Anang Hermansyah yang pernah dipopulerkan oleh Anang',
                'publication_date' => date('2015-02-27'),
                'creators_id' => '3',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'music_name' => 'Jangan Menyerah',
                'imageURL' => 'https://assets.audiomack.com/haziqismail39/b773122684c0e03c1f028a62f19f9dfea8c0b880a529440cb42d32157d69399c.jpeg?width=1000&height=1000&max=true',
                'description' => "Jangan Menyerah merupakan salah satu lagu yang ikonik dari D'Masiv. Dirilis pada tahun 2008, lagu ini menghadirkan pesan semangat dan optimisme untuk tidak menyerah dalam menghadapi segala rintangan hidup. Dengan lirik yang menyentuh dan melodi yang easy listening, lagu ini berhasil menyentuh hati banyak pendengar dan menjadi salah satu lagu yang dikenang dari repertoar D'Masiv.",
                'detail' => "Lagu Jangan Menyerah dari grup band D'Masiv dirilis pada 19 Juli 2009. Lagu ini termasuk dalam album Perjalanan yang dirilis pada 16 Desember 2009.",
                'publication_date' => date('2009-12-10'),
                'creators_id' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'music_name' => 'Rindu 1/2 Mati',
                'imageURL' => 'https://images.genius.com/ced879ffed403809025d1221b74dadf5.600x600x1.jpg',
                'description' => "Rindu 1/2 Mati adalah salah satu lagu lain yang populer dari D'Masiv. Dirilis pada tahun 2010, lagu ini mengisahkan tentang kerinduan yang mendalam akan seseorang yang telah pergi. Dengan lirik yang menyentuh dan melodi yang mengena, lagu ini berhasil meraih popularitas di kalangan penggemar musik Indonesia, menunjukkan kemampuan band ini dalam menyuguhkan lagu-lagu yang mengena di hati pendengar.",
                'detail' => "Lagu Rindu 1/2 Mati dirilis pada 10 Desember 2009. Lagu ini dibawakan oleh D'Masiv bersama Kevin Aprilio. Lagu ini menjadi populer karena sempat menjadi OST Kejora dan Bintang",
                'publication_date' => date('2009-12-10'),
                'creators_id' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'music_name' => 'Mungkin Nanti',
                'imageURL' => 'https://i1.sndcdn.com/artworks-wgmvceCFILYOyyqO-PwHskw-t500x500.jpg',
                'description' => 'Mungkin Nanti adalah salah satu lagu hits dari band populer Indonesia, Peterpan. Dirilis pada tahun 2004, lagu ini menggambarkan perasaan seseorang yang merindukan kehadiran seseorang yang telah pergi. Dengan lirik yang puitis dan melodi yang merdu, lagu ini menjadi salah satu lagu yang mengakar kuat di hati pendengar, membawa nostalgia akan masa lalu dan perasaan rindu yang mendalam.
                Setiap lagu memiliki daya tariknya sendiri dan berhasil menciptakan jejak dalam sejarah musik Indonesia, baik melalui lirik yang menyentuh, melodi yang menghanyutkan, maupun pesan yang disampaikan kepada pendengarnya.',
                'detail' => 'Mungkin Nanti adalah lagu dari grup band Peterpan yang dirilis pada tahun 2004. Lagu ini termasuk salah satu karya Peterpan yang sangat populer. Lirik dan chordnya cocok untuk yang ingin bergalau-galauan',
                'publication_date' => date('2012-07-18'),
                'creators_id' => '4',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ]);
    }
}
