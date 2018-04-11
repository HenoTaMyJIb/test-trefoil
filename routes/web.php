<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    setlocale(LC_TIME, 'et_EE.utf8');
    $lastNews = TCG\Voyager\Models\Post::latest()->take(3)->get();
    return view('welcome', compact('lastNews'));
});

Route::get('/teamgym', function () {
    $slug = 'teamgym';
    $title = 'Teamgym';
    $coaches = \App\Coach::whereHas('fields', function ($query) {
        $query->where('slug', 'teamgym');
    })->get();

    return view('fields.layout', compact('title', 'coaches', 'slug'));
});

Route::get('/trampoliinvoimlemine', function () {
    $slug = 'trampoliinvoimlemine';
    $title = 'Trampoliinvõimlemine';
    $coaches = \App\Coach::whereHas('fields', function ($query) {
        $query->where('slug', 'trampoliinvoimlemine');
    })->get();

    return view('fields.layout', compact('title', 'coaches', 'slug'));
});

Route::get('/alad/{slug}', function ($slug) {
    $field = \App\Field::whereSlug($slug)->firstOrFail();
    
    $title = $field->name;
    $headerPhoto = \Storage::url($field->header_photo);
    $coaches = \App\Coach::whereHas('fields', function ($query) use ($field){
        $query->where('slug', $field->slug);
    })->get();

    $finder = new \Symfony\Component\Finder\Finder();

    $photos = [];
    if(is_dir(storage_path('app/public/pages/'.$slug))) {
        $photos = $finder->files()->in(storage_path('app/public/pages/'.$slug));
    }

    return view('fields.layout', compact('title', 'coaches', 'slug', 'photos', 'headerPhoto'));
});

Route::get('/show-ruhm', function () {
    $slug = 'show-ruhm';
    $title = 'Show rühm';
    $coaches = \App\Coach::whereHas('fields', function ($query) {
        $query->where('slug', 'show-ruhm');
    })->get();

    return view('fields.layout', compact('title', 'coaches', 'slug'));
});

Route::get('/uudised', function() {
    setlocale(LC_TIME, 'et_EE.utf8');
    $posts = TCG\Voyager\Models\Post::orderBy('featured', 'desc')->latest()->paginate(15);
    
    return view('news', compact('posts'));
});

Route::get('/uudised/{slug}', function($slug) {
    setlocale(LC_TIME, 'et_EE.utf8');
    $post = TCG\Voyager\Models\Post::where('slug', $slug)->first();
    
    return view('post', compact('post'));
});

Route::get('/dokumendid', function() {
    $finder = new \Symfony\Component\Finder\Finder();
    $finder->files()->in(storage_path('app/public/Documents'));

    return view('documents', compact('finder'));
});

Route::get('/e-spordikool', function() {
    $content = TCG\Voyager\Models\Page::where('slug', 'e-spordikool')->first();
    return view('default-page', compact('content'));
});

Route::get('/klikamine', function() {
    $content = TCG\Voyager\Models\Page::where('slug', 'klikamine')->first();
    return view('default-page', compact('content'));
});

Route::get('/maksmine', function() {
    $content = TCG\Voyager\Models\Page::where('slug', 'maksmine')->first();
    return view('default-page', compact('content'));
});

Route::get('/kkk', function() {
    $content = TCG\Voyager\Models\Page::where('slug', 'kkk')->first();
    return view('default-page', compact('content'));
});

Route::get('/vabad-tookohad', function() {
    $content = TCG\Voyager\Models\Page::where('slug', 'vabad-tookohad')->first();
    return view('default-page', compact('content'));
});

Route::get('/kontakt', function() {
    return view('contact');
});

Route::get('/treenerid', function() {
    $coaches = \App\Coach::whereActive(1)->with('fields')->get();
    return view('coaches', compact('coaches'));
});

Route::get('/kalender', function() {
    $events = \App\CalenderEvent::whereYear('start_date', date('Y'))->orderBy('start_date')->get();
    return view('calender', compact('events'));
});

Route::get('/galerii', function() {
    return view('gallery', compact('events'));
});

Route::get('/meist', function() {
    return view('history');
});

Route::get('/tunniplaan', function() {
    return view('timetable', compact('events'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
