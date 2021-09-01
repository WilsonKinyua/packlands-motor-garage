<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2021-08-23 20:08:02',
                'updated_at' => '2021-08-23 20:08:02',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2021-08-23 20:08:02',
                'updated_at' => '2021-08-23 20:08:02',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2021-08-23 20:08:02',
                'updated_at' => '2021-08-23 20:08:02',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
