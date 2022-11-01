<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Notebook;

class NotebookApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(json_encode(Notebook::all()), 200)
            ->header('Content-Type', 'text/plain');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $requestValidator = $request->validate([
            "initials" => Rule::required(),
            "number" => Rule::required(),
            "email" => Rule::required()
        ]);
        if ($requestValidator) {
            $notebook = new Notebook();
            $notebook -> initials = $request['initials'];
            $notebook -> number = $request['number'];
            $notebook -> email = $request['email'];
            $notebook -> company = $request['company'];
            $notebook -> birthday = strtodate($request['birthday']);
            $notebook -> photo_url = $request['photo_url'];
            $notebook -> save();
            return response(json_encode($notebook), 201)
                ->header('Content-Type', 'text/plain');
        } else {
            return response(json_encode("Error"), 400)
                ->header('Content-Type', 'text/plain');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notebook = Notebook::all()->where('id', $id);
        if ($notebook){
            return response(json_encode($notebook), 200)
                ->header('Content-Type', 'text/plain');
        } else {
            return response(json_encode(), 204)
                ->header('Content-Type', 'text/plain');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Notebook->find($id);
            return response(json_encode($notebook), 201)
                ->header('Content-Type', 'text/plain');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
