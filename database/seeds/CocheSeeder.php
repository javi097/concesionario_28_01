<?php

use Illuminate\Database\Seeder;
use App\Coche;


class CocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0;");
        DB::table('coches')->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS=1;");
        
        Coche::create([
            'matricula'=>'1234 JJJ',
            'modelo' => 'Clio',
            'color'=>'Rojo',
            'tipo'=>'Diesel',
            'klms'=>'1231',
            'pvp'=>'13464',
            'marca_id'=>'1'
        ]);
        Coche::create([
            'matricula'=>'8475 JPJ',
            'modelo' =>'Golf',
            'color'=>'Blanco',
            'tipo'=>'Gasolina',
            'klms'=>'1234',
            'pvp'=>'24235',
            'marca_id'=>'2'
        ]);
        Coche::create([
            'matricula'=>'5478 KMT',
            'modelo' =>'C4',
            'color'=>'Blanco',
            'tipo'=>'Diesel',
            'klms'=>'1246',
            'pvp'=>'19564',
            'marca_id'=>'3'
        ]);
        Coche::create([
            'matricula'=>'2347 LPT',
            'modelo' =>'500',
            'color'=>'Azul',
            'tipo'=>'Diesel',
            'klms'=>'12',
            'pvp'=>'16450',
            'marca_id'=>'4'
        ]);
        Coche::create([
            'matricula'=>'4751 LGH',
            'modelo' =>'Astra',
            'color'=>'Rojo',
            'tipo'=>'Diesel',
            'klms'=>'154',
            'pvp'=>'19564',
            'marca_id'=>'5'
        ]);
        Coche::create([
            'matricula'=>'1245 KLY',
            'modelo' =>'Mustang',
            'color'=>'Gris',
            'tipo'=>'Gasolina',
            'klms'=>'22145',
            'pvp'=>'41450',
            'marca_id'=>'6'
        ]);

    }
}
