<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'Khaptad National Park',
            'subtitle' => '',
            'image' => '',
            'description' => 'Khaptad National Park is a protected area in the Far-Western Region, Nepal. Stretching over the four districts, it covers an area of 225 km2 (87 sq mi) and ranges in elevation from 1,400 m (4,600 ft) to 3,300 m (10,800 ft).',
            'content'=> 'Type: National Park

            Established: 1984
            
            Area (km2): 225.00
            
            Buffer Zone (km2): 216.00
            
            Description:
            
            Khaptad National Park is located in the Far-western region of Nepal. The park was gazetted in 1984 covering an area of 225 sq. km. The area of buffer zone is 216 sq.km. The park is the only mid-mountain national park in western Nepal, representing a unique and important ecosystem. The late Khaptad Swami moved to the area in 1940s to meditate and worship. He spent about 50 years as a hermit and became a renowned spiritual saint.
            
            Features: 
            
            The park offers a challenging yet rewarding experience unlike any other protected area in Nepal.. The Khaptad Baba Ashram is located near the park headquarters. The Tribeni confluence made by three rivers, and a Shiva temple are on the way to Park Headquarters. Ganga Dashahara is celebrated here during Jestha Purnima and many pilgrims visit the park during the festival. Sahashra Linga is another religious site situated at 3,200 m above sea level which is the highest point in the park. Other religious places include Ganesh temple, Nagdhunga and Kedardhunga. These areas are considered as places for meditation and tranquillity and should not be disturbed. Tobacco products, alcohol, and sacrificing of animals are prohibited in these areas. There is a small museum and a view tower at the park headquarters. To the north one can see the Saipal Himalayan Ranges- In the other direction the vast green mid-hills of Nepal can be seen clearly. There are 22 open patches of Patans (pastureland) mix together with the forests inside park. The local people graze their livestock in the Patans during the summer season. In the north-eastern part of the park, there is a lake called Khaptad Daha. During the full moon of August - September a festival is called Purnima celebrated here.',
        ]);
    }
}
