<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('users.list');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query'); 
      if($query != '')
      {
       $data = DB::table('users')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('type2', 'like', '%'.$query.'%')
         ->orWhere('type3', 'like', '%'.$query.'%')
         ->orWhere('type4', 'like', '%'.$query.'%')
         ->orWhere('statut', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();

      }
      else
      {
       $data = DB::table('users')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td><a href="/users/'.$row->id.'">'.$row->name.'</a></td>
         <td>'.$row->email.'</td>
         <td>'.$row->type2.'</td>
         <td>'.$row->type3.'</td>
         <td>'.$row->type4.'</td>
         <td>'.$row->statut.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">Aucun résultat pour cette recherche</td>
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
