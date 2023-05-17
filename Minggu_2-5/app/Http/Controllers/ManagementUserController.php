<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index(){
        // return "Method untuk mengambil data";
        $nama = "al";
        $pelajaran = ["Literasi Digital","Workshop Web"];

        return view("home", compact('nama','pelajaran'));
    }

    public function create(){
        return "Method untuk menampilkan form untuk menambah data";
    }

    public function store(Request $request){
        return "Menthod untuk menciptakan data baru";
    }

    public function show($id){
        return "Method untuk mengambil satu data dengan 'id' " .$id;
    }

    public function edit($id){
        return "Method untuk menampilkan form edit dengan 'id' " .$id;
    }

    public function update($id){
        return "Method untuk mengubah data dengan 'id' " .$id;
    }

    public function destroyer($id){
        return "Method untuk menghapus data dengan 'id' " .$id;
    }
}
