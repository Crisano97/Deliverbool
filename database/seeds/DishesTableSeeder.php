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

        //CONVIVIO

        $newDish = new Dish();
        $newDish->restaurant_id =  6;
        $newDish->name = "Rosa di Topinambur";
        $newDish->ingredients = 'Topinambur';
        $newDish->image = 'https://www.ilconviviotroiani.it/wp-content/uploads/2019/03/slider-024-1630x860.jpg';
        $newDish->price  = 18.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  6;
        $newDish->name = "Piccione accompagnato da un uovo 65°";
        $newDish->ingredients = 'Piccione , uovo , salsa al parmiggiano';
        $newDish->image = 'https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,q_auto,f_auto/restaurant/39e137f9-d853-4456-b9f8-9ee39a5b96ad/1a7583cd-8c07-445a-a4c3-cb7616dcd6ef.jpg';
        $newDish->price  = 24.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  6;
        $newDish->name = "Merluzzo, noci e finocchio";
        $newDish->ingredients = "Merluzzo, noci e finocchio";
        $newDish->image = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/5dd750bf-7f87-4e34-a07a-91ffe506f6f2/3f18a5ff-3d71-42ca-82f8-80c6d91d21f9.jpg';
        $newDish->price  = 30.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  6;
        $newDish->name = "Maialino all'arancia";
        $newDish->ingredients = 'Pancia di maiale, arancia';
        $newDish->image = 'https://www.chateauvieux.ch/sites/chateauvieux/files/styles/home_panel/public/panneaux/AUTOMNE_04_0.jpg?itok=oiF9vILi';
        $newDish->price  = 27.00;
        $newDish->visible  = true;
        $newDish->save();

        //MORELLI

        $newDish = new Dish();
        $newDish->restaurant_id =  7;
        $newDish->name = "Risotto di ricoota affumicata,gamberi e tartufo";
        $newDish->ingredients = 'Riso, Ricotta, Tartufo, Gamberi';
        $newDish->image = 'https://vivimilano.corriere.it/wp-content/uploads/2017/03/giancarlo-morelli-700x472.jpg';
        $newDish->price  = 18.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  7;
        $newDish->name = "Patate e cavolo nero";
        $newDish->ingredients = 'Farina, mozarella, patate, cavolo nero';
        $newDish->image = 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/come-un-pizzochero-1646919483.jpg?crop=1xw:1xh;center,top&resize=480:*';
        $newDish->price  = 14.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  7;
        $newDish->name = "Club Sandwich";
        $newDish->ingredients = "Pane, Tacchino CBT, Insalata, Uovo, Maionese, Bacon";
        $newDish->image = 'https://static.cosaporto.it/media/2021/03/5V9A6828.jpg';
        $newDish->price  = 19.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  7;
        $newDish->name = "Caramelle alla carbonara";
        $newDish->ingredients = 'Farina, Uovo, Pancetta, Pecorino, Pepe ';
        $newDish->image = 'https://www.pomiroeu.com/wp-content/uploads/2018/05/pomiroeu-2203.jpg';
        $newDish->price  = 22.00;
        $newDish->visible  = true;
        $newDish->save();

        //CITTAMANI

        $newDish = new Dish();
        $newDish->restaurant_id =  8;
        $newDish->name = "Pollo, paprika e polvere di rabarbaro";
        $newDish->ingredients = 'Pollo, Paprika, Rabarbaro';
        $newDish->image = 'https://www.cibovagare.it/uploads/2021/10/25/cittamanimilano.jpg';
        $newDish->price  = 18.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  8;
        $newDish->name = "Agnello e riso indiano";
        $newDish->ingredients = 'Agnello, riso indiano';
        $newDish->image = 'https://www.scattidigusto.it/wp-content/uploads/2017/10/Cittamani-ristorante-indiano-Milano-costoletta-agnello.jpg';
        $newDish->price  = 14.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  8;
        $newDish->name = "L'india in primavera";
        $newDish->ingredients = "Riso indiano, Piselli, Anacardi; Alici, Pomodori";
        $newDish->image = 'https://www.italiaatavola.net/images/contenutiarticoli/khikhdi.jpg';
        $newDish->price  = 19.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  8;
        $newDish->name = "Zuppa di zafferano con biscotti al rosmarino";
        $newDish->ingredients = 'Zafferano, Miele , Farina, Rosmarino';
        $newDish->image = 'https://static.gamberorosso.it/media/k2/items/src/792f1e82f9cf4c3783987063d733cf40-768x508.jpg';
        $newDish->price  = 19.00;
        $newDish->visible  = true;
        $newDish->save();

        //IYO

        $newDish = new Dish();
        $newDish->restaurant_id =  9;
        $newDish->name = "Sashimi misto";
        $newDish->ingredients = 'riso, Tonno, Salmone, Seppia, Spigola';
        $newDish->image = 'https://flawless.life/wp-content/uploads/2018/03/iyo-nagiri.jpg';
        $newDish->price  = 18.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  9;
        $newDish->name = "Anguilla in salsa BBQ";
        $newDish->ingredients = 'Anguilla, Salsa BBQ';
        $newDish->image = 'https://www.identitagolose.it/public/images/xmedium/1-iyo-experience-unagi-sumibiyaki-ph-brambilla-serrani.jpg';
        $newDish->price  = 21.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  9;
        $newDish->name = "Uramaki di gamberi in salsa di piselli";
        $newDish->ingredients = "Riso, Gamberi, piselli";
        $newDish->image = 'https://flawless.life/wp-content/uploads/2018/03/iyo-uramaki-1.jpg';
        $newDish->price  = 23.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  9;
        $newDish->name = "Mele e sfera di meringa";
        $newDish->ingredients = 'Mele, Uova, Farina';
        $newDish->image = 'https://flawless.life/wp-content/uploads/2018/03/iyo-sfera.jpg';
        $newDish->price  = 12.00;
        $newDish->visible  = true;
        $newDish->save();

        //Pepe IN GRANI

        $newDish = new Dish();
        $newDish->restaurant_id =  10;
        $newDish->name = "La Margherita Vegana";
        $newDish->ingredients = 'Farina, Pomodoro, Basilico, Mozarella Vegana';
        $newDish->image = 'https://www.mysocialrecipe.com/files/admin/immagini/margheritavegana1-master.jpg';
        $newDish->price  = 18.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  10;
        $newDish->name = "Funghi, Bresaola e Puntarelle";
        $newDish->ingredients = 'Farina, Funghi, Bresaola e Puntarelle';
        $newDish->image = 'https://assets.airmail.news/static/images/BAh7CEkiCGdpZAY6BkVUSSIzZ2lkOi8vYWlyLW1haWwvQXJ0aWNsZTo6UGhvdG8vNTc0NzU_ZXhwaXJlc19pbgY7AFRJIgxwdXJwb3NlBjsAVEkiDGRlZmF1bHQGOwBUSSIPZXhwaXJlc19hdAY7AFQw--d06b53650cd16d3f8f8570f341503ddf5bb985b4/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdDVG9MWm05eWJXRjBTU0lJYW5CbkJqb0dSVlE2QzNKbGMybDZaVWtpQ1RneU1ENEdPd1pVT2hCaGRYUnZYMjl5YVdWdWRGUTZESEYxWVd4cGRIbHBhUT09IiwiZXhwIjpudWxsLCJwdXIiOiJ2YXJpYXRpb24ifX0=--9f1042b9c088c6ba97f7b06fd8c724bd4cf39745/photo-1634324629.jpeg';
        $newDish->price  = 15.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  10;
        $newDish->name = "Zucca, Provola e radicchio";
        $newDish->ingredients = "Farina, Zucca, Provola e radicchio";
        $newDish->image = 'https://www.foodandwineitalia.com/wp-content/uploads/2020/04/Bucolica-Pepe.png';
        $newDish->price  = 16.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  10;
        $newDish->name = "Datterino giallo, Speck e provola";
        $newDish->ingredients = 'Farina, Datterino giallo, Speck e provola';
        $newDish->image = 'https://img1.wsimg.com/isteam/ip/af173eb3-52f7-44a5-935c-c93146643436/fb_1478689839133633_822x823.jpg';
        $newDish->price  = 12.00;
        $newDish->visible  = true;
        $newDish->save();

        //HEALTHY COLOR

        $newDish = new Dish();
        $newDish->restaurant_id =  11;
        $newDish->name = "Poke GREEN";
        $newDish->ingredients = 'Edamame, Avocado, Fragole, Mango, Tofu';
        $newDish->image = 'https://10619-2.s.cdn12.com/rests/original/337_508249086.jpg';
        $newDish->price  = 13.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  11;
        $newDish->name = "Poke ORANGE";
        $newDish->ingredients = 'Edamame, Avocado, Salmone, Germoii di soia, Uva, Mango';
        $newDish->image = 'https://i2.wp.com/www.puntarellarossa.it/wp/wp-content/uploads/2019/10/WhatsApp-Image-2019-10-16-at-15.07.46.jpeg?resize=678%2C678&ssl=1';
        $newDish->price  = 15.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  11;
        $newDish->name = "Poke YELLOW";
        $newDish->ingredients = "Avocado, Pomodori gualli, Noci, Pollo, Carote, Rucola";
        $newDish->image = 'https://10619-2.s.cdn12.com/rests/original/337_508249085.jpg';
        $newDish->price  = 13.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  11;
        $newDish->name = "Poke WHITE";
        $newDish->ingredients = 'Avocado, Tonno, Gabero, Salmone, Spigola';
        $newDish->image = 'https://10619-2.s.cdn12.com/rests/original/337_508249089.jpg';
        $newDish->price  = 18.00;
        $newDish->visible  = true;
        $newDish->save();

        //O Rei do Marisco

        $newDish = new Dish();
        $newDish->restaurant_id =  12;
        $newDish->name = "El Crudo";
        $newDish->ingredients = 'Pane, Songino, Prociutto crudo, Carote';
        $newDish->image = 'https://www.mangiaebevi.it/wp-content/uploads/2019/07/la-ricciola-do-mar-e1562581103121.jpg';
        $newDish->price  = 13.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  12;
        $newDish->name = "El Salmon";
        $newDish->ingredients = 'Pane, Salmone, Zucchine, Mozzarella';
        $newDish->image = 'https://www.effettofood.com/wp-content/uploads/2020/09/Ristorante-Fast-food-pesce-Pescaria-Roma-nuova-apertura-2020-1024x1024.jpg';
        $newDish->price  = 15.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  12;
        $newDish->name = "Il Panino del Mare";
        $newDish->ingredients = "Pane, Gamberi, Rucola, Melanzane, Salsa di pomodoro";
        $newDish->image = 'https://www.effettofood.com/wp-content/uploads/2020/09/Panino-gamberoni-menu-Fast-Food-pesce-Pescaria-Nuova-apertura-Roma-2020-Prati-1024x768.jpg';
        $newDish->price  = 13.00;
        $newDish->visible  = true;
        $newDish->save();

        $newDish = new Dish();
        $newDish->restaurant_id =  12;
        $newDish->name = "David Jhons";
        $newDish->ingredients = 'Pane, Polpo, Stracciatella, Cime di rapa';
        $newDish->image = 'https://qbquantobasta.it/images/foto/chef/2021/10/panino-polpo-fritto.jpg';
        $newDish->price  = 18.00;
        $newDish->visible  = true;
        $newDish->save();
    }
}
