<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $urls = User::find(Auth::user()->id)->urls;
        return view('user.index', compact('urls'));
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
        $url =  URLGenerator::find($id);

        return view('user.edit', compact('url'));
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
        $url = URLGenerator::find($id);
        $this->validate($request, $this->rules($id));
        $url->update($this->attributes($request, $id));
        notify()->success('The URL Shortcut Updated successfully', 'Update URL Shortcut');
        return redirect()->route('yahyaurl.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        URLGEnerator::find($id)->delete();
        notify()->warning('The URL Was deleted successfully', 'Delete URL');
        return redirect()->route('yahyaurl.index');
    }

    protected function rules($id = null)
    {
        return [
            'url' => ['required', 'url', Rule::unique('u_r_l_generators', 'url')->ignore($id)],
            'data' => ['nullable', 'string', 'max:255'],
        ];
    }
    protected function attributes($request = null, $id = null)
    {
        if ($id) {
            $oldUrl = URLGenerator::find($id);

            if ($oldUrl->url == $request->url) {
                $un = $oldUrl->un;
                $url_generator = $oldUrl->url_generator;
            } else {
                $un = uniqid();
                $urlBase = url('/');
                $url_generator = $urlBase . '/' . $un;
            }
        } else {
            $un = uniqid();
            $urlBase = url('/');
            $url_generator = $urlBase . '/' . $un;
        }

// 61daf72a2d7d0
        $user_id = Auth::user()->id;
        if ($request->access) {
            $access = true;
        } else {
            $access = false;
        }
        return [
            'url' => $request->url,
            'un' => $un,
            'access' => $access,
            'url_generator' => $url_generator,
            'user_id' => $user_id,
        ];
    }
}
