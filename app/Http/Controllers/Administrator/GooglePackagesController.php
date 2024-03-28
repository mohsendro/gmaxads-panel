<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GooglePackage;

class GooglePackagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('CheckRole:administrator');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(GooglePackage $GooglePackages)
    {
        $GooglePackages = $GooglePackages::all();
        return view('pages.administrator.package.google.index')->with('GooglePackages', $GooglePackages);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.administrator.package.google.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        // $rules = array(
        //     'currency_price'  => 'required',
        //     'main_price'      => 'required',
        // );
        // $validator = Validator::make(Input::all(), $rules);

        // process the login
        // if ($validator->fails()) {
        //     return Redirect::to('google-packages/create')
        //         ->withErrors($validator);
        // } else {
            // store
            $GooglePackage = new GooglePackage;
            $GooglePackage->currency_price  = $request->currency_price; //Input::get('currency_price');
            $GooglePackage->main_price      = $request->main_price; //Input::get('main_price');
            $GooglePackage->offer      = 1; 
            $GooglePackage->description      = 1; 
            $GooglePackage->bid      = 1; 
            $GooglePackage->currency      = 1; 
            // $GooglePackage->created_at      = ''; 
            // $GooglePackage->updated_at      = ''; 
            $GooglePackage->save();

            // redirect
            // Session::flash('message', 'با موفقیت ثبت شد!');
            // return Redirect::to('GooglePackages.index');
            return redirect()->route('GooglePackages.index');
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
