<?php

use Illuminate\Database\Seeder;
use App\Models\MedicalServiceGroup;

class MedicalServiceGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (MedicalServiceGroup::count() == 0) {
            $jsonFile = file_get_contents(base_path(). "/database/seeds/seeder_data/medical_service_groups.json");
            $jsonData = json_decode($jsonFile, true);

            foreach($jsonData as $dataRow) {
                MedicalServiceGroup::create([
                    'name' => $dataRow['name'],
                    'description' => $dataRow['description'],
                    'slug' => $dataRow['slug']
                ]);
            }
        }

    }
}
