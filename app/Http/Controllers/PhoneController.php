<?php

namespace App\Http\Controllers;

use App\PhoneModel;
use Illuminate\Support\Facades\Input;

class PhoneController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phone = PhoneModel::all();
        return view('admin.phone.list')->with('phone_in_view', $phone);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phone = new PhoneModel();
        $action = '/admin/phone/store';
        return view('admin.phone.form')
            ->with('phone', $phone)
            ->with('action', $action);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phone = new PhoneModel();
        $phone->name = Input::get('name');
        $phone->categoryId = Input::get('categoryId');
        $phone->price = Input::get('price');
        $phone->description = Input::get('description');
        $phone->images = Input::get('images');
        $phone->content = Input::get('content');
        $phone->note = Input::get('note');
        $phone->save();
        return redirect('/admin/phone/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = '/admin/phone/update';
        $phone = PhoneModel::find($id);
        if ($phone == null) {
            return view('404');
        }
        return view('admin.phone.form')
            ->with('phone', $phone)
            ->with('action', $action);
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
        $id = Input::get('id');
        $phone = Bakery::find($id);
        if ($phone == null) {
            return view('404');
        }
        $phone->name = Input::get('name');
        $phone->categoryId = Input::get('categoryId');
        $phone->price = Input::get('price');
        $phone->description = Input::get('description');
        $phone->images = Input::get('images');
        $phone->content = Input::get('content');
        $phone->note = Input::get('note');
        $phone->save();
        return redirect('/admin/phone/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = PhoneModel::find($id);
        if ($phone == null) {
            return view('404');
        }
        $phone->delete();
        return redirect('/admin/phone/list');
    }

    public function delete($id)
    {
        $phone = PhoneModel::find($id);
        if ($phone == null) {
            return view('404');
        }
        return view('admin.phone.confirm_delete')->with('phone', $phone);
    }
}
