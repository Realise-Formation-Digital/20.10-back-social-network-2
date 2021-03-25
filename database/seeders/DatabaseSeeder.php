<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Feedback;
use App\Models\Like;
use App\Models\Channel;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
                    // créé 50 users 

        $users=User::factory()
                    ->count(50)
                    ->create();

        $channels=Channel::factory()
                    ->count(20)
                    ->make()
                    ->each(function ($channel) use ($users) {
                        $channel->user_id=$users->random()->id;
                        $channel->save();
                });
                
                    /* créé 30 posts et affecte des users random */

       $posts=Post::factory()
                    ->count(30)
                    ->make()
                    ->each( function ($post) use ($users,$channels) {
                        $post->user_id= $users->random()->id;
                        $post->channel_id= $channels->random()->id;
                        $post->save();
                        
                });
                /* crée 20 comment et affecte un users_id et un post_id pour chaqun */
        Comment::factory()
                    ->count(10)
                    ->make()
                    ->each( function ($comment) use ($users,$posts) {
                        $comment->user_id= $users->random()->id; 
                        $comment->post_id= $posts->random()->id;
                        $comment->save();               
                });

                /* crée 20 like et affecte user_id à chaque like */
        Like::factory()
                    ->count(20)
                    ->make()
                    ->each( function ($like) use ($users,$posts) {
                        $like->user_id= $users->random()->id;
                        $like->post_id= $posts->random()->id;
                        $like->save();
                        
                });
                /*    */
        Like::factory()
                ->count(20)
                ->make()
                ->each( function ($like) use ($users,$channels) {
                    $like->user_id= $users->random()->id;
                    $like->channel_id= $channels->random()->id;
                    $like->save();
                });
                


    }
}