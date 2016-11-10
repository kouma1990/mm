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


}
