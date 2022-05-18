<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Mangue / Passion',
            'slug'=>'mangue-passion',
            'details'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur.',
            'price'=>10,
            'description'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur.',
            'category_id'=>Category::all()->random()->id
        ]);
        Product::create([
            'name'=>'Mangue / Fraise',
            'slug'=>'mangue-fraise',
            'details'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur.',
            'price'=>10,
            'description'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur',
            'category_id'=>Category::all()->random()->id
        ]);
        Product::create([
            'name'=>'Mangue / Cassis',
            'slug'=>'mangue-cassis',
            'details'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur.',
            'price'=>10,
            'description'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur',
            'category_id'=>Category::all()->random()->id
        ]);
        Product::create([
            'name'=>'Mangue / Framboise',
            'slug'=>'mangue-framboise',
            'details'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur.',
            'price'=>10,
            'description'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur',
            'category_id'=>Category::all()->random()->id
        ]);
        Product::create([
            'name'=>'Mangue / Orange',
            'slug'=>'mangue-orange',
            'details'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur.',
            'price'=>10,
            'description'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur',
            'category_id'=>Category::all()->random()->id
        ]);
        Product::create([
            'name'=>'Mangue / Citron',
            'slug'=>'mangue-citron',
            'details'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur.',
            'price'=>10,
            'description'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur',
            'category_id'=>Category::all()->random()->id
        ]);
        Product::create([
            'name'=>'Mangue / Coco',
            'slug'=>'mangue-coco',
            'details'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur.',
            'price'=>10,
            'description'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur',
            'category_id'=>Category::all()->random()->id
        ]);
        Product::create([
            'name'=>'Mangue / Banane',
            'slug'=>'mangue-banane',
            'details'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur.',
            'price'=>10,
            'description'=>'Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur',
            'category_id'=>Category::all()->random()->id
        ]);

    }

}
