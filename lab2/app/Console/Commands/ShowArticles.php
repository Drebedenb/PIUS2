<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ShowArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:tag {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Amount of articles with tag';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id_tag = $this->argument('id');
        $article_count = DB::table('bonds')->where('id_tag', '=', $id_tag)->count();
        echo "Amount of articles with tag $id_tag - $article_count\n";
        return $article_count;
    }
}
