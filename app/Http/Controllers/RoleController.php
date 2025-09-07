<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->paginate(5);
        return view('makan.role', ['roles' => $roles]);
    }
}
