<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContectsController extends Controller
{
    public function index()
    {
        $contacts = DB::table('contacts')->paginate(5);
        $emptyContacts = false;
        if (DB::table('contacts')->count() === 0) {
            $emptyContacts = true;
        }
        return view('contacts.index', ["contacts" => $contacts, "isEmptyContacts" => $emptyContacts]);
    }

    public function create()
    {
        return view('contacts.create', ["contact" => (object) ["fullName" => '',"phone" => '',"email" => '',"company" => ''],"isDisabled"=>false]);
    }

    public function store(Request $request)
    {
        DB::table('contacts')->insert([
            "fullName" => $request->fullName,
            "phone" => $request->phone,
            "email" => $request->email,
            "company" => $request->company
        ]);
        return redirect()->route('contacts.index');
    }
    private function getContact($id) {
        $contact = DB::table('contacts')->where('id',"=",$id)->get();
        if (count($contact) !== 1) {
            return null;
        };
        return $contact[0];
    }
    public function show($id) {
        $contact = $this->getContact($id);
        if ($contact === null) {
            return abort('404');
        }
        return view('contacts.show', ["contact" =>$contact ,"isDisabled"=>true]);
    }
    public function edit($id) {
        $contact = $this->getContact($id);
        if ($contact === null) {
            return abort('404');
        }
        return view('contacts.edit', ["contact" =>$contact ,"isDisabled"=>false]);
    }
    public function update(Request $request,$id) {
        DB::table('contacts')->where('id','=',$id)->update([
            "fullName" => $request->fullName,
            "phone" => $request->phone,
            "email" => $request->email,
            "company" => $request->company
        ]);
        return redirect()->route('contacts.edit',$id);
    }
    public function delete($id){
        DB::table('contacts')->delete($id);
        return redirect('/');
    }
}
