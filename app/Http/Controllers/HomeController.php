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

    public function send_email(Request $request)
    {
        $validated = $request->validate([
            'nama'        => 'required|string|max:100',
            'email'       => 'required|email',
            'tanggal'     => 'required|date',
            'perusahaan'  => 'required|string|max:150',
        ], [
            'nama.required'        => 'Nama wajib diisi',
            'email.required'       => 'Email wajib diisi',
            'email.email'          => 'Format email tidak valid',
            'tanggal.required'     => 'Tanggal wajib diisi',
            'tanggal.date'         => 'Format tanggal tidak valid',
            'perusahaan.required'  => 'Perusahaan wajib diisi',
        ]);
        $email = ['depiyawandasep13@gmail.com', 'developer@bithrms.com'];

        $data = $request->all();

        try {
            for ($i = 0; $i < count($email); $i++) {
                \Mail::to($email[$i])->send(new \App\Mail\SendEmail($data));
            }
        } catch (\Exception $e) {
            return 'Failed to send email: ' . $e->getMessage();
        }
        return redirect()->route('demo.index')->with('success', 'Email sent successfully!');
    }


    // publikasi 
    public function pph()
    {
        return view('publication.pph');
    }

    public function overtime()
    {
        return view('publication.overtime');
    }

    public function kompen_thr()
    {
        return view('publication.kompen_thr');
    }
}
