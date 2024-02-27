<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['is_active'] = empty($data['is_active']) ? false : true;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $fileName);
            $data['image'] = $fileName;
        }
        Category::create($data);
        return redirect()->back()->with('message', 'tạo thành công');
    }

    public function delete($id) {
        $category = Category::find($id);
        $filePath = public_path('uploads/' . $category->image);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        Category::destroy($id);
        return redirect()->back()->with('message', 'xóa thành công');
    }

    public function edit($id) {

    }

    public function update($id) {

    }
}
