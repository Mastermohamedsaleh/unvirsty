<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Auth\StudentRequest;


class StudentController extends Controller
{
    public function store(StudentRequest $request)
    {

        if($request->authenticate()){

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::STUDENT);
        }

        return redirect()->back()->withErrors(['name' => 'Email Or Password Wrong !' ]);

    }

 
    public function destroy($id)
    {
        // Auth::guard('student')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        // return redirect('/login');


        return "mohaemd";

    }
}
