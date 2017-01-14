<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Services\MasteService;

use App\Models\Maste;
use App\Models\Designer;
use App\Models\Printer;
use App\Models\Country;
use App\Models\Repository;

use App\Http\Requests\MasteRequest;

use Excel;
use Storage;

class MastesController extends Controller
{
    protected $services;

    public function __construct(MasteService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        //return \Auth::user()->name;
        //$mastes = Maste::all();
        $mastes = \Auth::user()->Maste()->orderBy('title', 'asc')->get();
        return view('mastes.index', compact('mastes'));
    }

    public function create()
    {
        $designers = \Auth::user()->Designer->lists("name","id");
        $printers = \Auth::user()->Printer->lists("name","id");
        $countries = \Auth::user()->Country->lists("name","id");
        $repositories = \Auth::user()->Repository->lists("name","id");

        return view('mastes.create', compact('designers', 'printers', 'countries', 'repositories'));
    }

    public function store(MasteRequest $request)
    {
        $maste = Maste::create($request->all());
        $maste->user_id = \Auth::user()->id;
        $maste->save();
        //$file_name = "images/" . $maste->id . ".png";
        //Storage::put('images/text.png', file_get_contents($request->file('image')));
        return redirect('mastes');
    }

    public function show($id)
    {
        $maste = Maste::findOrFail($id);
        if($maste->user_id != \Auth::user()->id) {
            return redirect()->back();
        }
        return view('mastes.show', compact('maste', 'image'));
    }

    public function edit($id)
    {

        $maste = Maste::findOrFail($id);
        if($maste->user_id != \Auth::user()->id) {
            return redirect()->back();
        }

        $designers = \Auth::user()->Designer->lists("name","id");
        $printers = \Auth::user()->Printer->lists("name","id");
        $countries = \Auth::user()->Country->lists("name","id");
        $repositories = \Auth::user()->Repository->lists("name","id");
        return view('mastes.edit', compact('maste', 'designers', 'printers', 'countries', 'repositories'));
    }

    public function update(MasteRequest $request, $id)
    {
        $maste = Maste::findOrFail($id);
        $maste->update($request->all());
        return redirect(url('mastes', [$maste->id]));
    }

    public function destroy($id)
    {
        $maste = Maste::findOrFail($id);
        if($maste->user_id != \Auth::user()->id) {
            return redirect()->back();
        }

        $maste->delete();
        \Session::flash('flash_message', 'マステを削除しました。');
        return redirect('mastes');
    }

    public function excel()
    {
        //
        $maste = \Auth::user()->Maste;

        Excel::create('plants', function($excel) use($maste) {
            $excel->sheet('Sheet 1', function($sheet) use($maste) {
                $sheet->fromArray($maste);
            });
        })->export('xls');
    }
}
