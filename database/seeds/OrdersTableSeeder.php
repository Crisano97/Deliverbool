<?php

use App\Models\Dish;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $restaurants = Restaurant::all();
        foreach ($restaurants as $restaurant) {


            for ($i = 0; $i < 5; $i++) {
                // CREO GRAZIE HAI FAKER LA STRUTTURA DELL'0RDINE
                $newOrder = new Order();
                $newOrder->restaurant_id = $restaurant->id;
                $newOrder->order_code = $faker->numerify('user-####');
                $newOrder->total_price = 0;
                $newOrder->customer_name = $faker->name();
                $newOrder->customer_address =  $faker->streetAddress();
                $newOrder->customer_phone_number = $faker->phoneNumber();
                $newOrder->order_date = $faker->dateTimeThisMonth();
                $newOrder->is_payed = $faker->boolean();
                $newOrder->save();

                // INDICO QUANTI ELIMENTI VOGLIO
                $numRows = random_int(1, 5);
                // ASSOCCIO I PIATTI AL RISTORANTE
                $dishes = Dish::where('restaurant_id', $restaurant->id)->get()->toArray();
                $dishesUsed = [];
                // CICLO I PIATTI PER AGGIUNGER ALL'ARRAY
                for ($j = 0; $j < $numRows; $j++) {
                    $index = array_rand($dishes);
                    if (!in_array($index, $dishesUsed)) {
                        array_push($dishesUsed, $index);
                        //QUANTITA' SINGOLO PIATTO
                        $num = random_int(1, 3);
                        $newOrder->dishes()->attach(
                            $dishes[$index]['id'],
                            ['amount' => $num]
                        );
                    }
                }


                //FUNZIONE PER IL PREZZO
                $total = 0;
                $orderDetail = $newOrder->dishes->toArray();
                foreach ($orderDetail as $detail) {
                    $total += $detail['price'] * $detail['pivot']['amount'];
                }

                $newOrder->total_price = $total;
                $newOrder->save();
            }
        }
    }
}
