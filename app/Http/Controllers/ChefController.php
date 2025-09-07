<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Role;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function index()
    {
        $chefs = Chef::latest()->paginate(5);
        $roles = Role::all();
        return view('makan.chef', ['chefs' => $chefs, 'roles' => $roles]);
    }
    public function search($role_id)
    {


        $roles = Role::find($role_id);
        if ($roles) {
            $chefs = Chef::where('role_id', $role_id)->paginate(12);
        } else {
            $chefs = [];
        }
        return view('makan.chef-detail', ['chefs' => $chefs, 'roles' => $roles]);
    }
}
