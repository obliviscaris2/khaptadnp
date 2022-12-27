<?php

namespace Database\Seeders;

use App\Models\Urlink;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UrlinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
            [
            'title'=>'Department Of National Park & Wildlife Conservation',
            'url'=>'https://dnpwc.gov.np/en/'
            ],
            [
                'title'=> 'Department of Environment',
                'url' =>  'https://doenv.gov.np/'
            ],
            [
                'title' => 'Ministry of Forests & Environment',
                'url' => 'http://www.mofe.gov.np/'
            ],
            [
                'title' => 'Forest Research & Training Center',
                'url' => 'https://frtc.gov.np/home'
            ]
        ];
        Urlink::insert($data);

    }
}
