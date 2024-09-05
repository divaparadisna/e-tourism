<?php
include(__DIR__.'/app/functions.php');
$metaData = [
  'title' => config('app.name')
];
$navbar_active = 'paket-wisata';
include(__DIR__.'/template_parts/frontend/open.php');
include(__DIR__.'/template_parts/frontend/navbar-std.php');
?>

<header class="header-std-feat-page">
  <img src="<?= base_url(); ?>/public/img/paket-wisata/wisata.jpg" alt="">
  <div class="abs-content">
    <h1 class="title">Tour Packages</h1>
  </div>
</header>

<section class="grid-package pt-3 pb-5">
  <div class="container py-3">
    <div class="row row-item mt-5">
      <div class="col-md-12">
        <ul class="package-list">
          <?php
          $packages = get_packages();

          foreach ($packages as $package) {
            ?>
            <li>
              <h3><?= $package['name']; ?></h3>
              <p><?= substr($package['description'], 0, strpos($package['description'], "\n")); ?></p>
              <ul>
                <?= $package['description']; ?>
              </ul>
              <p>Price: <?= $package['price']; ?></p>
              <a href="https://wa.me/+6281285717932?text=Booking%20Now%20<?= $package['id']; ?>" class="btn btn-primary">BOOKING</a>
            </li>
            <?php
          }
          ?>
        </ul>
        <style>
          .grid-package {
            background-color: #fff;
            padding: 20px;
          }
          .package-list {
            list-style: none;
            padding: 0;
            margin: 0;
          }
          .package-list li {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }
          .package-list li h3 {
            font-weight: bold;
            margin-top: 0;
          }
          .package-list li p {
            margin-bottom: 10px;
          }
          .package-list li a {
            background-color: #337ab7;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
          }
          .package-list li a:hover {
            background-color: #23527c;
          }
        </style>
      </div>
    </div>
  </div>
</section>

