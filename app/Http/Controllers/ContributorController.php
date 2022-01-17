<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function index()
    {
        return view(
            'contributors',
            [
                'title' => 'Contributors',
                'active' => 'contributors',
                'contributors' => Contributor::all()
            ]
        );
    }
}
