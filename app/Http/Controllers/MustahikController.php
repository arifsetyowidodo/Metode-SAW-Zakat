<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\HigherOrderBuilderProxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class MustahikController extends Controller
{
    public function index()
    {
        $number = 0;
        $mustahik = DB::table('mustahik')->get();
        return view('mustahik/mustahik', ['mustahik' => $mustahik, 'number' => $number]);
    }
    public function new()
    {
        return view('mustahik/new');
    }
    public function add(Request $request)
    {
        DB::table('mustahik')->insert([
            'mk_kk' => $request->mk_kk,
            'mk_mustahik' => $request->mk_mustahik,
            'mk_ttl' => $request->mk_ttl,
            // 'mk_agama' => $request->mk_agama,
            // 'mk_pendidikan' => $request->mk_pendidikan,
            // 'mk_kelamin' => $request->mk_kelamin,
            // 'mk_telefon' => $request->mk_telefon
        ]);

        // mendapatkan id mustahik
        $mk_id_str = DB::table('mustahik')->orderBy('mk_id', $direction = 'desc')->limit(1)->get([
            'mk_id'
        ]);

        $mk_id_int = (int) filter_var($mk_id_str, FILTER_SANITIZE_NUMBER_INT);

        // insert forenkey mustakik ke bobot
        DB::table('bobot')->insert([
            'bb_mk_id' => $mk_id_int,
        ]);

        // insert forenkey mustakik ke bobot
        DB::table('alamat')->insert([
            'al_mk_id' => $mk_id_int,
        ]);

        return redirect('mustahik');
    }

    public function detail($id)
    {
        $mustahik = DB::table('mustahik')->where('mk_id', $id)->get();
        return view('mustahik/detail', ['mustahik' => $mustahik]);
    }
    public function update(Request $request, $id)
    {
        DB::table('mustahik')->where('mk_id', $id)->update([
            'mk_kk' => $request->mk_kk,
            //'mk_mustahik' => $request->mk_mustahik,
            //'mk_ttl' => $request->mk_ttl,
            // 'mk_agama' => $request->mk_agama,
            // 'mk_pendidikan' => $request->mk_pendidikan,
            // 'mk_kelamin' => $request->mk_kelamin,
            // 'mk_telefon' => $request->mk_telefon
        ]);
        return redirect('mustahik');
    }
    public function delete($id)
    {
        DB::table('mustahik')->where('mk_id', $id)->delete();
        DB::table('bobot')->where('bb_mk_id', $id)->delete();
        DB::table('alamat')->where('al_mk_id', $id)->delete();
        return redirect('mustahik')->with('alert', 'Deleted!');
    }
}
