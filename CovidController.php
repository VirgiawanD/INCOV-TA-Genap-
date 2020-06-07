<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{
   public function covid()
   {
   	 $data['covid'] = \DB::table('t_covid')->get();
		 return view('covid', $data);

	// $data['covid'] = \App\Covid::orderBy('tanggal')->get();
 //    return view('covid', $data);

   }

   public function create()
   {
   	return view('formcovid');
   }

   	public function store(Request $request)
   	{
     	$rule = [
      	'daerah' => 'required|unique:t_covid',
      	'meninggal' => 'required',
        'sembuh' => 'required',
    	];
     	$this->validate($request, $rule);

     	$input = $request->all();
     	unset($input['_token']);
     	$status = \DB::table('t_covid')->insert($input);

     	// $covid = new \App\Covid;
     	// $covid->tanggal = $input['tanggal'];
     	// $covid->file = $input['file'];
     	// $status = $covid->save();

     	if ($status) {
      	return redirect('/covid')->with('success', 'Data berhasil ditambahkan');
     	} else {
      	return redirect('/covid/create')->with('error', 'Data gagal ditambahkan');
     	}
	}

	public function edit (Request $request, $id)
	{
		$data['covid'] = \DB::table('t_covid')->find($id);
		return view('formcovid', $data);
	}

	public function update(Request $request, $id)
	{
   		$rule = [
   			'daerah' => 'required',
        'meninggal' => 'required',
        'sembuh' => 'required',
   		];
   		$this->validate($request, $rule);

   		$input = $request->all();
      unset($input ['_token']);
      unset($input ['_method']);

      $status = \DB::table('t_covid')->where('id', $id)->update($input);

   		if($status){
   			return redirect('/covid')->with('success', 'Data berhasil diubah');
   		} else {
   		    return redirect('/covid/create')->with('error', 'Data gagal diubah');
   		}
   	}

   	public function destroy(Request $request, $id){

      // $covid  = \App\Covid::find($id);
      // $status = $covid->delete();

      $status = \DB::table('t_covid')->where('id', $id)->delete();

      if($status){
        return redirect('/covid')->with('success', 'Data berhasil dihapus');
      } else {
        return redirect('/covid/create')->with('error', 'Data gagal dihapus');
      }
    }

    public function pageone()
    {
      $data['covid'] = \DB::table('t_covid')->get();
      return view('homepage', $data);
    }

    public function pagetwo()
    {
      $data['covid'] = \DB::table('t_icovid')->get();
      return view('homepage', $data);
    }

    public function pageabout()
    {
      $data['covid'] = \DB::table('t_icovid')->get();
      return view('about', $data);
    }
}
?>