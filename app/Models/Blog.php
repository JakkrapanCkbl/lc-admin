<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = [
        'id', 'header', 'description', 'date', 'type', 'link', 'thumbnailpic'
    ];

    public function index()
    {
        $blogs = DB::select('select * from blog ORDER BY date DESC');
        return $blogs;
    }

    //sorting button in blog-sidebar -> blogloop.blade
    public function sortingBlog($tag)
    {
        //Check Tag 
        if ($tag == 'trend' or $tag == 'news' or $tag == 'research')
            $blogs = Blog::where('type', $tag)->orderBy('date', 'DESC')->paginate(2);
        else if ($tag = 'editorsPick')
            //todo
            $blogs = Blog::orderBy('date', 'DESC')->paginate(2);
        else //Default Order Date DESC
            $blogs = Blog::orderBy('date', 'DESC')->paginate(2);

        return $blogs->toArray()['data'];
    }
}
