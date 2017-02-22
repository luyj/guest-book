<?php

use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<5;$i++)
        {\App\Message::create([
         'body'=>'Message'.$i,
         'user_id'=>1,
          'location'=>'dd',]
         /* 'location'=>'io',*/);}
    }
}
