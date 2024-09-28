<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Translation\ArrayLoader;
use PhpParser\Node\Expr\Cast\Array_;

Route::any('/phpmyadmin', function() {
    return \Illuminate\Support\Facades\Redirect::to('/phpmyadmin/index.php');
});

Route::get('/', function () {
    return view('home');
    // $jobs = Job::all();
    // dd($jobs[0]->salary);
});

Route::get('/jobs', function (){
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    // $job = Arr::first(job::all(), fn($job) => $job['id'] == $id);
    $job = Job::find($id);
    if (!$job) {
        # code...
        abort(404);
    }
    // dd($job);
    return view('job',['job' => $job]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
