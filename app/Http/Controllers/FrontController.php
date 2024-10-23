<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use App\Models\CompanyAbout;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\ProjectClient;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        // Kode logika untuk halaman utama
        $statistics = CompanyStatistic::take(4)->get();
        $principles = OurPrinciple::take(3)->get();
        $products = Product::take(10)->get();
        $teams = OurTeam::take(7)->get();
        $testimonials = Testimonial::take(4)->get();
        $hero_section = HeroSection::orderByDesc('id')->take(1)->get();
        $clients = ProjectClient::take(10)->get();
        $abouts = CompanyAbout::take(2)->get();
        return view('front.index', compact('statistics', 'principles', 'products', 'teams', 'testimonials', 'hero_section', 'clients', 'abouts')); // Ganti dengan view yang sesuai
    }

    public function team()
    {
        $teams = OurTeam::take(7)->get();
        $statistics = CompanyStatistic::take(4)->get();
        return view('front.team', compact('teams', 'statistics'));
    }

    public function about()
    {
        $teams = OurTeam::take(5)->get();
        $abouts = CompanyAbout::take(2)->get();
        return view('front.about', compact('teams', 'abouts'));
    }

    public function appointment()
    {
        $principles = OurPrinciple::take(10)->get();
        dd($principles);
        return view('front.appointment', compact('principles'));
    }

    public function appointment_store(StoreAppointmentRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();
            $newAppointment = Appointment::create($validated);
        });
        return redirect()->route('front.index');
    }

    public function product()
    {
        $principles = OurPrinciple::take(10)->get();
        return view('front.product', compact('principles'));
    }
}
