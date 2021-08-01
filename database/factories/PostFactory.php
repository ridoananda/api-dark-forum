<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Post::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $title = $this->faker->sentence(10);
    return [
      'user_id' => rand(1,10),
      'title' => $title,
      'slug' => \Str::slug($title),
      'thumbnail' => env('APP_URL').'/storage/img/post/thumbnail/10kvrM5UXPSD9YnEoNRr0uXt2Rta9mHBap2HD6o2.jpg',
      'text' => $this->faker->paragraph(15),
    ];
  }
}
