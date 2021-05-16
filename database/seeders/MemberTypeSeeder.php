<?php

namespace Database\Seeders;
use App\MemberType;
use Illuminate\Database\Seeder;

class MemberTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['member_type' => 'Gud'],
            ['member_type' => 'Kollegie'],
        ];

        foreach($types as $type)
        {
            MemberType::create($type);
        }
    }
}
