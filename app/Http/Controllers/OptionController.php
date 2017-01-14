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
        $designers = \Auth::user()->Designer;
        $printers = \Auth::user()->Printer;
        $countries = \Auth::user()->Country;
        $repositories = \Auth::user()->Repository;

        return view('option.index', compact("designers", "printers", "countries", "repositories"));
    }

    /*
    * 新規作成
    */
    private function storeModel($request, $Model, $type=1)
    {
        $model = $Model::create([
            "user_id"=>\Auth::user()->id,
            "name"=>$request->input("name"),
        ]);
        \Session::flash('flash_message', $model->name.'を追加しました。');
        return redirect('option')->with("selected", $type);
    }

    public function storeDesigner(DesignerRequest $request)
    {
        return $this->storeModel($request, "App\Models\Designer", 1);
    }

    public function storePrinter(PrinterRequest $request)
    {
        return $this->storeModel($request, "App\Models\Printer", 2);
    }

    public function storeCountry(CountryRequest $request)
    {
        return $this->storeModel($request, "App\Models\Country", 3);
    }

    public function storeRepository(RepositoryRequest $request)
    {
        return $this->storeModel($request, "App\Models\Repository", 4);
    }

    /*
    * 更新
    */
    private function updateModel($request, $id, $Model)
    {
        $model = $Model::findOrFail($id);
        $model->update($request->all());
        \Session::flash('flash_message', '編集しました。');
        return redirect('option');
    }

    public function updateDesigner(DesignerRequest $request, $id)
    {
        return $this->updateModel($request, $id, "App\Models\Designer");
    }

    public function updatePrinter(PrinterRequest $request, $id)
    {
        return $this->updateModel($request, $id, "App\Models\Printer");
    }

    public function updateCountry(CountryRequest $request, $id)
    {
        return $this->updateModel($request, $id, "App\Models\Country");
    }

    public function updateRepository(RepositoryRequest $request, $id)
    {
        return $this->updateModel($request, $id, "App\Models\Repository");
    }

    /*
    * 削除
    */
    private function destoryModel($id, $Model)
    {
        $model = $Model::find($id);
        if($model->Maste->count() > 0) {
            return redirect()->back()->withErrors(array("test" => "利用しているマステが存在するため、".$model->name."は削除できませんでした。"));
        } else {
            \Session::flash('flash_message', $model->name.'を削除しました。');
            $model->delete();
        }
        return redirect()->back();
    }

    public function destoryDesigner($id)
    {
        return $this->destoryModel($id, "App\Models\Designer");
    }

    public function destoryPrinter($id)
    {
        return $this->destoryModel($id, "App\Models\Printer");
    }

    public function destoryCountry($id)
    {
        return $this->destoryModel($id, "App\Models\Country");
    }

    public function destoryRepository($id)
    {
        return $this->destoryModel($id, "App\Models\Repository");
    }


}
