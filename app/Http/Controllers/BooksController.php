<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
Use App\Chapter;

class BooksController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::with('chapters')->orderby("book_sort")->paginate(10);
        return view('Book.index', compact(['book', 'chapters']));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bk)
    {
        $book = Book::with('chapters')->findOrFail($bk);
        $bks = Book::get();

        $info = Chapter::where('book_bkid',$book->bkid)->get()->pluck('chapinfo','chapid');
        
        
        list($prevPage,$nextPage) = nextBook('App\Book','bkid',$book->bkid,'');

        
        return view('Book.show', compact('book','chapters'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('info',$info)->with('bks',$bks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($bk)
    {
        $book = Book::findOrFail($bk);
        return view('Book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bk)
    {
        $book = Book::findOrFail($bk);
        $book->update($request->all());
        return redirect('books'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($bk)
    {
        //
    }

    public function menu($menu)
    {
        if($menu == 'all')
        {
            $book = Book::paginate(10);
        }
        else{
            $book =  Book::where('bktype', $menu)->paginate(10);
        }
        return view('Book.index', compact('book'));
    }
    
}
