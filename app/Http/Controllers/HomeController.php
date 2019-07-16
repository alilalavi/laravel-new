<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /*public function addPost()
    {
        // assume it won't work
        $success = false;

        DB::beginTransaction();

        try {
            $post = new Post;

            // maybe some validation here...

            $post->title = Input::get('post_title');
            $post->content = Input::get('post_content');

            if ($post->save()) {
                $tag_ids = Input::get('tags');
                $post->tags()->sync($tag_ids);
                $success = true;
            }
        } catch (\Exception $e) {
            // maybe log this exception, but basically it's just here so we can rollback if we get a surprise
        }

        if ($success) {
            DB::commit();
            return Redirect::back()->withSuccessMessage('Post saved');
        } else {
            DB::rollback();
            return Redirect::back()->withErrorMessage('Something went wrong');
        }
    }*/


    /**
     *
     */
    public function index()
    {
        $user = User::find(3);
        $user->roles()->attach(2);
        return $user->roles;
    }

    public function home()
    {
        $user = User::find(1);
        return $user->roles;
    }
}

