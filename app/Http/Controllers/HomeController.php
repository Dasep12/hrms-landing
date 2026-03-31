<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.home');
    }

    public function database_employee()
    {
        return view('home.database_employee');
    }

    public function struktur_employee()
    {
        return view('home.struktur_employee');
    }

    public function gradingupah_employee()
    {
        return view('home.gradingupah_employee');
    }

    public function dashboard_employee()
    {
        return view('home.dashboard_employee');
    }

    public function apps_employee()
    {
        return view('home.apps_employee');
    }
    public function schedule_employee()
    {
        return view('home.schedule_employee');
    }
    public function permit_employee()
    {
        return view('home.permit_employee');
    }

    public function payroll_employee()
    {
        return view('home.payroll_employee');
    }
    public function pph_employee()
    {
        return view('home.pph_employee');
    }
    public function benefit_employee()
    {
        return view('home.benefit_employee');
    }

    public function about_us()
    {
        return view('about.index');
    }

    public function price()
    {
        return view('price.index');
    }

    public function demo()
    {
        return view('demo.index');
    }
}
