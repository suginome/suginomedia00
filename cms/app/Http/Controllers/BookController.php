<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BookController; 
use Illuminate\Http\Request;
use App\Models\Book;
use Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("/books");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// バリデーション
	   // $validator = Validator::make($request->all(), [
	   //     'item_name'   => 'required | min:3 | max:255',
	   //     'item_number' => 'required | min:1 | max:3',
	   //     'item_amount' => 'required | max:6',
	   //     'published'   => 'required',
	   // ]);

			// バリデーション:エラー時の処理
	   // if ($validator->fails()) {
	   //     return redirect('/')
	   //         ->withInput()
	   //         ->withErrors($validator);
	   // }
			
		// 登録処理
        $book = new Book;
        $book->user_name =    $request->user_name;
        $book->user_sakubun =  $request->user_sakubun;
        $book->user_price =  $request->user_price;
        $book->user_email =  $request->user_email;
        // $book->published =    $request->published;
        $book->save();
        return redirect('/');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $books = Book::orderBy('created_at', 'asc')->get();
        return view('user_list',['books'=> $books]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('booksedit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
		// バリデーション
		$validator = Validator::make($request->all(), [
		    'id' => 'required', // storeに対しての追加分
		    'item_name' => 'required|min:3|max:255',
		    'item_number' => 'required|min:1|max:3',
		    'item_amount' => 'required|max:6',
		    'published' => 'required',
		]);

		// バリデーション:エラー
		if ($validator->fails()) {
		    return redirect('/booksedit/'.$request->id)
		        ->withInput()
		        ->withErrors($validator);
		}

        $book = Book::find($request->id);
        $book->item_name =    $request->item_name;
        $book->item_number =  $request->item_number;
        $book->item_amount =  $request->item_amount;
        $book->published =    $request->published;
        $book->save(); 
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/');
    }
}