<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'des' => 'required',
        'type' => 'required',
        'img' => 'required|image'
    ]);

    {$path = $request->file('img')->store('images', 'public');
    }

    Category::create([
        'title' => $request->title,
        'des' => $request->des,
        'img' => $path,
        'type' => $request->type
    ]);
    


    return back()->with('success', 'Category added successfully.');
}

        

   

}
