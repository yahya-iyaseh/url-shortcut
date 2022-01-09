<?php

namespace App\Http\Controllers;

use App\Models\URLGenerator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class URLGeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generator = new URLGenerator;

        return view('user.create', compact('generator'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules());
        URLGenerator::create($this->attributes($request));
        notify()->success('The URL Shortcut created successfully', 'Create URL Shortcut');
        return redirect()->route('yahyaurl.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    protected function rules($id = null){
        return[
            'url'=> ['required', 'url', Rule::unique('u_r_l_generators', 'url')->ignore($id)],
            'data'=> ['nullable', 'string', 'max:255'],
        ];
    }
    protected function attributes($request = null){
                $un = uniqid();
                $urlBase =url('/');
                $url_generator = $urlBase . '/' . $un ;
                // dd($url_generator);
                $user_id = Auth::user()->id;
                if($request->access){
                    $access = true;
                }else{
                    $access = false;
                }
        return [
            'url' => $request->url,
            'un' => $un,
            'access'=> $access ,
            'url_generator'=> $url_generator,
            'user_id'=> $user_id ,
        ];
    }
}
