<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class BookController extends Controller
{
    public function Index1()
    {
      $project1 = Book::paginate(10);
      return view('project1', ['project1' => $project1]);
    }

    public function Index2()
    {
      $project2 = Book::all()->sortByDesc('voter')->take(10);
      return view('project2', ['project2' => $project2]);
    }

    public function Index3()
    {
      $project3 = Book::all();
      return view('project3', ['project3' => $project3]);
    }

 
}
