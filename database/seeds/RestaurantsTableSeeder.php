<?php

use App\Models\Restaurant;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::all();

        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 1;
        $newRestaurant->name = 'Antico Vinaio';
        $newRestaurant->p_iva = 34556789190;
        $newRestaurant->image = 'https://s3-eu-west-1.amazonaws.com/aziende-italia/profile/321430.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = 'Via dei Neri 65, Firenze Italia';
        $newRestaurant->save();

        // RISTORANTE 2
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'FirnZen';
        $newRestaurant->p_iva = 34397789190;
        $newRestaurant->image = 'https://media-cdn.tripadvisor.com/media/photo-s/21/e6/37/e8/firenzen.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = 'Via Guelfa 3, Firenze Italia';
        $newRestaurant->save();

        // RISTORANTE 6
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 3;
        $newRestaurant->name = "Mc Donald's";
        $newRestaurant->p_iva = 59889778911;
        $newRestaurant->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJFFCkg4bsy16TODkHJOD9FSmEoEPCO1sXSw&usqp=CAU';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = 'Viale Pietro Nenni 16, Firenze Italia';
        $newRestaurant->save();

        // RISTORANTE 11
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 4;
        $newRestaurant->name = "Burger King";
        $newRestaurant->p_iva = 59885778911;
        $newRestaurant->image = 'https://mms.businesswire.com/media/20220901005610/it/1559602/23/BK_LOGO_PRIMARY_%C2%AE_ST_RGB%5B1%5D.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = 'piazza della stazione, Firenze Italia';
        $newRestaurant->save();

        // RISTORANTE 12
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 5;
        $newRestaurant->name = "Braceria All'11";
        $newRestaurant->p_iva = 23889778913;
        $newRestaurant->image = 'https://media-cdn.tripadvisor.com/media/photo-s/23/03/aa/3d/location.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = "Via Sant'Agostino 11, Firenze Italia";
        $newRestaurant->save();
    }
}
