<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = [
            [
                'url' => 'https://www.divisasureste.com/uploads/sliders/16232643148247.jpg',
                'title' => 'Slider 1',
            ],
            [
                'url' => 'https://www.divisasureste.com/uploads/sliders/16232643148247.jpg',
                'title' => 'Slider 2',
            ],
            [
                'url' => 'https://www.divisasureste.com/uploads/sliders/16232643148247.jpg',
                'title' => 'Slider 3',
            ],
            [
                'url' => 'https://www.divisasureste.com/uploads/sliders/16232643148247.jpg',
                'title' => 'Slider 4',
            ],
            [
                'url' => 'https://www.divisasureste.com/uploads/sliders/16232643148247.jpg',
                'title' => 'Slider 5',
            ],
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
