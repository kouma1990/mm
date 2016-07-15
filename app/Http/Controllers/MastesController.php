<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Storage;

use App\Models\Maste;
use App\Models\Designer;
use App\Models\Printer;
use App\Models\Country;
use App\Models\Repository;
use App\Http\Requests\MasteRequest;

class MastesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mastes = Maste::all();
        $mastes = Maste::orderBy('title', 'asc')->get();
        return view('mastes.index', compact('mastes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designers = Designer::lists("name","id");
        $printers = Printer::lists("name","id");
        $countries = Country::lists("name","id");
        $repositories = Repository::lists("name","id");

        return view('mastes.create', compact('designers', 'printers', 'countries', 'repositories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasteRequest $request)
    {
        Maste::create($request->all());
        var_dump($request->file('image'));
        //var_dump($request->all());
        Storage::put('images/text.png', file_get_contents($request->file('image')));
        //return redirect('mastes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maste = Maste::findOrFail($id);
        //$image = Storage::get('images/text.png');
        //var_dump($image);
        return view('mastes.show', compact('maste', 'image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $designers = Designer::lists("name","id");
        $printers = Printer::lists("name","id");
        $countries = Country::lists("name","id");
        $repositories = Repository::lists("name","id");
        $maste = Maste::findOrFail($id);
        return view('mastes.edit', compact('maste', 'designers', 'printers', 'countries', 'repositories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MasteRequest $request, $id)
    {
        $maste = Maste::findOrFail($id);
        $maste->update($request->all());
        return redirect(url('mastes', [$maste->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maste = Maste::findOrFail($id);
        $maste->delete();
        \Session::flash('flash_message', 'マステを削除しました。');
        return redirect('mastes');
    }
}
