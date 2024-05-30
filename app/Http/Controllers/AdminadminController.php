<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminadminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function adminUser()
    {
        return view('admin.adminUser');
    }

    public function adminInbox()
    {
        return view('admin.adminInbox');
    }

    public function adminTransaction()
    {
        return view('admin.adminTransaction');
    }
}
