<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Type;
use App\Models\User;
use Faker\Factory as Faker;
use Faker\Provider\ms_MY\Miscellaneous;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // insert data with faker :
      $faker = Faker::create('fr_FR');
      $faker2 = Faker::create('ms_MY');

      // insert categories :
      DB::table('categories')->insert([
          'name' => 'personne morale',
          "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
          "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
      ]);
      DB::table('categories')->insert([
          'name' => 'personne physique',
          "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
          "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
      ]);

      // insert types_assurance :
      DB::table('type_assurances')->insert([
          'name' => 'Véhicule',
          "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
          "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
      ]);
      DB::table('type_assurances')->insert([
          'name' => 'Bagage',
          "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
          "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
      ]);


      // insert types_trajets :
      DB::table('types')->insert([
          'name' => 'International',
          "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
          "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
      ]);
      DB::table('types')->insert([
          'name' => 'National',
          "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
          "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
      ]);
      DB::table('types')->insert([
          'name' => 'Régional',
          "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
          "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
      ]);
      DB::table('types')->insert([
          'name' => 'Local',
          "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
          "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
      ]);

        // insert véhicules :
       /*foreach (range(1,4) as $index) {
        DB::table('Vehicules')->insert([
          'brand' => 'audi Q7',
          'type' => 'Diesel',
          'matricule' => $faker2->jpjNumberPlate,
          'Modele' => $faker->year($max = 'now'),
          "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
          "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
      ]);

      }*/


      /*foreach (range(1,5) as $index) {
        DB::table('users')->insert([
          'name' => $faker->userName,
          'email' => $faker->unique()->email,
          'password' => bcrypt('secretsecret'),
      ]);

      }*/

      /*$categories = Category::all()->pluck('id')->toArray();
      $users = User::all()->pluck('id')->toArray();*/


      /*foreach (range(1,15) as $index) {
        DB::table('members')->insert([
          'category_id' => $faker->randomElement($categories),
          'user_id' => $faker->randomElement($users),
          'firstname' => $faker->firstName,
          'lastname' => $faker->lastName,
          'gender' => $faker->randomElement(['homme', 'femme']),
          'phoneNumber' => $faker->mobileNumber,
          'CIN' => $faker->unique()->swiftBicNumber,
          'address' => $faker->address,
          'city' => $faker->city,
          'mail' => $faker->email,
      ]);

      }*/




    }
}
