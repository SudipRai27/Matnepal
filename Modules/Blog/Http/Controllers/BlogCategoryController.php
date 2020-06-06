<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\BlogCategory;
use Modules\Blog\Entities\Blog;
use Session;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function getListCategory()
    {
        $category = BlogCategory::orderBy('id', 'DESC')->paginate(6);
        return view('blog::category.list-category')->with('category', $category);
    }

    public function getAddCategory()
    {
        return view('blog::category.add-category');
    }

    public function postAddCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required', 
            'alias' => 'required|unique:blog_category,alias'
            ]);
        $input = request()->all();
        BlogCategory::create($input);
        Session::flash('success-msg', 'Created Successfully'); 
        return redirect()->back();
    }

    public function getEditCategory($id)
    {
        $category = BlogCategory::findOrFail($id); 
        return view('blog::category.edit-category')->with('category', $category);
    }

    public function postEditCategory(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required', 
            'alias' => 'required|unique:blog_category,alias,'. $id
            ]);

        $category = BlogCategory::findOrFail($id); 
        $input = request()->all(); 
        $category->update($input); 
        Session::flash('success-msg', 'Updated Successfully'); 
        return redirect()->back();
    }

    public function getDeleteCategory($id)
    {
        $blog = Blog::where('blog_category_id', $id)->get();
        if(count($blog))
        {
            Session::flash('error-msg', 'You have existing blog under this category. Please delete the blog before deleting category');
            return redirect()->back();
        }
        $category = BlogCategory::findOrFail($id); 
        $category->delete();
        Session::flash('success-msg', 'Deleted Successfully');
        return redirect()->back();
    }
}
