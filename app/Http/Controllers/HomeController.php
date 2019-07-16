<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
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


    public function index()
    {
        $user = User::find(1);
        $user->roles()->attach(3);
//        return $this->$user->roles;
        dd($user->roles) ;
    }
    public function home()
    {
        $user = User::find(11);

        foreach ($user -> roles as $role)
            echo $role->name;

    }
    public function create()
    {
        $user = User::find(6);
        $user->roles()->sync([4]);
        dd($user->roles);
    }

    public function store()
    {
        $role = Role::find(5);
        dd($role->users);
    }
}

