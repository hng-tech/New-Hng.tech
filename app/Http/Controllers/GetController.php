<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function HNG5()
    {
      $mobiles = new \ParseCsv\Csv();
      $mobiles->parse(storage_path('/storage/mobile.csv'));

      $marketers = new \ParseCsv\Csv();
      $marketers->parse(storage_path('/storage/marketer.csv'));

      $designers = new \ParseCsv\Csv();
      $designers->parse(storage_path('/storage/designer.csv'));


      $mls = new \ParseCsv\Csv();
      $mls->parse(storage_path('/storage/ml.csv'));


      $webs = new \ParseCsv\Csv();
      $webs->parse(storage_path('/storage/web.csv'));

      return view("hng5-finalists", [
        'mobiles'    => $mobiles->data,
        'marketers'  => $marketers->data,
        'designers'  => $designers->data,
        'mls'        => $mls->data,
        'webs'       => $webs->data
      ]);
    }






    public function Interns()
    {

          $data = file_get_contents(storage_path('/storage/data.json'));
          $interns = json_decode($data);
          $more_data = file_get_contents(storage_path('/storage/company.json'));
          $companies = json_decode($more_data);


          return view("interns", [
            'companies'   =>$companies,
            'interns'     => $interns
          ]);

    }




    public function JoinNow()
    {
      return view('join-now');
    }



    public function contact()
    {
      return view('contact');
    }
}
