<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Promotion;
use App\Models\Student;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(): Factory|View|Application
    {
        $students = Student::all();
        $promotions = Promotion::all();
        $messages = Message::all();
        return view("admin.dashboard",[
            "students" => $students,
            "promotions" => $promotions,
            "messages" => $messages
        ]);
    }
}
