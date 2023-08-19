<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::insert('INSERT INTO books (isbn, title, price, publisher, published) VALUES (:isbn, :title, :price, :publisher, :published)', [
            'isbn' => '978-4-7981-5757-3',
            'title' => 'サンプルブック',
            'price' => '1000',
            'publisher' => 'A社',
            'published' => '2021-08-17',
        ]);

        Book::factory()->count(50)->create();
    }
}
