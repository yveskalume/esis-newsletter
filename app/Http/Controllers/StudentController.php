<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function registerPage() {
        $promotions = Promotion::all();
        return view("register",compact("promotions"));
    }
    public function register(Request $request) {

        $request->validate([
           "email" => "required",
           "phone" => "required",
           "promotion" => "required"
        ]);
        Student::create([
           "email" => $request->email,
           "phone" => $request->phone,
           "promotion_id" => $request->promotion,
        ]);

        return redirect()->back();
    }
}
