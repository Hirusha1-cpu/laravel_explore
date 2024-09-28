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

// Route::get('/jobs', function (){
//     $jobs = Job::with('employer')->paginate(3);
//     return view('jobs', [
//         // 'jobs' => Job::all()
//         compact('jobss')
//     ]);
// });
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(3); // Paginate the jobs
    return view('jobs', compact('jobs')); // Fix compact() variable
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
