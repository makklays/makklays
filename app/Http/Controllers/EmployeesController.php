<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EmployeesController extends Controller
{
    public function showEmployees()
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        //$employees = DB::select('SELECT * FROM employees ');
        $employees = DB::table('employees')->paginate(10);

        if (isset($employees) && !empty($employees)) {
            foreach ($employees as $k => &$emp) {
                // add Name of company
                if (isset($emp->company_id) && !empty($emp->company_id)) {
                    $company = DB::selectOne('SELECT * FROM companies WHERE id=? ', [$emp->company_id]);
                    $emp->company = $company->name;
                } else {
                    $emp->company = '';
                }
            }
        }

        return view('employees.show', [
            'employees' => $employees,
        ]);
    }

    public function addEmployee(Request $request)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        // list of companies
        $companies = DB::select('SELECT * FROM companies ');

        // add a new employees
        if ($request->isMethod('post')) {
            $insert = DB::insert('INSERT INTO employees SET `lastname`=?, firstname=?, company_id=?, phone=?, email=?', [
                $request->lastname,
                $request->firstname,
                $request->company_id,
                (isset($request->phone) && !empty($request->phone) ? $request->phone : null),
                (isset($request->email) && !empty($request->email) ? $request->email : null),
            ]);

            return redirect('/employees')->with([
                'flash_message' => 'Your employee, '.$request->lastname.' '.$request->firstname.' has been add successfully!',
                'flash_type' => 'success'
            ]);
        }

        return view('employees.add', [
            'companies' => $companies
        ]);
    }

    public function edit(Request $request, $id)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        if (!isset($id) || !empty($id)) redirect('/employees');

        // update data of company
        if ($request->isMethod('post') && isset($request->lastname) && !empty($request->lastname)) {
            DB::update('UPDATE `employees` SET `lastname`=?, `firstname`=?, `company_id`=?, `phone`=?, `email`=? WHERE id=?', [
                $request->lastname,
                $request->firstname,
                $request->company_id,
                (isset($request->phone) && !empty($request->phone) ? $request->phone : null),
                (isset($request->email) && !empty($request->email) ? $request->email : null),
                $id
            ]);

            return redirect('employees')->with([
                'flash_message' => 'Your employee, '.$request->lastname.' '.$request->firstname.' has been update successfully!',
                'flash_type' => 'success'
            ]);
        }

        // get companies
        $companies = DB::select('SELECT * FROM companies ');
        // get employee
        $employee = DB::selectOne('SELECT * FROM employees WHERE id=?', [$id]);

        return view('employees.edit', [
            'employee' => $employee,
            'companies' => $companies
        ]);
    }

    public function delete($id)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        if (!isset($id) || empty($id)) {
            return redirect('employees')->with([
                'flash_message' => 'Error! Don\'t have ID in url',
                'flash_type' => 'danger'
            ]);
        }

        // get employee
        $employee = DB::selectOne('SELECT * FROM employees WHERE id = ?', [$id]);

        // delete employee
        if (isset($employee) && !empty($employee)) {
            // fullname employee
            $fullname = $employee->lastname.' '.$employee->firstname;

            // delete empoyee
            DB::delete('DELETE FROM employees WHERE id = ?', [$id]);

            return redirect('employees')->with([
                'flash_message' => 'Your employee, '.$fullname.' has been delete successfully!',
                'flash_type' => 'success'
            ]);

        } else {
            return redirect('employees')->with([
                'flash_message' => 'Error! Employee don\'t exists!',
                'flash_type' => 'danger'
            ]);
        }
    }
}