<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('notifications')->insert([
      'title' => 'Hi, Rido Ananda challenges you to war! Do you accept?',
      'link' => '/',
      'type' => 'war',
    ]);
  }
}
