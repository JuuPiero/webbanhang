<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with('images')->join('categories', 'categories.id', '=', 'products.category_id')->select('products.*', 'categories.name as category_name')->get();
        // dd($products[0]->images[0]);
        return view('admin.product.index', compact('products'));
    }

    public function create() {
        $categories = Category::all();
        return view('admin.product.create')->with([
            'categories' => $categories
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->all();
        $data['is_active'] = empty($data['is_active']) ? false : true;
        $product = Product::create($data);
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $index => $image) {
                $fileName = $product->id . '_' . $index . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $fileName);
                // $image->storeAs('uploads', $fileName, 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'name' => $fileName
                ]);
            }
        }
        return redirect()->back()->with('message', 'tạo thành công');
    }

    public function delete($id) {
        $images = ProductImage::where('product_id', $id)->get();
        foreach ($images as $image) {
            $filePath = public_path('uploads/' . $image->name);
            if (file_exists($filePath)) {
                unlink($filePath);
                $image->delete();
            }
        }
        Product::destroy($id);
        return redirect()->back()->with('message', 'xóa thành công');
    }

    public function edit($id) {

    }

    public function update($id) {

    }
}
