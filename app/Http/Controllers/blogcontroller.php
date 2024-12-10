<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); 
        return view('admin.blog.index',compact('blogs')); 
    }
    
    public function create()
    {
        return view('admin.blog.create'); 
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'image' => 'required|image', // Add validation rules for image upload
            'content' => 'required',
        ]);

      // Handle file upload
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $data['image'] = $imageName;
    }

    // Create a new blog post record with the validated data
    $blog = Blog::create($data);

    // Redirect to the index page with success message
    return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'image' => 'required|image', // Add validation rules for image upload
            'content' => 'required',
        ]);

        $blog = Blog::find($id);
        $blog->update($data);
        
        // Handle file upload if image is present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $blog->image = $imageName;
            $blog->save();
        }

        return redirect(route('admin.blog.index'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }
    
    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully');
    }
    

}
