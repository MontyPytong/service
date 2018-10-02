<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service_Entrie;
use App\Comment;

class Entries extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	
    public function index(){
        
		
        $datas = Service_Entrie::orderBy('created_AT', 'desc')->paginate(15);
        return view('test' , compact('datas'));
    }

    public function show(Service_Entrie $id){
        
        return view('show', compact('id'));

    }

    public function inregistrare(){

        return view('inregistrare');
    }

    public function store(){

        $this->validate(request(), [
            'nume'=> 'required',
            'produs'=> 'required',
            'sn'=> 'required',
            'defect'=> 'required',
            

        ]);

        Service_Entrie::create(request(['nume', 'produs', 'sn', 'defect']));
  

        return redirect('test');
    }
}

