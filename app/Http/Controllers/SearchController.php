<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function index(Request $request)
    {
        $jobs =Job::where('title', 'LIKE', '%'.$request->query('q').'%')->get();
        return view('results', [
            'jobs'=>$jobs
        ]);
    }
}
