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
        $blogs = DB::select('select * from blog');
        return $blogs;
    }

    // public function sortByDate()
    // {
    //     $blogs = DB::select('SELECT * from blog ORDER BY date DESC');
    //     return $blogs;
    // }
}
