<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    public function export()
    {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }

    public function import(Request $request)
    {
        (new EmployeesImport)->import($request->file('file'));
        return 'success file upload';
    }
}
