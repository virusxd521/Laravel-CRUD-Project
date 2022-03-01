<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshopsSeeder extends Seeder
{

    
    


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        // Clear the Database form Data
        DB::table('bookshops')->truncate();


        $bookshops = [
    'Prague' => [
        'Knihy Dobrovský',
        'Kosmas',
        'Neoluxor'
    ],
    'London' => [
        'Blackwell\'s',
        'Daunt Books',
        'Foyles',
        'John Smith & Son',
        'W H Smith',
        'Waterstones',
        'The Works'
    ],
    'New York' => [
        'Amazon Books',
        'Anderson\'s Bookshops',
        'Barnes & Noble',
        'Bookmans',
        'Books-A-Million',
        'Books, Inc.',
        'Deseret Book, also operates Seagull Book',
        'Follett\'s',
        'Half Price Books',
        'Hudson News',
        'Joseph-Beth Booksellers',
        'Kinokuniya',
        'Mardel Christian Stores',
        'Powell\'s Books',
        'Schuler Books & Music',
        'Tattered Cover'
    ]
];





foreach($bookshops as $key=>$value){    


        // Looping throug the    
        for ($x = 0; $x < count($value); $x++) {
            // dd($value);
            // dd([ 'city'=> $key, 'name' => $value[$x]]);
            DB::table('bookshops')->insert([
                'city'=> $key,
                'name' => $value[$x]

            ]);
        }
        
    }
    // 'name' => $bookshops['Prague'][0]


// dd($test);


    }
// dd($bookshops['Prague'][0]);

}
