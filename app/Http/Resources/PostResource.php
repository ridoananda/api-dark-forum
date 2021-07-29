<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      
      return [
        'user' => $this->user,
        'title' => \Str::words($this->title, 8, '...'),
        'slug' => $this->slug,
        'thumbnail' => env('APP_URL').'/storage/'.$this->thumbnail,
        'text' => $this->text,
        'created_at' => [
          'month' => $this->created_at->format('d F'),
          'year' => $this->created_at->format('d F Y'),
        ],
      ];
      
    }
}
