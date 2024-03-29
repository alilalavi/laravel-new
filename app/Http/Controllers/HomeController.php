<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * @return string
     * @throws \Exception
     */
    public function addPost()
    {
        // assume it won't work
        $success = false;

        DB::beginTransaction();

        try {
            $post = new Post;

            // maybe some validation here...

            $post->title = 'alilalavi5';
            $post->content = 'alilalavi6';

            if ($post->save()) {
                $tag_ids = 4;
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
    }


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

    public function store()
    {
        $pro = Product::find(1);
//        $pro->shops()->attach(3);
        return $pro->shops;
    }
}

