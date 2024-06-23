<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
{
    $pageTitle = 'Employee List';

    // ELOQUENT
    $employees = Employee::all();

    return view('employee.index', [
        'pageTitle' => $pageTitle,
        'employees' => $employees
    ]);
}
public function create()
{
    $positions = position::all()
    return view('employee.create', compact('pageTitle', 'positions'));

}



