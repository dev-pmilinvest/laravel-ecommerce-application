<?php

use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = ['small', 'medium', 'large'];
        $colors = ['black', 'blue', 'red', 'orange'];
        $conditionnement_sprays = ['1 spray (120ml)', '2 sprays', '4 tubes (3 + 1 offerts)', '6 sprays (4 + 2 offerts)'];

        $conditionnement_tubes = ['1 tube (120ml)', '2 tubes', '4 tubes (3 + 1 offerts)', '6 tubes (4 + 2 offerts)'];
        $conditionnement_pots = ['1 pot (120ml)', '2 pots', '4 pots (3 + 1 offerts)', '6 pots (4 + 2 offerts)'];


            AttributeValue::create([
                'attribute_id'      =>  1,
                'value'             =>  '1 tube (120ml)',
                'price'             => null,
            ]);

            AttributeValue::create([
                'attribute_id'      =>  1,
                'value'             =>  '2 tubes',
                'price'             => null,
            ]);

            AttributeValue::create([
                'attribute_id'      =>  1,
                'value'             =>  '6 tubes (4 + 2 offerts)',
                'price'             => null,
            ]);




        // foreach ($sizes as $size)
        // {
        //     AttributeValue::create([
        //         'attribute_id'      =>  1,
        //         'value'             =>  $size,
        //         'price'             =>  null,
        //     ]);
        // }

        // foreach ($colors as $color)
        // {
        //     AttributeValue::create([
        //         'attribute_id'      =>  2,
        //         'value'             =>  $color,
        //         'price'             =>  null,
        //     ]);
        // }
    }
}
