<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = [
            [
                'section' => 'header',
                'url' => 'https://www.youtube.com/embed/QH2-TGUlwu4',
                'type' => 'video',
            ],
            [
                'section' => 'video1',
                'url' => 'https://www.youtube.com/embed/QH2-TGUlwu4',
                'type' => 'video',
            ],
            [
                'section' => 'video2',
                'url' => 'https://www.youtube.com/embed/QH2-TGUlwu4',
                'type' => 'video',
            ],
            [
                'section' => 'video3',
                'url' => 'https://www.youtube.com/embed/QH2-TGUlwu4',
                'type' => 'video',
            ],

        ];
        foreach ($resources as $resource) {
            Resource::create($resource);
        }
    }
}
