<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeApiController extends Controller
{
    public function index() {
        $employees = Employee::all();

        return json_encode($employees);
    }

    public function store(Request $request) {
        $user = Employee::create($request->only('name', 'email', 'address', 'phone'));

        if (!$user) {
            return response()->json(['error' => 'error'], 500);
        }

        return response()->json(['success' => 'success'], 200);
    }

    public function show($id) {
        $employee = Employee::find($id);

        return json_encode($employee);
    }

    public function update(Request $request, $id) {
        $user = Employee::find($id);

        if (!$user) {
            return response()->json(['error' => 'error'], 500);
        }

        $res = $user->fill($request->only('name', 'email', 'address', 'phone'))->save();

        if (!$res) {
            return response()->json(['error' => 'error'], 500);
        }

        return response()->json(['success' => 'success'], 200);
    }

    public function destroy($id) {
        $user = Employee::find($id);

        if (!$user) {
            return response()->json(['error' => 'error'], 500);
        }

        $res = $user->delete();

        if (!$res) {
            return response()->json(['error' => 'error'], 500);
        }

        return response()->json(['success' => 'success'], 200);
    }
}
