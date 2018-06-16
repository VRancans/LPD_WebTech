<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Post::truncate();
      Post::create(array(
        'id' => 1,
        'title' => 'How to do a Backflip',
        'description' => "Also known as a back tuck, a somi, or a salto, a back flip is one of the most impressive and easily recognizable skills in gymnastics. With this move, your body makes a 360 degree rotation, beginning in a standing position and landing in a standing position. Whether you're looking to become a gymnast or just want to impress your friends with your cool new skill, you can get the hang of flipping backwards—if you're willing to invest some time and effort.",
        'images' => 0));
      Post::create(array(
        'id' => 2,
        'title' => 'How to do a Frontflip',
        'description' => "A front flip, also known as a front tuck, is an advanced gymnastics move. If you want to execute an impressive front flip, you need to have the strength, flexibility, and determination to pull it off. Learn how to do a front roll and dive roll first. Then, practice the different parts of a front flip with a spotter. Once you're comfortable, you'll be able to execute the flip on your own. With some patience and practice, you’ll soon be flipping across the floor like a pro!",
        'images' => 1));
      Post::create(array(
        'id' => 3,
        'title' => 'What is a Vault?',
        'description' => "In various urban activities, a vault is any type of movement that involves overcoming an obstacle by jumping, leaping, climbing or diving over an obstacle while using their feet, hands or not touching it at all. Although Parkour doesn't involve the idea of set movements, traceurs use similar ways of moving  to quickly and efficiently pass over obstacles.",
        'images' => 1));

    }
}
