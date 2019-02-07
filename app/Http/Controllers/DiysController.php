<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter;
use App\Book;

class DiysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapter = Chapter::with('books')->whereNotNull('keyword')->get();
        $book = Book::get();

     	$build = [];
     	$mud = [];
     	$design = [];

     	foreach($chapter as $chap){
     		if(preg_match('/design/',$chap->keyword)){
     			array_push($design,$chap);
     		}
     		if(preg_match('/build/',$chap->keyword)){
     			array_push($build,$chap);
     		}
     		if(preg_match('/mud/',$chap->keyword)){
     			array_push($mud,$chap);
     		}
     	}

        return view('Diy.index', compact(['books','design','build','mud']))->with('book',$book);
    }

}
