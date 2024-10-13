<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This seeder is responsible for populating the 'photos' table 
     * with initial data. It creates 27 entries in the table, where 
     * each entry represents a photo with a title and a URL.
     * 
     * The loop iterates from 1 to 27, and for each iteration:
     * 1. A new instance of the Photo model is created.
     * 2. The 'title' field is set to 'Photo : X', where X is the current 
     *    iteration number (e.g., 'Photo : 1', 'Photo : 2', etc.).
     * 3. The 'url' field is constructed as '/img/X.png', pointing 
     *    to a PNG image file in the /img directory.
     * 4. Finally, the photo instance is saved to the database, 
     *    adding the entry to the 'photos' table.
     * 
     * This seeder is useful for generating sample data during development 
     * or testing, allowing developers to work with a populated database 
     * without manual entry.s
     */
    public function run(): void
    {
        for( $i = 1; $i <= 27; $i++){
            $photo = new Photo();
            $photo->title = 'Photo : ' . $i;
            $photo->url = '/img/' . $i . '.png';

            $photo->save();
            
        }
    }
}
