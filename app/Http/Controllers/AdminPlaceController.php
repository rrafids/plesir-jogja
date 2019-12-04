<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Place;
use App\comment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use App\Traits\UploadTrait;

class AdminPlaceController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $place = Place::paginate(4);
        return view('admin/places/index', compact('place'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/places/addPlace');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'alpha' => ':attribute harus berupa huruf saja',
            'numeric' => ':attribute harus berupa angka saja',
        ];

        $attributes=[
            'name' =>'Nama Destinasi Wisata',
            'day' => 'Hari',
            'open' => 'Jam Buka',
            'close' => 'Jam Tutup',
            'price' => 'Harga Tiket',
            'facl' => 'Fasilitas',
            'desc' => 'Deskripsi' ,
            'gambar' => 'File Gambar'                        

        ];

    	$this->validate($request,[
            'name' => 'required',
            'day' => 'required',
            'open' => 'required',
            'close' => 'required',
            'price' => 'required|numeric',
            'facl' => 'required',
            'desc' => 'required', 
            'gambar' =>'required'

        ], $messages, $attributes);

		// menyimpan data file yang diupload ke variabel $file
		// $file = $request->file('gambar');

		// $nama_file = time()."_".$file->getClientOriginalExtension();

      	//         // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = '/images';
        // $file->move($tujuan_upload,$nama_file);
        // $insert['gambar'] = $nama_file;
        // $ww = public_path('/images');
        // $qq = $request->file('gambar');
        // Storage::put($qq, ('publges'));
        $c = $request->file('gambar')->store('/images');
        $p = str_replace('images/', '', $c);
        // $contents = Storage::get('gambar');

        // $image = $request->file('gambar');
        // $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        // $destinationPath = public_path('/images');
        // $image->move($destinationPath, $input['imagename']);

        // $fileName = time().'.'.$request->gambar->getClientOriginalExtension();  


        // $fileName = time().'.'.$request->gambar->extension();  

        // $request->file->move(public_path('images'), $fileName);

    	Place::create([
            'nama'   => $request->name,
            'hari'    => $request->day,
            'buka'   => $request->open,
            'tutup'  => $request->close,
            'harga_tiket'  => $request->price,
            'deskripsi'   => $request->desc,
            'tempat_umum'   => $request->facl ,
            'gambar'    => $p
        ]);

        return redirect()->route('adminPlaces.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = Place::find($id);
        return view('admin/places/editPlace', ['place' => $place]);    
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
        $messages = [
            'required' => ':attribute wajib diisi',
            'alpha' => ':attribute harus berupa huruf saja',
            'numeric' => ':attribute harus berupa angka saja',
        ];

        $attributes=[
            'name' =>'Nama Destinasi Wisata',
            'day' => 'Hari',
            'open' => 'Jam Buka',
            'close' => 'Jam Tutup',
            'price' => 'Harga Tiket',
            'facl' => 'Fasilitas',
            'desc' => 'Deskripsi' ,
            'file' => 'File Gambar'                        

        ];

    	$this->validate($request,[
            'name' => 'required',
            'day' => 'required',
            'open' => 'required',
            'close' => 'required',
            'price' => 'required|numeric',
            'facl' => 'required',
            'desc' => 'required',                        
               
        ], $messages, $attributes);

        if ($request->file('gambar')){
            $c = $request->file('gambar')->store('/images');
            $p = str_replace('images/', '', $c); 
            $place = Place::find($id);
            $place->nama  = $request->name;
            $place->hari  = $request->day;
            $place->buka  = $request->open;
            $place->tutup = $request->close;
            $place->harga_tiket = $request->price;
            $place->deskripsi   = $request->desc;
            $place->tempat_umum = $request->facl;
            $place->gambar      = $p;
        }else{
            $place = Place::find($id);
            $place->nama  = $request->name;
            $place->hari  = $request->day;
            $place->buka  = $request->open;
            $place->tutup = $request->close;
            $place->harga_tiket = $request->price;
            $place->deskripsi   = $request->desc;
            $place->tempat_umum = $request->facl;
        };



        $place->save();
        return redirect()->route('adminPlaces.index'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = Place::find($id);
        $place->delete();

        return redirect()->route('adminPlaces.index');
    }
}
