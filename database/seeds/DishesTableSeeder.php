<?php

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = "Big Mac";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Salsa Big Mac, Insalata, Cipolla';
        $newDish->image = 'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/big-mac-isolated.png?itok=jQEbyoQJ';
        $newDish->price  = 8.70;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = "McChicken";
        $newDish->ingredients = 'Pane, 100% petto di pollo italiano, Salsa McChicken, Insalata';
        $newDish->image = 'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/mcchicken--hero-isolated.png?itok=_8uEiFFU';
        $newDish->price  = 7.30;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = "Crispy McBacon";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Salsa Cryspy, Bacon';
        $newDish->image = 'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/crispy-mcbacon--hero-isolated_3.png?itok=m9TU-ZY0';
        $newDish->price  = 7.90;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = "My Selection BBQ";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Salsa BBQ, Bacon, Insalata';
        $newDish->image = 'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/myselection-bbq_isolated_0.png?itok=Nib8-cBRO';
        $newDish->price  = 8.90;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = "Cheeseburger";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Ketchup, Senape, Cetriolo, Cipolla';
        $newDish->image = 'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/cheeseburger--hero-isolated.png?itok=jf1lAD82';
        $newDish->price  = 2.70;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = "McToast";
        $newDish->ingredients = 'Pane, prociutto cotto, Formaggio';
        $newDish->image = 'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/toast--hero-isolated_0.png?itok=VFSHQ9c1';
        $newDish->price  = 2.30;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = "Hamburger";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Ketchup, Senape, Cetriolo, Cipolla';
        $newDish->image = 'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/hamburger--hero-isolated.png?itok=oqQTNwnG';
        $newDish->price  = 1.90;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = "Chickenburger";
        $newDish->ingredients = 'Pane, 100% petto di pollo italiano, Salsa Ceasar';
        $newDish->image = 'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/chickenburger--hero-isolated_0.png?itok=mYR92dgH';
        $newDish->price  = 3.20;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 3;
        $newDish->name = "Double Cheeseburger";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Ketchup, Senape, Cetriolo, Cipolla';
        $newDish->image = 'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/double-cheeseburger--isolated.png?itok=wW_zKGFi';
        $newDish->price  = 5.20;
        $newDish->visible  = true;
        $newDish->save();

        // BURGER KING

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = "BIG KING XXL";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Senape, Cipolla';
        $newDish->image = 'https://www.burgerking.it/site/assets/files/1800/big_king_xxl.png ';
        $newDish->price  = 6.20;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = "BACON KING";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Maionese, Bacon';
        $newDish->image = 'https://www.burgerking.it/site/assets/files/7818470/bacon_king-2.png';
        $newDish->price  = 6.70;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = "BIG KING";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Senape, Cipolla';
        $newDish->image = 'https://www.burgerking.it/site/assets/files/1856/big_king_nueva.png';
        $newDish->price  = 5.20;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = "WHOPPER";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Pomodoro, Senape, Cipolla';
        $newDish->image = 'https://www.burgerking.it/site/assets/files/1046/whopper.png';
        $newDish->price  = 5.20;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = "BIG KING XXL";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Senape, Cipolla';
        $newDish->image = 'https://www.burgerking.it/site/assets/files/1800/big_king_xxl.png ';
        $newDish->price  = 5.20;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = "CHEESBURGER";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Ketchup, Senape, Cetriolo, Cipolla';
        $newDish->image = 'https://www.burgerking.it/site/assets/files/1758/cheeseburger.png';
        $newDish->price  = 2.70;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = "HAMBURGER";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Ketchup, Senape, Cetriolo, Cipolla';
        $newDish->image = 'https://www.burgerking.it/site/assets/files/8455132/hamburger.png';
        $newDish->price  = 1.90;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id = 4;
        $newDish->name = "DOUBLE CHEESBURGER";
        $newDish->ingredients = 'Pane, Carne 100% bovina, Formaggio, Ketchup, Senape, Cetriolo, Cipolla';
        $newDish->image = 'https://www.burgerking.it/site/assets/files/96543/double_cheeseburger.png';
        $newDish->price  = 5.20;
        $newDish->visible  = true;
        $newDish->save();

        //SUSHI
        $newDish = new Dish();
        $newDish->restaurant_id =  2;
        $newDish->name = "tonno tartar";
        $newDish->ingredients = 'Tritato di tonno con salsa speciale';
        $newDish->image = 'https://static.cookist.it/wp-content/uploads/sites/21/2020/08/tartare-di-tonno-e-avocado1-1200x675.jpg';
        $newDish->price  = 8.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  2;
        $newDish->name = "ravioli al vapore";
        $newDish->ingredients = 'Ripieno di verdure e carne';
        $newDish->image = 'https://cdn.ilclubdellericette.it/wp-content/uploads/2017/06/ravioli-di-carne-al-vapore-790x500.jpg';
        $newDish->price  = 5.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  2;
        $newDish->name = "yasai yaki meshi";
        $newDish->ingredients = 'Riso saltato con verdure';
        $newDish->image = 'https://www.saporiko.it/wp-content/uploads/2020/05/Riso-alle-verdure-Saporiko-Vittuone.jpg';
        $newDish->price  = 6.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  2;
        $newDish->name = "keisen yaki udon";
        $newDish->ingredients = 'Spaghetti di riso con frutti di mare e verdure';
        $newDish->image = 'https://www.ricetteinarmonia.it/wp-content/uploads/2020/10/Noodles-ai-frutti-di-mare-e-verdure-2-768x576.jpg';
        $newDish->price  = 7.00;
        $newDish->visible  = true;
        $newDish->save();

        //ANTICO VINAIO

        $newDish = new Dish();
        $newDish->restaurant_id =  1;
        $newDish->name = "La paradiso";
        $newDish->ingredients = 'Mortadella, crema di pistacchio, stracciatella e granella di pistacchio';
        $newDish->image = 'https://www.allanticovinaio.com/wp-content/uploads/2021/10/paradiso-600x600.jpg';
        $newDish->price  = 8.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  1;
        $newDish->name = "La numero 1";
        $newDish->ingredients = 'Porchetta, crema di cipolla e crema di patate arrosto';
        $newDish->image = 'https://www.allanticovinaio.com/wp-content/uploads/2021/10/la-numero-1-orizzonale-600x600.jpg';
        $newDish->price  = 5.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  1;
        $newDish->name = "Vegetariana 2";
        $newDish->ingredients = 'Gorgonzola, zucchine, pomodori secchi e rucola ';
        $newDish->image = 'https://www.allanticovinaio.com/wp-content/uploads/2021/11/VEG-3-copia_Medium-600x600.jpg';
        $newDish->price  = 6.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  1;
        $newDish->name = "La Dante";
        $newDish->ingredients = 'Capocollo con stracchino, crema di tartufo e rucola';
        $newDish->image = 'https://www.allanticovinaio.com/wp-content/uploads/2021/10/dante-600x600.jpg';
        $newDish->price  = 7.00;
        $newDish->visible  = true;
        $newDish->save();

        //STEAK HOUSE

        $newDish = new Dish();
        $newDish->restaurant_id =  5;
        $newDish->name = "Bistecca di Wagyu";
        $newDish->ingredients = 'Wagyu';
        $newDish->image = 'https://www.scattidigusto.it/wp-content/uploads/2022/03/MarezzataLaDispensa.jpg';
        $newDish->price  = 35.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  5;
        $newDish->name = "Tagliata di Picagna";
        $newDish->ingredients = 'Picagna';
        $newDish->image = 'https://www.scattidigusto.it/wp-content/uploads/2022/03/OsteriaDaGiaomino.jpg';
        $newDish->price  = 20.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  5;
        $newDish->name = "Fiorentina";
        $newDish->ingredients = 'Manzo';
        $newDish->image = 'https://www.lanticamacelleria.it/wp-content/uploads/2019/04/Schermata-2020-05-19-alle-15.36.14.png';
        $newDish->price  = 30.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  5;
        $newDish->name = "Tomahowk";
        $newDish->ingredients = 'Manzo';
        $newDish->image = 'https://cdn.shopify.com/s/files/1/1186/6036/articles/food-3642376_1920.jpg';
        $newDish->price  = 27.00;
        $newDish->visible  = true;
        $newDish->save();
    }
}
