<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OpenGraph;
use Illuminate\Support\Facades\Auth;

class OpenGraphSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OpenGraph::create([
            'og_type' => 'product',
            'og_title' => 'Plan',
            'og_url' => '/plan',
            'og_image' => '/img/logo_cleaning.png',
            'og_descriptioon' => 'Company Cleaning. Service carpet cleaning. Places: Minsk Moscow Warsaw',
            'og_plural_title' => 'Carpets cleaning',
            'url' => '',
            'user_id' => optional(Auth::user())->id,
            'status' => 'service',
        ]);
        OpenGraph::create([
            'og_type' => 'product2',
            'og_title' => 'Galleru',
            'og_url' => '/galleru',
            'og_image' => '/img/logo_cleaning.png',
            'og_descriptioon' => 'Company Cleaning. Service window washing. Places: Minsk Moscow Warsaw',
            'og_plural_title' => 'Window washing',
            'url' => '/',
            'user_id' => optional(Auth::user())->id,
            'status' => 'service',
        ]);
        OpenGraph::create([
            'og_type' => 'product',
            'og_title' => 'Blogs',
            'og_url' => '/blogs',
            'og_image' => '/img/logo_cleaning.png',
            'og_descriptioon' => 'Company Cleaning. Service House cleaning. Places: Minsk Moscow Warsaw',
            'og_plural_title' => 'House cleaning',
            'url' => '/',
            'user_id' => optional(Auth::user())->id,
            'status' => 'service',
        ]);
    }
}
