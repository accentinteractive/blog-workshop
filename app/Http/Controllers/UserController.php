<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $authors = User::get();

        return view('users.index', compact('authors'));
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param $id
     *
     * @return Response
     */
    public function show(Request $request, $id)
    {
        $user = User::with('posts')->findOrFail($id);

        return view('users.show', compact('user'));
    }
}
