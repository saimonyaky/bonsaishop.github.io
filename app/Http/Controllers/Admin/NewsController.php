<?php

namespace App\Http\Controllers\Admin;

use App\Tiding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Tiding::where('title','like','%'.$request->search.'%')
        ->paginate(10);
        // ->appends(['search'=>$request->search]);
        return view('admin.news.news',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required'
        ],[
            'title.required'=>'Tiêu đề không được để trống'
        ]);
        $news = new Tiding();
        $news->title = $request->title;
        $news->slug = str_slug($request->title);
        $news->content = $request->content;
        if ($request->hasFile('image')) {
            //get file
            $file = $request->file('image');
            //đặt tên
            $filename = time() . '' . $file->getClientOriginalName();
            //đặt đường dẫn
            $filepath = 'img/news/';
            $request->file('image')->move($filepath, $filename);
            $news->image = $filepath . $filename;
        }
        $news->save();
        return redirect()->route('news.index')->with('mess','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Tiding::find($id);
        return view('admin.news.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Tiding::find($id);
        return view('admin.news.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required'
        ],[
            'title.required'=>'Tiêu đề không được để trống',
        ]);
        $news = Tiding::findorFail($id);
        $news->title = $request->input('title');
        $news->slug = str_slug($request->input('title'));
        $news->content= $request->content;
        if ($request->hasFile('new_image')) {
            @unlink(public_path($news->image));
            //get file
            $file = $request->file('new_image');
            //đặt tên
            $filename = time() . '_' . $file->getClientOriginalName();
            //đặt đường dẫn
            $filepath = 'img/news/';
            $request->file('new_image')->move($filepath, $filename);
            $news->image = $filepath . $filename;
        }
        $news->save();
        return redirect()->route('news.index')->with('mess', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Tiding::destroy($id);
        if($category){
            return redirect()->route('news.index')->with('mess','Xoá thành công');
        }
    }
}
