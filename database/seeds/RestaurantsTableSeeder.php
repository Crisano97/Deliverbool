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
        $newRestaurant->p_iva = '34556789190';
        $newRestaurant->image = 'https://s3-eu-west-1.amazonaws.com/aziende-italia/profile/321430.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = 'Via dei Neri 65, Firenze Italia';
        $newRestaurant->save();

        // RISTORANTE 2
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'FirnZen';
        $newRestaurant->p_iva = '34397789190';
        $newRestaurant->image = 'https://media-cdn.tripadvisor.com/media/photo-s/21/e6/37/e8/firenzen.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = 'Via Guelfa 3, Firenze Italia';
        $newRestaurant->save();

        // RISTORANTE 6
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 3;
        $newRestaurant->name = "Mc Donald's";
        $newRestaurant->p_iva = '59889778911';
        $newRestaurant->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJFFCkg4bsy16TODkHJOD9FSmEoEPCO1sXSw&usqp=CAU';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = 'Viale Pietro Nenni 16, Firenze Italia';
        $newRestaurant->save();

        // RISTORANTE 11
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 4;
        $newRestaurant->name = "Burger King";
        $newRestaurant->p_iva = '59885778911';
        $newRestaurant->image = 'https://mms.businesswire.com/media/20220901005610/it/1559602/23/BK_LOGO_PRIMARY_%C2%AE_ST_RGB%5B1%5D.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = 'Piazza della stazione, Firenze Italia';
        $newRestaurant->save();

        // RISTORANTE 12
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 5;
        $newRestaurant->name = "Braceria All'11";
        $newRestaurant->p_iva = '23889778913';
        $newRestaurant->image = 'https://media-cdn.tripadvisor.com/media/photo-s/23/03/aa/3d/location.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = "Via Sant'Agostino 11, Firenze Italia";
        $newRestaurant->save();

        // RISTORANTE 13
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 6;
        $newRestaurant->name = "IL CONVIVIO TROIANI - DAL 1990";
        $newRestaurant->p_iva = '23889778945';
        $newRestaurant->image = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/39e137f9-d853-4456-b9f8-9ee39a5b96ad/f4e336c6-c338-4d5b-98f8-64495f8b0471.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = "Via Sant'Agostino 16, Firenze Italia";
        $newRestaurant->save();

        // RISTORANTE 14
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 7;
        $newRestaurant->name = "MORELLI";
        $newRestaurant->p_iva = '23679778945';
        $newRestaurant->image = 'https://lombardiasecrets.com/wp-content/webpc-passthru.php?src=https://lombardiasecrets.com/wp-content/uploads/2022/02/Morelli-Ristorante-Milano-Lombardia-Secrets-14.jpg&nocache=1';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = "Piazza della stazione 99, Firenze Italia";
        $newRestaurant->save();

        // RISTORANTE 15
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 8;
        $newRestaurant->name = "CITTAMANI";
        $newRestaurant->p_iva = '23672378945';
        $newRestaurant->image = 'https://www.cittamani.com/cittamani-uploads/2019/02/cittamani-home-03-1920x1281.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = "Via dei Neri 89, Firenze Italia";
        $newRestaurant->save();

        // RISTORANTE 16
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 9;
        $newRestaurant->name = "IYO";
        $newRestaurant->p_iva = '23672387945';
        $newRestaurant->image = 'https://reportergourmet.com/files/2016/04/1-Iyo_2016-0497.jpg?x36365';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = "Via dei Neri 10, Firenze Italia";
        $newRestaurant->save();

        // RISTORANTE 17
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 10;
        $newRestaurant->name = "Pepe In Grani";
        $newRestaurant->p_iva = '23112387945';
        $newRestaurant->image = 'https://www.pizzanapoletana.org/public/gallerie_assoc/6371620657706a.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = "Via dei Neri 10, Firenze Italia";
        $newRestaurant->save();

        // RISTORANTE 17
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 11;
        $newRestaurant->name = "Healthy Color";
        $newRestaurant->p_iva = '23112387699';
        $newRestaurant->image = 'https://static.gamberorosso.it/2021/02/healthy-color-1.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = "Via Roma 10, Firenze Italia";
        $newRestaurant->save();

        // RISTORANTE 18
        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = 12;
        $newRestaurant->name = "O Rei do Marisco";
        $newRestaurant->p_iva = '23444387699';
        $newRestaurant->image = 'https://www.cucinaserena.it/wp-content/uploads/2019/07/O-Reri-do-Marisco-1.jpg';
        $newRestaurant->slug = Str::slug($newRestaurant->name);
        $newRestaurant->address  = "Via Roma 10, Firenze Italia";
        $newRestaurant->save();
    }
}
