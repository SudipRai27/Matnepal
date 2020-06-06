<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\BlogCategory;
use App\BlogComments;
use Image;
use Session;
use DB;
use File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public $image; 

    public function __construct()
    {
    	$this->image_path = 'images/blog_images/';
    }

  	public function getListBlog()
  	{
  		$blog = DB::table('blog')
  					->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
  					->select('category_name', 'blog.*')
  					->orderBy('created_at', 'DESC')
  					->paginate(3);

            /*echo '<pre>';
            print_r($blog);
            die();*/

  		return view('blog::blog.list-blog')->with('blog', $blog);
  	}

  	public function getCreateBlog()
  	{
  		$category = BlogCategory::pluck('category_name', 'id');
  		return view('blog::blog.create-blog')->with('category', $category);
  	}

  	public function postCreateBlog(Request $request)
  	{
    
  		$request->validate([
  			'title' => 'required', 
  			'content' => 'required', 
  			'blog_category_id' => 'required', 
  			'show_in_frontend' => 'required',  
  			'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096', 
  			]);

  		  $input = request()->all();
        if($request->hasFile('image')) 
        {
            $name = uniqid() . $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();
            $request->image->move(public_path(). '/'. $this->image_path, $name,$ext);
            $input['image'] = $name;
        }

        Blog::create($input);
        Session::flash('success-msg', 'Created Successfully');
        return redirect()->back();

  	}

  	public function getViewBlog($id)
  	{	
      /*$current_blog = Blog::findOrFail($id);
      $current_blog->view_count++;
      $current_blog->save();*/
  		$blog = DB::table('blog')
  					->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
  					->select('category_name', 'blog.*')
	  				->where('blog.id', $id)
	  				->first();

      $previous_blog = DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')
            ->where('blog.id', '<', $id)            
            ->first();      

      $next_blog = DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')
            ->where('blog.id', '>', $id)
            ->first();      
  
  		return view('blog::blog.view-blog')->with('blog', $blog)
                                         ->with('previous_blog', $previous_blog)
                                         ->with('next_blog', $next_blog);
  	}

  	public function getEditBlog($id)
  	{
  		$blog = Blog::findOrFail($id);
  		$category = BlogCategory::select('id', 'category_name')->get();
  		return view('blog::blog.edit-blog')->with('blog', $blog)
  										   ->with('category', $category);
  	}	

  	public function postEditBlog(Request $request, $id)
  	{
  		$request->validate([
  			'title' => 'required', 
  			'content' => 'required', 
  			'blog_category_id' => 'required', 
  			'show_in_frontend' => 'required',  
  			'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
  			]);
  		
        $input = request()->all();
        $blog = Blog::findOrFail($id);
    
        if($request->hasFile('image')) 
        {
            $image_path = public_path().'/'. $this->image_path . $blog->image;
            if(File::exists($image_path))
            {
                File::delete($image_path); 
            }

            $name = uniqid() . $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();
            $request->image->move(public_path(). '/'. $this->image_path, $name,$ext);
            $input['image'] = $name;
        }

        $blog->update($input); 
        Session::flash('success-msg', 'Edited Successfully'); 
        return redirect()->route('list-blog');

  	}

  	public function getDeleteBlog($id)
  	{
  		$blog = Blog::findOrFail($id);
  		$image_path = public_path().'/'. $this->image_path . $blog->image;
        if(File::exists($image_path))
        {
            File::delete($image_path); 
        }
        $blog->delete();
        Session::flash('success-msg', 'Deleted Successfully'); 
        return redirect()->back();
	  }

    public function getViewBlogComments($id)
    {
      $blog_comments = BlogComments::where('blog_id', $id)->get();
      return view('blog::blog.view-blog-comments')->with('blog_comments', $blog_comments);
    }   

    public function getDeleteBlogComments($id)
    {
      $blog_comment = BlogComments::findOrFail($id);
      $blog_comment->delete();
      Session::flash('success-msg', 'Deleted Successfully');
      return back();
    }

    //AJAX FUNCTIONS

    public function getSearchBlog(Request $request)
    {
      $input = $request->input; 

      if($request->ajax())
      {
          $blog = DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')
            ->orderBy('created_at', 'DESC')
            ->where('category_name', 'LIKE', '%'.$input.'%')
            ->orWhere('title', 'LIKE', '%'.$input.'%')
            ->get();

          return view('blog::blog.ajax-list-blog')->with('blog', $blog);
      }


    }
}
