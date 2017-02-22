<?php

use Illuminate\Database\Seeder;

class IpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<5;$i+=1){
\App\Ip::create([
   'ip' => '1.0.0.1024',
   'location' => 'nn',]);
    }}
}
