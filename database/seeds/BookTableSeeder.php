<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        Book::create([
            'title'=>'Journey to the center of World',
            'writer'=>'Jules Verne',
            'user_id'=>1
        ]);

        Book::create([
            'title'=>'The adventures of the Tom Sawyer',
            'writer'=>'Mark Twain',
            'user_id'=>2
        ]);

        Book::create([
            'title'=>'Harry Potter',
            'writer'=>'J.K. Rowling',
            'user_id'=>3
        ]);
    }
}
