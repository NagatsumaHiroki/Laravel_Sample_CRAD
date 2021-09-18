<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Consts\PostConst;

class PostController extends Controller
{

    // 処理の統合 登録・更新周り
    public function index()
    {
        $posts = Post::latest()->get();

        return view('index')
            ->with(['posts' => $posts]);
    }
    // 画面表示
    public function detail($id)
    {
        $params = Post::find($id);

        return view('post.detail')
            ->with(['params' => $params]);
    }
    // 登録画面表示
    public function add()
    {
        return view('post.add');
    }
    // 編集画面表示
    public function edit($id)
    {
        $params = Post::find($id);

        return view('post.edit')
            ->with(['params' => $params]);
    }
    // 登録
    public function save(PostRequest $request)
    {
        $from = $request->all();
        unset($from['token']);
        $post = new Post();
        try{
            $post->fill($from)->save();
        }catch(Exception $e){
            Log::debug($e->message);
        }
        $post->fill($from)->save();
        return view('post.complete')
        ->with(['CompleteMessage' => PostConst::InsertComplete]);
    }
    // 編集
    public function update(PostRequest $request)
    {
        $post = new Post();
        $post = Post::find($request->id);
        $from = $request->all();
        unset($from['token']);
        try{
            $post->fill($from)->save();
        }catch(Exception $e){
            Log::debug($e->message);
        }
        return view('post.complete')
            ->with(['CompleteMessage' => PostConst::EditComplete]);
    }
}
