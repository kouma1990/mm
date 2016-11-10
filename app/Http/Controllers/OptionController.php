<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Designer;
use App\Models\Printer;
use App\Models\Country;
use App\Models\Repository;

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

    public function createDesigner()
    {
        return 0;
    }

    public function createPrinter()
    {
        return 0;
    }

    public function createCountry()
    {
        return 0;
    }

    public function createRepository()
    {
        return 0;
    }


}
