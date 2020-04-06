<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
	public function __construct() {
		//
	}
	
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$quotes = Quote::get();
		return view('quotes.index', compact('quotes'));
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
		$quote = array();
		for ($x = 0; $x <= 39; $x++) {
			$content = file_get_contents('http://api.forismatic.com/api/1.0/?format=json&lang=en&method=getQuote');
			$quote[$x] = json_decode($content, true);
			//$quote[$x] = $this->getQuote();
			$quote[$x]->create();
		}
//		return dd($quote);
	}
	
	/**
	* Display the specified resource.
	*
	* @param  \App\Quote  $quote
	* @return \Illuminate\Http\Response
	*/
	public function show(Quote $quote)
	{
		//
	}
	
	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Quote  $quote
	* @return \Illuminate\Http\Response
	*/
	public function edit(Quote $quote)
	{
		//
	}
	
	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Quote  $quote
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Quote $quote)
	{
		//
	}
	
	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Quote  $quote
	* @return \Illuminate\Http\Response
	*/
	public function destroy(Quote $quote)
	{
		//
	}
	
	public function getQuote() {
		//
	}
	
	public function showQuote(Quote $quote) {
		$data = Quote::find($quote);
		return $data;
	}
	
	public function getQuotes() {
		$quotes = Quote::get();
		return $quotes;
	}
	
	public function randQuote() {
//		$rnum = rand(1, 40);
		$rnum = 5;
//		$data = Quote::find($rnum);
		return $rnum;
	}
	
	public function newQuotes() {
		$data = array();
		for ($x = 0; $x <= 39; $x++) {
			$data[$x] = $this->newQuote();
			$quote = new Quote;
			$quote->quote = $data[$x]['quoteText'];
			$quote->author = $data[$x]['quoteAuthor'];
			$quote->save();
			sleep(2);
		}
		return $data;
	}
	
	public function newQuote() {
		$data = array();
		$content    = file_get_contents('http://api.forismatic.com/api/1.0/?format=json&lang=en&method=getQuote');
		$data  = json_decode($content, true);
		return $data;
	}
}
