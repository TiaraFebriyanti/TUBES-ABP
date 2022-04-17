<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SumbarrancakModel;
use App\Models\User;
class UserController extends Controller
{
    public function tampiluser()
    {
        $modelweb = SumbarrancakModel::select('*')
        ->get();
        return view('tampiluser', ['modelweb' => $modelweb]);
        
    }

    public function tambahuser()
    {
        return view('tambahuser');
    }

    public function simpanuser(Request $request)
    {
        $modelweb = SumbarrancakModel::create([
            'id_model' => $request->id_model,
            'nama_model' => $request->nama_model,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('tampiluser');
    }

    public function ubahuser() {

    $modelweb = SumbarrancakModel::select('*')
             
             ->get();

    return view('ubahuser', ['modelweb' => $modelweb]);
    
          
}

public function updateuser(Request $request)
{
   $modelweb = SumbarrancakModel::where('id_model', $request->id_model)
             ->update([
                    'nama_model' => $request->nama_model,
                    'tempatlahir' => $request->tempatlahir,
                    'tanggallahir' => $request->tanggallahir,
                    'alamat' => $request->alamat,
                    'no_hp' => $request->no_hp,
             ]);

   return redirect()->route('tampiluser');
}

public function hapususer()
{
    $modelweb = SumbarrancakModel::select('nama_model')
              ->delete();

    return redirect()->route('tampiluser');
}

}