<?php
function get_packages() {
  return array(
    array(
      'id' => 1,
      'name' => '1 Day Tour Package',
      'description' => '
        Day 1: Quick Adventure and Authentic Cuisine
        <br></br>
        09:00am - 12:00pm : Ayung River Rafting
        <ul>
          <li>Enjoy an exciting rafting adventure with experienced instructors on the Ayung River.</li>
          <li>Location : Jl. Begawan Giri, Melinggih.</li>
        </ul>
        12:00 - 13:00: Lunch at Green Gadjah Ubud
        <ul>
          <li>Have lunch with a view of the waterfall and a calming natural atmosphere.</li>
          <li>Location: Jalan Agung Mas Jl. Raya Br Sema No.8, Melinggih.</li>
        </ul>
        13:30 - 16:00: Umah Padi Cooking Class
        <ul>
          <li>Take a Balinese cooking class and enjoy your own creations with a beautiful rice field backdrop.</li>
          <li>Location: Br. Payangandesa, Melinggih.</li>
        </ul>
      ',
      'price' => 'Ask For Price'
    ),
    array(
      'id' => 2,
      'name' => '2 Days Tour Package',
      'description' => '
        Day 1: Nature and Culture Adventure
        <br></br>
        09:00 - 12:00: Ayung River Rafting
        <ul>
          <li>Start your journey with a rafting adventure on the Ayung River.</li>
        </ul>
        12:00 - 13:00: Lunch at Green Gadjah Ubud
        <ul>
          <li>Have lunch with local dishes while enjoying the natural atmosphere.</li>
        </ul>
        13:30 - 16:00: Umah Padi Cooking Class
        <ul>
          <li>Learn how to cook Balinese dishes at Umah Padi with fresh local ingredients.</li>
        </ul>
        16:30 - 17:30: Jogging Track in Melinggih Village
        <ul>
          <li>End your day with a leisurely jog or walk on the jogging track surrounded by rice field views.</li>
        </ul>
        18:00 - Evening: Check-in at The Abhinaya Villa
        <ul>
          <li>Enjoy a peaceful evening at The Abhinaya Villa with stunning rice field views.</li>
        </ul>

        <br></br>
        Day 2: Trekking and Relaxation
        <br></br>
        07:00 - 09:00: Trekking in Rice Terrace of Melinggih Village
        <ul>
          <li>Morning trekking in rice fields, accompanied by a local guide for an authentic experience.</li>
        </ul>
        09:30 - 11:00: Breakfast at The Abhinaya Villa
        <ul>
          <li>Breakfast at the villa with a rural atmosphere.</li>
        </ul>
        11:00 - 13:00: Cycling Tour around Melinggih Village
        <ul>
          <li>Take a leisurely bike ride around the village, enjoying the natural atmosphere and fresh air.</li>
        </ul>
        13:00 - 14:00: Check-out from The Abhinaya Villa and return home.
        <br></br>
      ',
      'price' => 'Ask For Price'
    ),
    array(
      'id' => 3,
      'name' => '3 Days Tour Package',
      'description' => '
        Day 1: Adventure and Culinary
        <br></br>
        09:00 - 12:00: Rafting on Ayung River
        <ul>
          <li>Exciting and thrilling rafting activity on Ayung River.</li>
        </ul>
        12:00 - 13:00: Lunch at Green Gadjah Ubud
        <ul>
          <li>Have lunch with a beautiful view of the waterfall.</li>
        </ul>
        13:30 - 16:00: Umah Padi Cooking Class
        <ul>
          <li>Take a cooking class with an authentic Balinese culinary experience.</li>
        </ul>
        16:30 - 17:30: Jogging Track in Melinggih Village
        <ul>
          <li>Enjoy the jogging track surrounded by rice fields.</li>
        </ul>
        18:00 - Night: Check-in at Soodama Villas
        <ul>
          <li>Stay at Soodama Villas which offers a luxurious and serene atmosphere.</li>
        </ul>

        <br></br>
        Day 2: Nature and Relaxation
        <br></br>
        07:00 - 09:00: Trekking at Melinggih Village Rice Terrace
        <ul>
          <li>Morning trekking, enjoying the view of the green and vast rice fields.</li>
        </ul>
        09:30 - 11:00: Breakfast at Soodama Villas
        <ul>
          <li>Breakfast at the villa with a peaceful natural atmosphere.</li>
        </ul>
        11:00 - 13:00: Cycling Tour and Village Exploration
        <ul>
          <li>Cycling around the village, enjoying the beauty of nature and local culture.</li>
        </ul>
        13:30 - 15:00: Rest at Soodama Villas
        <ul>
          <li>Free time to relax at the villa.</li>
        </ul>
        15:30 - 17:30: Visit Green Gadjah Ubud
        <ul>
          <li>Enjoy the view of the waterfall and the cool natural atmosphere.</li>
        </ul>
        18:00 - Evening: Dinner and rest at Soodama Villas.
        <br></br>

        <br></br>
        Day 3: Last Activity and Return
        <br></br>
        08:00 - 09:30: Breakfast at Soodama Villas
        <ul>
          <li>Enjoy your last breakfast at Soodama Villas, then relax and enjoy the private pool facilities at the villa. Take advantage of the serene atmosphere to relax before the next activity.</li>
        </ul>
        10:00 - 12:00: Relaxation and Check-out from Soodama Villas
        <ul>
          <li>Continue relaxing at Soodama Villas until check-out time. Enjoy the surrounding scenery or go for a swim to relieve fatigue before leaving the villa.</li>
        </ul>
        12:30 - 14:00: Lunch at Green Gadjah Ubud
        <ul>
          <li>Have lunch at Green Gadjah Ubud, surrounded by calming natural scenery with a waterfall as a backdrop, creating a relaxing dining experience.</li>
        </ul>
        14:30 - 16:00: SPL Trans Tour Guide for Souvenir Shopping and Final Exploration
        <ul>
          <li>End the trip by shopping for souvenirs at the local market with an SPL Trans tour guide. Discover local products typical of Melinggih Village and a final exploration to bring home memories of this trip.</li>
        </ul>
      ',
      'price' => 'Ask For Price'
    ),
    array(
      'id' => 4,
      'name' => '1 Day Family Tour Package',
      'description' => '
        08:00 - 09:00: Breakfast and Introduction at Soodama Villas
        <ul>
          <li>Start the day with breakfast with your family at Soodama Villas, followed by a brief introduction about today s itinerary </li>
        </ul>
        09:30 - 11:00: Visit Green Gadjah Ubud
        <ul>
          <li>Visit Green Gadjah Ubud to enjoy the peaceful natural atmosphere and see the waterfall from a safe distance. There is a safe area for children to play while enjoying the scenery.</li>
        </ul>
        11:30 - 13:00: Lunch at Green Gadjah Ubud
        <ul>
          <li>Enjoy lunch at Green Gadjah Ubud which offers a family-friendly menu amidst natural scenery.</li>
        </ul>
        13:30 - 15:00: Light Trekking in the Rice Fields of Melinggih Village
        <ul>
          <li>Join a light trekking that is safe for children, passing through flat and easily accessible rice fields. A local guide will accompany and maintain safety during the activity.</li>
        </ul>
        15:30 - 16:30: Back to Soodama Villas for Relaxation and Swimming
        <ul>
          <li>End the day by relaxing at Soodama Villas. Children can play and swim in the private pool under parental supervision.</li>
        </ul>
      ',
      'price' => 'Ask For Price'
    ),
    array(
      'id' => 5,
      'name' => '2 Days Family Tour Package',
      'description' => '
        Day 1
        <br></br>
        08:00 - 09:00: Breakfast at Soodama Villas
        <ul>
          <li>Start the day with breakfast at the villa.</li>
        </ul>
        09:30 - 11:00: Light Trekking in Melinggih Village Rice Fields
        <ul>
          <li>A light trekking that is safe for children, passing through the rice fields with a local guide.</li>
        </ul>
        11:30 - 13:00: Lunch at Green Gadjah Ubud
        <ul>
          <li>Lunch with family at Green Gadjah Ubud, enjoying the natural atmosphere and a menu that is suitable for children.</li>
        </ul>
        13:30 - 15:00: Jogging Track or Leisurely Walk in Melinggih Village
        <ul>
          <li>A leisurely walk on the safe and quiet Melinggih Village jogging track, suitable for children and families to enjoy the view of the rice fields.</li>
        </ul>
        15:30 - 17:00: Check-in at Soodama Villas and Have Fun at the Swimming Pool
        <ul>
          <li>Check-in at Soodama Villas, enjoy free time to swim or play in the private swimming pool.</li>
        </ul>

        <br></br>
        Day 2
        <br></br>
        08:00 - 09:30: Breakfast at Soodama Villas
        <ul>
          <li>Enjoy breakfast at the villa while enjoying the surrounding scenery.</li>
        </ul>
        10:00 - 12:00: Umah Padi Cooking Class for Families
        <ul>
          <li>Take a cooking class designed for families. Children can learn to make simple dishes with their parents, under the supervision of an experienced chef.</li>
        </ul>
        12:30 - 14:00: Homemade Lunch
        <ul>
          <li>Enjoy the results of cooking with your family, enjoying a special lunch moment.</li>
        </ul>
        14:30 - 16:00: Exploration and Shopping for Souvenirs in Melinggih Village
        <ul>
          <li>End the trip by shopping for souvenirs at the local market with the SPL Trans tour guide, adjusting the route to be safe and comfortable for children.</li>
        </ul>
      ',
      'price' => 'Ask For Price'
    )
  );
}
?>

<?php
  include(__DIR__.'/template_parts/frontend/footer.php');
  include(__DIR__.'/template_parts/frontend/close.php');
?>