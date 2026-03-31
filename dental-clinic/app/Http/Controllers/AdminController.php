<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Contact;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // ─── Dashboard ───────────────────────────────────────────
    public function dashboard()
    {
        $stats = [
            'services' => Service::count(),
            'team'     => TeamMember::count(),
        ];
        return view('admin.dashboard', compact('stats'));
    }

    // ─── Services ────────────────────────────────────────────
    public function services()
    {
        $services = Service::orderBy('order')->get();
        return view('admin.services', compact('services'));
    }

    public function storeService(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'nullable|numeric',
        ]);
        Service::create($request->only('name', 'description', 'price', 'icon', 'order', 'is_active'));
        return back()->with('success', 'Service added.');
    }

    public function updateService(Request $request, Service $service)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'nullable|numeric',
        ]);
        $service->update($request->only('name', 'description', 'price', 'icon', 'order', 'is_active'));
        return back()->with('success', 'Service updated.');
    }

    public function destroyService(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Service deleted.');
    }

    // ─── Team ─────────────────────────────────────────────────
    public function team()
    {
        $team = TeamMember::orderBy('order')->get();
        return view('admin.team', compact('team'));
    }

    public function storeTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);
        $data = $request->only('name', 'role', 'bio', 'order', 'is_active');
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('team', 'public');
        }
        TeamMember::create($data);
        return back()->with('success', 'Team member added.');
    }

    public function updateTeam(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);
        $data = $request->only('name', 'role', 'bio', 'order', 'is_active');
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('team', 'public');
        }
        $teamMember->update($data);
        return back()->with('success', 'Team member updated.');
    }

    public function destroyTeam(TeamMember $teamMember)
    {
        $teamMember->delete();
        return back()->with('success', 'Team member deleted.');
    }

    // ─── Contact ──────────────────────────────────────────────
    public function contact()
    {
        $contact = Contact::first();
        return view('admin.contact', compact('contact'));
    }

    public function updateContact(Request $request)
    {
        $data = $request->only(
            'phone', 'email', 'address', 'city',
            'maps_url', 'facebook_url', 'instagram_url',
            'hours_weekday_open', 'hours_weekday_close',
            'hours_saturday_open', 'hours_saturday_close',
            'sunday_closed'
        );
        $data['sunday_closed'] = $request->has('sunday_closed');
        Contact::updateOrCreate(['id' => 1], $data);
        return back()->with('success', 'Contact info updated.');
    }

    // ─── Settings ─────────────────────────────────────────────
    public function settings()
    {
        $settings = SiteSetting::pluck('value', 'key');
        return view('admin.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        foreach ($request->except('_token', '_method') as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return back()->with('success', 'Settings saved.');
    }
}