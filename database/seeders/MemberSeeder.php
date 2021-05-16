<?php

namespace Database\Seeders;
use App\Member;

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['member_type' => 'Gud', 'name' => 'Sigmar'],
            ['member_type' => 'Gud', 'name' => 'Ulric'],
            ['member_type' => 'Gud', 'name' => 'Ranald'],
            ['member_type' => 'Gud', 'name' => 'Morr'],
            ['member_type' => 'Gud', 'name' => 'Myrmidia'],
            ['member_type' => 'Gud', 'name' => 'Shallya'],
            ['member_type' => 'Gud', 'name' => 'Taal/Rhya'],
            ['member_type' => 'Gud', 'name' => 'Verena'],
            ['member_type' => 'Kollegie', 'name' => 'Ildens Orden'],
            ['member_type' => 'Kollegie', 'name' => 'Himmelkollegiet'],
            ['member_type' => 'Kollegie', 'name' => 'Ametyst Ordenen'],
            ['member_type' => 'Kollegie', 'name' => 'Den Grå Orden'],
            ['member_type' => 'Kollegie', 'name' => 'Livets Orden'],
            ['member_type' => 'Kollegie', 'name' => 'Ravets Broderskab'],
            ['member_type' => 'Kollegie', 'name' => 'Lysets Orden'],
            ['member_type' => 'Kollegie', 'name' => 'Den Gyldne Orden'],

        ];

        foreach($types as $type)
        {
            Member::create($type);
        }
    }
}
