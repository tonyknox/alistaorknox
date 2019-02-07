<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter;
use App\Book;

class ChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapter = Chapter::orderBy('book_bkid','asc')->orderBy('chapid','asc')->paginate(15);
        $bks = Book::get();
        return view('Chapter.index', compact(['chapter']))->with('bks',$bks);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Chapter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Chapter::create($request->all());
        return redirect('chapters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function show($chap)
    {
        $chapter = Chapter::with('books')->findOrFail($chap);
        $id = $chapter->book_bkid;
        $bks = Book::where('bkid', $chapter->book_bkid)->first();
        $chaps = Chapter::where('book_bkid',$id)->get();
        
        list($prevPage,$nextPage) = nextBook('App\Chapter','chapid',$chapter->chapid,'chapid');
        list($prevChap,$nextChap) = nextChapter('App\Chapter','chapid',$chapter->chapid,'book_bkid',$chapter->book_bkid);
        
        return view('Chapter.show', compact(['chapter', 'books']))->with('chaps',$chaps)->with('prevPage', $prevPage)->with('nextPage', $nextPage)->with('nextChap', $nextChap)->with('prevChap', $prevChap)->with('bks', $bks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function edit($chap)
    {
        $chapter = Chapter::findOrFail($chap);
        return view('Chapter.edit', compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $chap)
    {
        $chapter = Chapter::findOrFail($chap);
        $chapter->update($request->all());
        return redirect('chapters'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function destroy($chap)
    {
        //
    }

     public function diy(){
        $howto =  Chapters::where('keyword','like','%diy%')->orderBy('sort_order')->paginate(15);
        return view('Chapter.index', compact('howto'));
    }
}
