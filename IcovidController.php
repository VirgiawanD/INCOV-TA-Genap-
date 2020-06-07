<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IcovidController extends Controller
{
	public function index()
	{
		$data['icovid'] = \DB::table('t_icovid')->get();
		return view('icovid', $data);
	}

	public function create()
	{
		return view('formicovid');
	}

	public function store(Request $request)
	{
		$rule = [
			'daerah' => 'required|unique:t_icovid',
			'odp' => 'required',
			'pdp' => 'required',
			'positif' => 'required',
		];
		$this->validate($request, $rule);

		$input = $request->all();
		unset($input['_token']);
		$status = \DB::table('t_icovid')->insert($input);

		if ($status) {
			return redirect('/icovid')->with('success', 'Data berhasil ditambahkan');
		} else {
			return redirect('/icovid/create')->with('error', 'Data gagal ditambahkan');
		}
	}

	public function edit (Request $request, $id)
	{
		$data['icovid'] = \DB::table('t_icovid')->find($id);
		return view('formicovid', $data);
	}

	public function update(Request $request, $id)
	{
		$rule = [
			'daerah' => 'required',
			'odp' => 'required',
			'pdp' => 'required',
			'positif' => 'required',
		];
		$this->validate($request, $rule);

		$input = $request->all();
		unset($input['_token']);
		unset($input['_method']);

		$status = \DB::table('t_icovid')->where('id', $id)->update($input);

		if($status){
   			return redirect('/icovid')->with('success', 'Data berhasil diubah');
   		} else {
   		    return redirect('/icovid/create')->with('error', 'Data gagal diubah');
   		}
	}

	public function destroy(Request $request, $id)
   	{

 	  // $icovid  = \App\Icovid::find($id);
    //   $status = $icovid->delete();

      $status = \DB::table('t_icovid')->where('id', $id)->delete();

   		if($status){
   			return redirect('/icovid')->with('success', 'Data berhasil dihapus');
   		} else {
   			return redirect('/icovid/create')->with('error', 'Data gagal dihapus');
   		}
   	}
}
?>