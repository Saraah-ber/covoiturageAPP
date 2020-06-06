<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use App\Models\Vehicule;
use App\Models\Assurance;

class AdminController extends Controller
{
    public function index()
    {
      $members = Member::all()->count();
      $users = User::all()->count();
      $assurances = Assurance::all()->count();
      $vehicules = Vehicule::all()->count();
      return view('admin.dashboard')
            ->with(['members' => $members, 'users' => $users, 'assurances' => $assurances, 'vehicules' => $vehicules]);
    }
}
