<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return authors list
     * @return Iluminate\Http\Response
     */
    public function index(){

    }

    /**
     * Create an instance of Author
     * @return Iluminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Return an specific author
     * @return Iluminate\Http\Response
     */
    public function show($author){

    }

    /**
     * Update the information of an existing author
     * @return Iluminate\Http\Response
     */
    public function update(Request $request, $author){

    }

    /**
     * Removes an existing author
     * @return Iluminate\Http\Response
     */
    public function destroy($author){

    }


}
