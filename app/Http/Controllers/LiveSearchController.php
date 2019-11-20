<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveSearchController extends Controller
{
    function index()
    {
        return view('Places.index');
    }

    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
        if($query != '')
        {
            $data = DB::table('places')
            ->where('nama', 'like', '%'.$query.'%')
            ->orWhere('deskripsi', 'like', '%'.$query.'%')
            ->orderBy('obyek_id')
            ->get(); 
        }
        else
        {
            $data = DB::table('places')
            ->orderBy('obyek_id')
            ->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr>
                    <td>'.$row->nama.'</td>
                    <td>'.$row->gambar.'</td>
                    <td>'.$row->jam_operasional.'</td>
                    <td>'.$row->deskripsi.'</td>
                    <td>'.$row->harga_tiket.'</td>
                    <td>'.$row->tempat_umum.' </td>
                </tr>
                ';
            }
        }
        else
        {
            $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
        }
        $data = array(
        'table_data'  => $output,
        'total_data'  => $total_row
        );

        echo json_encode($data);
        }
    }
}

