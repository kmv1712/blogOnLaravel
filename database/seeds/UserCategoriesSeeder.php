<?php

use Illuminate\Database\Seeder;

class UserCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
    	$dateCreateCategorie= date("Y-m-d H:i:s");
    	DB::table('categories')->insert(['categorie' => 'Выключатели','dateCreateCategorie' => "$dateCreateCategorie"]);
    	DB::table('categories')->insert(['categorie' => 'Трансформаторы','dateCreateCategorie' => "$dateCreateCategorie"]);
    	DB::table('categories')->insert(['categorie' => 'Разъединители', 'dateCreateCategorie' => "$dateCreateCategorie"]);
    	DB::table('categories')->insert(['categorie' => 'ОПН','dateCreateCategorie' => "$dateCreateCategorie"]);
    	DB::table('categories')->insert(['categorie' => 'РВС','dateCreateCategorie' => "$dateCreateCategorie"]);
    	DB::table('categories')->insert(['categorie' => 'Молниеотводы','dateCreateCategorie' => "$dateCreateCategorie"]);
    	DB::table('categories')->insert(['categorie' => 'Кабель','dateCreateCategorie' => "$dateCreateCategorie"]);
    	DB::table('categories')->insert(['categorie' => 'СИЗ','dateCreateCategorie' => "$dateCreateCategorie"]);
    }
  }
