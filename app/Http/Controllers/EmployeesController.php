<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EmployeesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function showEmployees()
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        //$employees = DB::select('SELECT * FROM employees ');
        $employees = DB::table('employees')
            ->orderBy('firstname')
            ->orderBy('lastname')
            ->paginate(10);

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

        return view('adminka.employees.show', [
            'employees' => $employees,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
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

            return redirect( route('employees', app()->getLocale() ))->with([
                'flash_message' => trans('site.Data_employee_was_add', ['firstname' => $request->firstname, 'lastname' => $request->lastname]),
                'flash_type' => 'success'
            ]);
        }

        return view('adminka.employees.add', [
            'companies' => $companies
        ]);
    }

    /**
     * @param Request $request
     * @param $lang
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function edit(Request $request, $lang, $id)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        if (!isset($id) || !empty($id)) redirect( route('employees', app()->getLocale()) );

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

            return redirect( route('employees', [app()->getLocale(), 'id' => $id]) )->with([
                'flash_message' => trans('site.Data_employee_was_update', ['firstname' => $request->firstname, 'lastname' => $request->lastname]),
                'flash_type' => 'success'
            ]);
        }

        // get companies
        $companies = DB::select('SELECT * FROM companies ');
        // get employee
        $employee = DB::selectOne('SELECT * FROM employees WHERE id=?', [$id]);

        return view('adminka.employees.edit', [
            'employee' => $employee,
            'companies' => $companies
        ]);
    }

    /**
     * @param $lang
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($lang, $id)
    {
        // Only loggined
        if (!Auth::check()) return redirect('/');

        if (!isset($id) || empty($id)) {
            return redirect( route('employees', app()->getLocale()) )->with([
                'flash_message' => 'Error! Don\'t have ID in url',
                'flash_type' => 'danger'
            ]);
        }

        // get employee
        $employee = DB::selectOne('SELECT * FROM employees WHERE id = ?', [$id]);

        // delete employee
        if (isset($employee) && !empty($employee)) {
            // delete empoyee
            DB::delete('DELETE FROM employees WHERE id = ?', [$id]);

            return redirect( route('employees', app()->getLocale()) )->with([
                'flash_message' => trans('site.Data_employee_was_delete', ['firstname' => $employee->firstname, 'lastname' => $employee->lastname]),
                'flash_type' => 'success'
            ]);

        } else {
            return redirect( route('employees', app()->getLocale()) )->with([
                'flash_message' => 'Error! Employee don\'t exists!',
                'flash_type' => 'danger'
            ]);
        }
    }
}
