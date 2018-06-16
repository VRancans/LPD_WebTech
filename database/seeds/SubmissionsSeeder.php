<?php

use App\Submission;
use Illuminate\Database\Seeder;

class SubmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Submission::truncate();
      Submission::create(array(
        'id' => 1,
        'title' => 'How to land better',
        'description' => "Landing does seem to be a difficult part of a flip. If not prepared, it can lead to some damage to your legs, spine and neck. What has worked best for me is prolonging the time after letting go the tuck of the flip, making me able to get my body more relaxed and knees bent to around a 20 degree angle",
        'user_id' => 2));
      Submission::create(array(
        'id' => 2,
        'title' => 'Request for a tutorial on sideflips',
        'description' => "I see that a posts on frontflips and backflips have been made, but what about sideflips? I would appreciate it if you were to make a post about it.",
        'user_id' => 2));
      Submission::create(array(
        'id' => 3,
        'title' => 'Missing content',
        'description' => "I was hoping to learn about backflips, but the post was lacking in content and did'nt teach me anything. Just saying.",
        'user_id' => 3));
      Submission::create(array(
        'id' => 4,
        'title' => 'Plans',
        'description' => "Yes, i know the posts is lacking in content, but they will be updated soon, so don't worry. Have a good day!",
        'user_id' => 1));
    }
}
