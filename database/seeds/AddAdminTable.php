<?php

use Illuminate\Database\Seeder;

class AddAdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$dateCreateAdmin= date("Y-m-d H:i:s");
    	DB::table('admins')->insert([
    		'loginAdmin' => 'admin', 
    		'passwordAdmin' => 'admin', 
    		'dateCreateAdmin' => "$dateCreateAdmin"
    		]);  	
    }
  }
