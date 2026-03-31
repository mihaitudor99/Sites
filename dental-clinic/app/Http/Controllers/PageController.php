<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Contact;
use App\Models\SiteSetting;

class PageController extends Controller
{
    private function settings()
    {
        return SiteSetting::pluck('value', 'key');
    }

    public function home()
    {
        $settings = $this->settings();
        $services = Service::where('is_active', true)->orderBy('order')->take(6)->get();
        $team     = TeamMember::where('is_active', true)->orderBy('order')->take(3)->get();
        $contact  = Contact::first();
        return view('public.home', compact('settings', 'services', 'team', 'contact'));
    }

    public function services()
    {
        $settings = $this->settings();
        $services = Service::where('is_active', true)->orderBy('order')->get();
        return view('public.services', compact('settings', 'services'));
    }

    public function team()
    {
        $settings = $this->settings();
        $team     = TeamMember::where('is_active', true)->orderBy('order')->get();
        return view('public.team', compact('settings', 'team'));
    }

    public function contact()
    {
        $settings = $this->settings();
        $contact  = Contact::first();
        return view('public.contact', compact('settings', 'contact'));
    }
}