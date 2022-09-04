<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Image;
use App\Models\Social;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $images = Storage::allFiles('images');

        foreach ($images as $image) {
            Image::factory()->create([
                'file' => $image,
                'dimension' => Image::getDimension($image)
            ]);
        }

        User::all()->each(function ($user) {
            $user->social()->save(Social::factory()->make());
        });
    }
}
