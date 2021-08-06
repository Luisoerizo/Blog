<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    public function creating(Post $post)//antes de crear el post
    {
        if (! \App::runningInConsole) {
            $post->user_id = auth()->user()->id;
        }
    }

    public function deleting(Post $post) //antes de eliminar el post
    {
        if ($post->image) {
            Storage::delete($post->image->url);
        }
    }


}
