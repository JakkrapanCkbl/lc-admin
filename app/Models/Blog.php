<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'id', 'header', 'description', 'date', 'type', 'link', 'thumbnailpic'
    ];

    public function index()
    {
        $blogs = DB::all();
        dd("calling Blogs");
        return $blogs;
    }
}
