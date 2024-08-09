<?php
namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogText;
use App\Models\BlogTextPicture;
use App\Models\Comment;
use App\Models\Views;
use App\Actions\Imag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;


class BlogController extends Controller
{
    public function getAll(){
        $blogs = Blog::query()->orderBy('id', 'DESC')->get();
        return view('blogs', compact('blogs'));
    }
    public function getOne(Blog $blog){
        $view = new Views;
        $view -> page = $_SERVER['REQUEST_URI'];
        $view -> ip = $_SERVER['REMOTE_ADDR'];
        $view -> save();
        $viewpage = Views::where('page', $_SERVER['REQUEST_URI'])->count();
        $comments = Comment::orderBy('id','DESC')->where('blog_id',$blog->id)->get();
        return view ('blog', compact('blog','comments', 'viewpage'));
    }
    public function postBlogText(Blog $blog, Request $request)
    {
        BlogText::create([
            'user_id' => Auth::id(),
            'blog_id' => $blog->id,
            'body' => $request->body
        ]);
        return redirect()->back();
    }
    public function updateBlogText(BlogText $blog_text, Request $request)
    {
        $blog_text->update($request->all());
        return redirect()->back();
    }
    public function addPicture(Request $request, BlogText $blog_text)
    {
        $picture = App::make(Imag::class)->url($request->file('picture'), '/app/public/blogs/');
        $pic = new BlogTextPicture;
        $pic->picture = $picture;
        $pic->user_id = Auth::id();
        $pic->blog_text_id = $blog_text->id;
        $pic->name = $request->name ?? '';
        $pic->position = $request->position ?? '';
        $pic->save();
        return redirect()->back();
    }
    public function deletePicture(BlogTextPicture $blog_text_picture, Request $request)
    {
        if (file_exists(storage_path() . '/app/public/blogs/' . $blog_text_picture->picture)) {
            $pic = '/app/public/blogs/' . $blog_text_picture->picture;
            $pic_s = '/app/public/blogs/s_' . $blog_text_picture->picture;
            if (file_exists($pic)) {
                unlink(storage_path() . $pic);
            }
            if (file_exists($pic_s)) {
                unlink(storage_path() . $pic_s);
            }
            
        }
        BlogTextPicture::where('id', $blog_text_picture->id)->delete();
        return redirect()->back();
    }
    public function postAddComment(Blog $blog, Request $request){
       
        $comment = new Comment;
        $comment->username = Auth::user()->name; // $request->username
        $comment->user_id = Auth::user()->id??'';
        $comment->body = $request->body;
            $comment->blog_id = $blog->id;
        $comment->status = '';
        $comment->save();
        return redirect()->back();
       
    }
}
