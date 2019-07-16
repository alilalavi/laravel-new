<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{

    public function index()
    {
        $post = Post::find(2);
        $post -> tags()->attach(3);
        return $post->tags;
    }


    /**
     * @return mixed
     */
    public function create()
    {
//        // assume it won't work
//        $success = false;
//
//        DB::beginTransaction();
//
//        try {
//            $post = new Post;
//
//            // maybe some validation here...
//
//            $post->title = Input::get('post_title');
//            $post->content = Input::get('post_content');
//
//            if ($post->save()) {
//                $tag_ids = Input::get('tags');
//                $post->tags()->sync($tag_ids);
//                $success = true;
//            }
//        } catch (\Exception $e) {
//            // maybe log this exception, but basically it's just here so we can rollback if we get a surprise
//        }
//
//        if ($success) {
//            DB::commit();
//            return Redirect::back()->withSuccessMessage('Post saved');
//        } else {
//            DB::rollback();
//            return Redirect::back()->withErrorMessage('Something went wrong');
//        }
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
