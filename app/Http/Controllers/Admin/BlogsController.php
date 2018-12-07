<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, [
            'title'         => 'required',
            'description'   => 'required',
            'img_path'      => 'required',
            'published_at'  => 'required'
        ]);

        $this->imageUpload($request->all());

        $blog = Blog::create([
            'slug'          => str_slug($request->title),
            'title'         => $request->title,
            'description'   => $request->description,
            'img_path'      => 'images/blogs/' . str_slug($request->title) . '.' .  $request->img_path->getClientOriginalExtension(),
            'published_at'    => $request->published_at
        ]);

        return back()->with('success', 'Sikeresen feltetted az új olvasmányt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('admin.blogs.edit', compact('blog'));
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
        $this->validate($request, [
            'title'         => 'required',
            'description'   => 'required'
        ]);

        $blog = Blog::find($id);

        if($request->img_path === null) {
            $request->img_path = $blog->img_path;
            $request['slug'] = str_slug($request->title);
            $blog->update($request->all());
        } 
        else {
            $this->imageUpload($request->all());
            $blog->update([
                'slug'          => str_slug($request->title),
                'title'         => $request->title,
                'description'   => $request->description,
                'img_path'      => 'images/blogs/' . str_slug($request->title) . '.' .  $request->img_path->getClientOriginalExtension(),
                'published_at'    => $request->published_at
            ]);
        }

        
        return redirect('admin/olvasmanyok')->with('success', 'Sikeresen szerkesztetted az olvasmányt!');
;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return back()->with('success', 'Sikeresen törölted az olvasmányt!');
    }
    /**
     * imageUpload
     *
     * @param mixed $request
     */
    public function imageUpload($request)
    {
        $image = $request['img_path'];

        $input['images_name'] = str_slug($request['title']) . '.' . $image->getClientOriginalExtension();

        $destinationPath = storage_path('app/public/images/blogs');

        return $image->move($destinationPath, $input['images_name']);
    }

}
