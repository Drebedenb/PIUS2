<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Bond;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Database\Factories\BondFactory;

class BondTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::paginate(100);
        $articles = Article::paginate(100);

        foreach($articles as $article){
            $count = rand(1,10);

            for($i = 0; $i < $count; $i++){
                Bond::create([
                    'id_article' => $article->id,
                    'id_tag' => rand(100/$count*$i + 1,100/$count*($i+1))  ,
                ]);
            }
        }
    }
}
