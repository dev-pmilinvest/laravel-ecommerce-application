<?php
use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' =>'argel7',
            'slug' => 'NULL',
            'logo' => 'NULL',
        ]);

        Brand::create([
            'name' =>'sp2l',
            'slug' => 'NULL',
            'logo' => 'NULL',
        ]);

    }
}
