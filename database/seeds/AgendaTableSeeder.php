<?php

use Illuminate\Database\Seeder;
use App\Models\Agenda;

class AgendaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()    {   factory(App\Models\Agenda::class, 5)->create()->make();   }

}
