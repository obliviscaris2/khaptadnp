<?php

namespace Database\Seeders;

use App\Models\Sitesetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SitesettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sitesetting::create([
            'gov_name' => 'Government of Nepal',
            'min_name' => 'Ministry of Forests and Environment',
            'dep_name' => 'Department of National Parks and Wildlife Conservation',
            'title' => 'Khaptad National Park',
            'phone' => '+9779858455566',
            'address' => '29.378415, 81.141669',
            'email' => 'khaptadnationalp@gmail.com',
            'fax' => '+9779858455566',
            'main_logo' => '',
            'side_logo' => '',
            'face_link' => 'https://www.facebook.com/Khaptad-National-Park-111962848892692/',
            'insta_link' => 'https://www.facebook.com/Khaptad-National-Park-111962848892692/',
            'twitter' => 'https://www.facebook.com/Khaptad-National-Park-111962848892692/',
            'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.727222602187!2d81.13948041491174!3d29.3782751821296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a3c7039e06e43d%3A0x2bf2b6c6e596a807!2sKhaptad%20National%20Park!5e0!3m2!1sen!2snp!4v1671689788804!5m2!1sen!2snp',
        
        ]);
    }
}
