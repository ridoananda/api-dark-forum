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
      'user_id' => 1,
      'title' => $title,
      'slug' => \Str::slug($title),
      'text' => $this->faker->paragraph(15),
    ];
  }
}
