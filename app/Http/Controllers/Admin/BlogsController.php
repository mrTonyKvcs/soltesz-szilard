<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    public function index()
    {
        return view('admin.blogs.index', ['blogs' => Blog::all()]);
    }

    public function store(Request $request)
    {
        $data = $this->validatedData($request);
        $data['slug'] = Str::slug($data['title']);
        if ($request->hasFile('img_path')) {
            $data['img_path'] = $this->storeImage($request);
        }
        Blog::create($data);

        return back()->with('success', 'Sikeresen feltetted az új olvasmányt!');
    }

    public function edit($id)
    {
        return view('admin.blogs.edit', ['blog' => Blog::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $data = $this->validatedData($request);
        $data['slug'] = Str::slug($data['title']);
        if ($request->hasFile('img_path')) {
            $data['img_path'] = $this->storeImage($request);
        } else {
            unset($data['img_path']);
        }
        $blog->update($data);

        return redirect('admin/olvasmanyok')->with('success', 'Sikeresen szerkesztetted az olvasmányt!');
    }

    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();

        return back()->with('success', 'Sikeresen törölted az olvasmányt!');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|max:200',
            'description' => 'required|string',
            'published_at' => 'required|date',
            'img_path' => 'nullable|image|max:5120',
        ]);
    }

    private function storeImage(Request $request): string
    {
        return $request->file('img_path')->store('images/blogs', 'public');
    }
}
