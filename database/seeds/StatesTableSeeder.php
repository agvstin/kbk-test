<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Unguard model to be able to set all properties
    	State::unguard();

    	$fd = fopen(__DIR__ .'/states.csv', 'r');
    	// skip header
    	fgets($fd);

    	while ($row = fgetcsv($fd)) {
    		State::create([
    			'id' => $row[0],
    			'code' => $row[1],
    			'name' => $row[2],
    			'created_at' => $row[3],
    			'updated_at' => $row[4],
    		]);
    	}
    }
}
