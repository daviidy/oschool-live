<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CsvData;
use App\Contact;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\CsvImportRequest;

class ImportController extends Controller
{
  public function getImport()
  {
      return view('emails.import');
  }

  public function parseImport(CsvImportRequest $request)
{
  $path = $request->file('csv_file')->getRealPath();

  if ($request->has('header')) {
      $data = Excel::load($path, function($reader) {})->get()->toArray();
  } else {
      $data = array_map('str_getcsv', file($path));
  }

  if (count($data) > 0) {
      if ($request->has('header')) {
          $csv_header_fields = [];
          foreach ($data[0] as $key => $value) {
              $csv_header_fields[] = $key;
          }
      }
      $csv_data = array_slice($data, 3);

      $csv_data_file = CsvData::create([
          'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
          'csv_header' => $request->has('header'),
          'csv_data' => json_encode($data)
      ]);
  } else {
      return redirect()->back();
  }

  return view('emails.import_fields', compact( 'csv_header_fields', 'csv_data', 'csv_data_file'));
}


public function processImport(Request $request)
{
    $data = CsvData::find($request->csv_data_file_id);
    $csv_data = json_decode($data->csv_data, true);
    foreach ($csv_data as $row) {
        $contact = new Contact();
        foreach (config('app.db_fields') as $index => $field) {
            if ($data->csv_header) {
                $contact->$field = $row[$request->fields[$field]];
            } else {
                $contact->$field = $row[$request->fields[$index]];
            }
        }
        $contact->save();
    }

    return view('emails.import_success');
}


}
