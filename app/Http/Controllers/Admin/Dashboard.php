<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Agent};

class Dashboard extends Controller
{
    public function index()
    {
        $data['breadcrumbs'] = ['Admin', 'Dashboard'];
        $data['title'] = "Dashboard";
        return view('admin.index');
    }
    public function settings()
    {
        $data['breadcrumbs'] = ['Admin', 'Settings'];
        $data['title'] = "Settings";
       return view('admin.settings');
    }

    public function agents()
    {
        $data['breadcrumbs'] = ['Admin', 'Agents'];
        $data['title'] = "Agents";
        return view('admin.agents', $data);
    }

    public function agentsPost(Request $request)
    {
        $agents = Agent::all();
        return json_encode($agents);
    }
    public function agentsStatus(Request $request)
    {
        $agent = Agent::findOrFail($request->id);
        $agent->status = $request->status;
        if($request->status == 0){
            $agent->credit_limit = 0;
        }else{
            $agent->credit_limit = $request->credit_limit;
        }
        $agent->service_charges = $request->service_charges;
        $agent->service_charge_type = $request->service_charge_type;
        $agent->save();
        return redirect()->back()->with('success', 'Agent Status updated successfully!');
    }
}
