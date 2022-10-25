<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'BURGER',
                'image' => 'https://timgate.it/ecm/online-content/fc5/0ad/b58/junk-food-americano-quali-sono-i-prodotti-piu-amati-in-europa_e68d02db.jpg',
            ],
            [
                'name' => 'PASTA',
                'image' => 'https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,q_auto,f_auto/restaurant/0bc01d25-2381-4b6a-879e-498c56197b87/466b894b-b033-4383-acee-9800574349f8.jpg',
            ],
            [
                'name' => 'PIZZA',
                'image' => 'https://latteriasorrentina.com/wp-content/uploads/2019/06/come-fare-la-vera-pizza-1764x882.jpg',
            ],
            [
                'name' => 'SUSHI',
                'image' => 'https://static.wixstatic.com/media/6cb51c_74bd9868878d4bb88ffef063671c2f1f~mv2.jpg/v1/fill/w_414,h_414,q_90/6cb51c_74bd9868878d4bb88ffef063671c2f1f~mv2.jpg',
            ],
            [
                'name' => 'HEALTY FOOD',
                'image' => 'https://cartzilla.createx.studio/img/food-delivery/category/06.jpg',
            ],
            [
                'name' => 'CINESE',
                'image' => 'https://cartzilla.createx.studio/img/food-delivery/category/02.jpg',
            ],
            [
                'name' => 'FAST FOOD',
                'image' => 'https://www.bresciaatavola.it/wp-content/uploads/bresciaatavola.it/2016/05/Fast-food-e1556273549545.jpg',
            ],
            [
                'name' => 'ETNICO',
                'image' => 'http://www.imprenditoreglobale.com/wp-content/uploads/2016/12/cibo-etnico-settore-ristorazione.jpg',
            ],
            [
                'name' => 'ITALIANO',
                'image' => 'https://www.foodweb.it/wp-content/uploads/2020/05/Made-in-Italy-food.jpg',
            ],
            [
                'name' => 'INDIANO',
                'image' => 'https://cdn.vox-cdn.com/thumbor/aNM9cSJCkTc4-RK1avHURrKBOjU=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/20059022/shutterstock_1435374326.jpg',
            ],
            [
                'name' => 'STEAK HOUSE',
                'image' => 'https://wips.plug.it/cips/paginegialle.it/magazine/cms/2019/02/fiorentina-800.jpg?w=744&h=418&a=c',
            ],
            [
                'name' => 'WINE BAR',
                'image' => 'https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,q_auto,f_auto/restaurant/5cd3c21b-cc90-4c08-b555-d9b10448d34e/ad0ab71e-9269-4f1f-8b57-bb85f5fa88fb.jpg',
            ],
        ];
        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category['name'];
            $newCategory->image = $category['image'];
            $newCategory->slug = Str::slug($newCategory->name);
            $newCategory->save();
        }
    }
}
