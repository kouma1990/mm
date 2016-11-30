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

use Excel;

class MastesController extends Controller
{
    public function index()
    {
        //$mastes = Maste::all();
        $mastes = Maste::orderBy('title', 'asc')->get();
        return view('mastes.index', compact('mastes'));
    }

    public function create()
    {
        $designers = Designer::lists("name","id");
        $printers = Printer::lists("name","id");
        $countries = Country::lists("name","id");
        $repositories = Repository::lists("name","id");

        return view('mastes.create', compact('designers', 'printers', 'countries', 'repositories'));
    }

    public function store(MasteRequest $request)
    {
        $maste = Maste::create($request->all());
        $file_name = "images/" . $maste->id . ".png";
        Storage::put('images/text.png', file_get_contents($request->file('image')));
        return redirect('mastes');
    }

    public function show($id)
    {
        $maste = Maste::findOrFail($id);
        //$image = Storage::get('images/text.png');
        //var_dump($image);
        return view('mastes.show', compact('maste', 'image'));
    }

    public function edit($id)
    {
        $designers = Designer::lists("name","id");
        $printers = Printer::lists("name","id");
        $countries = Country::lists("name","id");
        $repositories = Repository::lists("name","id");
        $maste = Maste::findOrFail($id);
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
        $maste->delete();
        \Session::flash('flash_message', 'マステを削除しました。');
        return redirect('mastes');
    }

    public function excel()
    {
        //
        $maste = Maste::all();

        Excel::create('plants', function($excel) use($maste) {
            $excel->sheet('Sheet 1', function($sheet) use($maste) {
                $sheet->fromArray($maste);
            });
        })->export('xls');
    }
}
