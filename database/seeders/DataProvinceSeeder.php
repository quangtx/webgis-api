<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;
use App\Models\Ward;
use App\Models\District;
class DataProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $local = config('local');
        $this->command->info('Start seeding data');

        $this->command->getOutput()->progressStart(count($local));
        foreach ($local as $key => $province) {
            $provin = Province::create([
                'name' => $province['Name']
            ]);
           foreach ($province['Districts'] as $key => $district) {
               $dist = District::create([
                   'name' => $district['Name'],
                   'province_id' => $provin->id
               ]);
               foreach ($district['Wards'] as $key => $ward) {
                   if(isset($ward['Name'])) {
                       Ward::create([
                           'name' => $ward['Name'],
                           'level' => $ward['Level'] ?? '',
                           'district_id' => $dist->id
                       ]);
                   }
               }
           }
           $this->command->getOutput()->progressAdvance();
        }

        $this->command->getOutput()->progressFinish();
    }
}
