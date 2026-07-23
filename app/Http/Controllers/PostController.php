<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('post')
            ->leftJoin('statuses', 'post.status', 'statuses.id')
            ->select('post.*', 'statuses.display_name as status_name', 'statuses.name as sname')
            ->get();
        $statuses = DB::table('statuses')->get();

        //return $posts;
        return view('post', compact('posts', 'statuses'));
    }

    public function post(Request $request)
    {
        Log::info("================ LOG START ================");
        Log::info("Title: " . $request->title);
        Log::info("Description: " . $request->description);
        Log::info("================ LOG END ================");

        DB::table('post')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_by' => 1,
            'created_at' => now(),
            'status' => $request->status,
        ]);

        return redirect()->route('post');
    }

    public function showUpdate($id)
    {
        $statuses = DB::table('statuses')->get();
        $post = DB::table('post')->find($id);

        return view('post-update', compact('statuses', 'post'));
    }

    public function updateSubmit(Request $request, $id)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
        ]);

        DB::table('post')
            ->where('id', $id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => now()
        ]);

        return redirect()->route('post');
    }
}
