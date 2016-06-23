<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    $devops_features = collect([

        [
            'title' => 'Runs on any cloud',
            'icon' => 'runs-on-any-cloud.svg',
            'excerpt' => 'No vendor lock-in. Mantl runs equally well on any cloud saving you time and energy.'
        ],
        [
            'title' => 'Flexible',
            'icon' => 'flexible.svg',
            'excerpt' => 'Mantl contains a diverse set of technologies and tools. Pick the ones that fit your needs.'
        ],
        [
            'title' => 'Data solution',
            'icon' => 'data-solution.svg',
            'excerpt' => 'Integrated tools like Cassandra, Spark & Hadoop make Mantl great for Big Data.'
        ],
        [
            'title' => 'Integrated cloud services',
            'icon' => 'integrated-cloud-services.svg',
            'excerpt' => 'Service discovery, secret storage, load balancing, native container support, logging, we have it all.'
        ],
        [
            'title' => 'Connecting containers',
            'icon' => 'connecting-containers.svg',
            'excerpt' => 'Mantl utilizes multi-data center configuration and virtual networking through tools like Project Calico.'
        ],
        [
            'title' => 'Easy provisioning',
            'icon' => 'easy-provisioning.svg',
            'excerpt' => 'Deploy and manage infrastructure with ease using integrated tools like Terraform & Ansible.'
        ], 

    ]);

    $business_features = collect([

        [
            'title' => 'Designed for DevOps',
            'icon' => 'designed-for-devops.svg',
            'excerpt' => 'Easy to install and set-up, Mantl has been designed with DevOps in mind.'
        ],
        [
            'title' => 'No vendor lock in',
            'icon' => 'no-vendor-lock-in.svg',
            'excerpt' => 'Runs on any cloud vendor allowing for seamless integration and low costs.'
        ],
        [
            'title' => 'Code portability',
            'icon' => 'code-portability.svg',
            'excerpt' => 'Infrastructure that allows code and apps to be deployed pretty much anywhere. '
        ],
        [
            'title' => 'High availability',
            'icon' => 'high-availability.svg',
            'excerpt' => 'Built-in services support 100% uptime for all your systems and applications.'
        ],
        [
            'title' => 'Curated experience',
            'icon' => 'curated-experience.svg',
            'excerpt' => 'All components are validated in advance to save you time and reduce project risk.'
        ],
        [
            'title' => 'Built-in security',
            'icon' => 'built-in-security.svg',
            'excerpt' => 'Keep your network secure without having to worry about tricky configuration.
'
        ],

    ]);

    return view('pages.home', ['pageID' => 0, 'devops_features' => $devops_features, 'business_features' => $business_features]);    
});

Route::get('/features', function () {
    return view('pages.features', ['pageID' => 1]);
});

Route::get('/technologies', function () {
    return view('pages.technologies', ['pageID' => 2]);
});

Route::get('/resources', function () {
    return view('pages.resources', ['pageID' => 3]);
});

Route::get('/faq', function () {

    $content = file_get_contents('https://raw.githubusercontent.com/CiscoCloud/mantl/master/docs/faq.rst');

    return view('pages.faq', ['pageID' => 4, 'questions' => Markdown::string($content)]);
});

Route::get('/download', function () {
    return view('pages.download', ['pageID' => 5]);
});

Route::get('/feed/{feed}', function ($feed) {

    $feed = Feeds::make('http://blogs.cisco.com/tag/'. $feed .'/feed');

    $return = [];

    foreach ($feed->get_items(0,2) as $key => $value) {
        $return[$key]['date'] = $value->get_date('j F Y');
        $return[$key]['title'] = $value->get_title();
        $return[$key]['url'] = $value->get_link();
    }

    return Response::json($return);
});