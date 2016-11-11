<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Designer;
use App\Models\Printer;
use App\Models\Country;
use App\Models\Repository;

use App\Http\Requests\DesignerRequest;
use App\Http\Requests\PrinterRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\RepositoryRequest;

class OptionController extends Controller
{
    public function index()
    {
        $designers = Designer::get();
        $printers = Printer::get();
        $countries = Country::get();
        $repositories = Repository::get();

        return view('option.index', compact("designers", "printers", "countries", "repositories"));
    }

    /*
    * 新規作成
    */
    public function storeDesigner(DesignerRequest $request)
    {
        Designer::create($request->all());
        return redirect('option');
    }

    public function storePrinter(PrinterRequest $request)
    {
        Printer::create($request->all());
        return redirect('option');
    }

    public function storeCountry(CountryRequest $request)
    {
        Country::create($request->all());
        return redirect('option');
    }

    public function storeRepository(RepositoryRequest $request)
    {
        Repository::create($request->all());
        return redirect('option');
    }

    /*
    * 更新
    */
    public function updateDesigner(DesignerRequest $request, $id)
    {
        $disigner = Designer::findOrFail($id);
        $disigner->update($request->all());
        return redirect('option');
    }

    public function updatePrinter(PrinterRequest $request, $id)
    {
        $printer = Printer::findOrFail($id);
        $printer->update($request->all());
        return redirect('option');
    }

    public function updateCountry(CountryRequest $request, $id)
    {
        $country = Country::findOrFail($id);
        $country->update($request->all());
        return redirect('option');
    }

    public function updateRepository(RepositoryRequest $request, $id)
    {
        $repository = Repository::findOrFail($id);
        $repository->update($request->all());
        return redirect('option');
    }

    /*
    * 削除
    */
    public function destoryDesigner($id)
    {
        Designer::find($id)->delete();
        return redirect()->back();
    }

    public function destoryPrinter($id)
    {
        Printer::find($id)->delete();
        return redirect()->back();
    }

    public function destoryCountry($id)
    {
        Country::find($id)->delete();
        return redirect()->back();
    }

    public function destoryRepository($id)
    {
        Repository::find($id)->delete();
        return redirect()->back();
    }


}
