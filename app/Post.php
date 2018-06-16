<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function images() {
      return array(
          'server_path' => public_path().'/uploads/',
          'asset_path' => 'uploads/',
          'image' => ($this->images ? $this->id : 'no-image-found').'_post_image.jpg',
      );
  }
}
