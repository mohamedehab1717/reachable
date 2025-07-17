<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalSeeder extends Seeder
{
    public function run()
    {
        $hospitals = [
            [
                'title' => 'Nasaaem Hospital',
                'des' => 'Private Hospital',
                'img' => 'nasaaem1.jpg',
            ],
            [
                'title' => 'Shifa Hospital',
                'des' => 'Private Hospital',
                'img' => 'shifaa.jpg',
            ],
            [
                'title' => 'Saudi German Hospital',
                'des' => 'Private Hospital',
                'img' => 'saudi.jpg',
            ],
            [
                'title' => 'Cleopatra Clinics',
                'des' => 'Clinic',
                'img' => 'cleo1.jpg',
            ],
            [
                'title' => 'Joy Clinic',
                'des' => 'Dental Clinics',
                'img' => 'joy.jpg',
            ],
            [
                'title' => 'WHAM Clinics',
                'des' => 'Skin Care Clinic',
                'img' => 'wham3.jpg',
            ],
        ];

        foreach ($hospitals as $hospital) {
            Hospital::create($hospital);
        }
    }
}
