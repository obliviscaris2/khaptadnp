@extends('layouts.home-master')

@section('content')
    <div class="introduction-contents-container">
        <h3 class="introduction-title">Protected Area Information</h3>

        <div class="intro-mapcontainer">
            <a href="{{ asset('khaptadnpassets/landcover.webp') }}" target="_blank" rel="noopener noreferrer"><img class="map-image" src="{{ asset('khaptadnpassets/landcover.webp') }}" alt="khaptad-landcover-area"></a>
        </div>
        
        <h5 class="to-small-title"><span class="green-color">Name:</span> Khaptad National Park</h5>
        <h5 class="to-small-title"><span class="green-color">Type:</span> National Park</h5>
        <h5 class="to-small-title"><span class="green-color">Established:</span> 1984</h5>
        <h5 class="to-small-title"><span class="green-color">Area (km2):</span> 225.00</h5>
        <h5 class="to-small-title"><span class="green-color">Buffer Zone (km2):</span> 216.00</h5>
        <h5 class="to-small-title"><span class="green-color">Description:</span></h5>
        <p class="to-small">

            Khaptad National Park is located in the Far-western region of Nepal. The park was gazetted in 1984 covering an area of 225 sq. km. The area of buffer zone is 216 sq.km. The park is the only mid-mountain national park in western Nepal, representing a unique and important ecosystem. The late Khaptad Swami moved to the area in 1940's to meditate and worship. He spent about 50 years as a hermit and became a renowned spiritual saint.
        </p>
        <h5><span class="green-color">Features:</span></h5>
        <p class="to-small">
            The park offers a challenging yet rewarding experience unlike any other protected area in Nepal.. The Khaptad Baba Ashram is located near the park headquarters. The Tribeni confluence made by three rivers, and a Shiva temple are on the way to Park Headquarters. Ganga Dashahara is celebrated here during Jestha Purnima and many pilgrims visit the park during the festival. Sahashra Linga is another religious site situated at 3,200 m above sea level which is the highest point in the park. Other religious places include Ganesh temple, Nagdhunga and Kedardhunga. These areas are considered as places for meditation and tranquillity and should not be disturbed. Tobacco products, alcohol, and sacrificing of animals are prohibited in these areas. There is a small museum and a view tower at the park headquarters. To the north one can see the Saipal Himalayan Ranges- In the other direction the vast green mid-hills of Nepal can be seen clearly. There are 22 open patches of Patans (pastureland) mix together with the forests inside park. The local people graze their livestock in the Patans during the summer season. In the north-eastern part of the park, there is a lake called Khaptad Daha. During the full moon of August - September a festival is called Purnima celebrated here.
        </p>
        <h5><span class="green-color">Climate:</span></h5> 
        <p class="to-small">
            The seasons of spring (March-May) and autumn (October-November) are the best times to visit the park. The temperature ranges from 10°c to 20°c offering pleasant trekking weather. The monsoon begins in June and last until September during this time paths become muddy and slippery. From December to February winter brings snow and chilling winds.
        </p>
        <h5><span class="green-color">Flora & Fauna:</span></h5>
        <p class="to-small">
            The flora of the park can be divided into three basic vegetation zone's-subtropical, and temperate. In the lower altitudes (1000 - 2000 m), subtropical vegetation dominates the landscape; Forest mainly consists of Montane Sal, Pines and Alder species. From 1800 - 3000 m temperate type dominates the landscape. The forest there are comprised of lower temperate mixed broad-leaved species (Lindera nacusua, Cmnamomum tamca. etc), temperate mixed evergreen species (Spruce, fir, hemlock, oak. etc), and upper temperate broad-leaved species (Aesculus indica, maple, etc.) Fir oak, birch, and rhododendron arc the major species found there. Intertwined into the landscape of the Khaptad plateau are the Patans (pastureland) with beautiful flowers (about 135 species) that bloom in the summer and late spring. The grassland flowers consist of primulas, buttercups, and wild berries. A wide variety of medicinal herbs (about 224 species) are occurr inside the park The park is reported to have 266 birds species with migratory birds joining the residential ones. It supports about 175 breeding birds’ species. Some of the common ones are the Impeyan, pheasant (Dhanphe), Nepal's national bird, and many types of partridges, flycatchers, bulbuls, cuckoos, and eagles. A wide variety of butterflies, moths, and insects are also forming a part of the Khaptad ecosystem. The park provides habitat for some 20 different, species of mamals. Common ones include barking deer, wild boar, goral, Himalayan black bear, Yellow-throated Marten, and Rhesus and Langur monkey. Other includes leopard, wild dogs, jackal and musk deer.
        </p>
        <h5><span class="green-color">Facilities:</span></h5> 
        <p class="to-small">
            Currently there are no lodges or hotels in the park. Trekkers must be self- sufficient in tents, food, fuel and all other supplies. Make sure to bring a first-aid kit because there are no medical facilities available within the park.
        </p>
        <h5><span class="green-color">How to get there:</span></h5> 
        <p class="to-small">

            The best way to reach the park area is to fly from Nepalgunj to Dipayal and the local buses are available for Silgadhi, Doti. From Silgadhi Bazzar one has to hike 6 hours to the park entrance and another 7-8 hours to the Park Headquarters. Other options are-flight to Dipayal followed by a three-day walk, or flight to Achham or Bajhang followed by a two-day walk, or flight to Bajura followed by a four-day walk. However, Dipayal and Accham airport are rarely open.
        </p>

        
        <div id="googleMap" style="width:100%;height:400px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124879.66831699565!2d81.07899856872054!3d29.3783955973332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a3c7039e06e43d%3A0x2bf2b6c6e596a807!2sKhaptad%20National%20Park!5e0!3m2!1sen!2snp!4v1666250713917!5m2!1sen!2snp" width="100%" height="400" style="border:4" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>




@endsection