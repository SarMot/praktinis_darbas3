<?php

use App\AttendanceGroup;
use Illuminate\Database\Seeder;

class AttendanceGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AttendanceGroup::class, 20)->create();
    }
}
