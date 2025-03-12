<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(10);


    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function ($id) {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function ($id) {
    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id' => 1,
    ]);

    return redirect()->route('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});