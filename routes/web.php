<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', function () {
    return response()->json(['service_name' => 'ScreenScore Api Services', 'status' => 'Running']);
});

$router->group(['prefix' => 'public', 'namespace' => 'Publish',], function () use ($router) {
    $router->get('posts', 'PostsController@index');
    $router->get('post/{id}', 'PostsController@show');
});

$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('/register', 'AuthController@register');
    $router->post('/login', 'AuthController@login');
});
$router->post('posts', 'PostsController@store');

$router->group(['middleware' => 'auth', 'prefix' => 'api'], function () use ($router) {
    //users
    $router->get('users', 'UsersController@index');
    $router->post('users', 'UsersController@store');
    $router->put('users/{id}', 'UsersController@update');
    $router->delete('users/{id}', 'UsersController@destroy');
    $router->get('users/{id}', 'UsersController@show');

    //profile
    $router->post('profile', 'ProfileController@store');
    $router->get('profile', 'ProfileController@show');
    $router->get('profile/image/{imageName}', 'ProfileController@image');

    //films
    $router->group(['prefix' => 'films', 'namespace' => 'Admin'], function () use ($router) {
        $router->get('/by-reviews', 'FilmsController@showAllRatings');
        $router->get('/', 'FilmsController@index');
        $router->post('/', 'FilmsController@store');
        $router->post('/{id}', 'FilmsController@update');
        $router->delete('/{id}', 'FilmsController@destroy');
        $router->get('/{id}', 'FilmsController@show');
        $router->get('/image/{imageName}', 'FilmsController@image');
        $router->get('/by-genres/{id}', 'FilmsController@showOnGenres');
        $router->get('/by-casts/{id}', 'FilmsController@showOnCasts');
    });

    //genres
    $router->group(['prefix' => 'genres', 'namespace' => 'Admin'], function () use ($router) {
        $router->get('/', 'GenresController@index');
        $router->post('/', 'GenresController@store');
        $router->get('/{id}', 'GenresController@show');
        $router->put('/{id}', 'GenresController@update');
        $router->delete('/{id}', 'GenresController@destroy');
    });

    //casts
    $router->group(['prefix' => 'casts', 'namespace' => 'Admin'], function () use ($router) {
        $router->get('/', 'CastsController@index');
        $router->post('/', 'CastsController@store');
        $router->get('/{id}', 'CastsController@show');
        $router->put('/{id}', 'CastsController@update');
        $router->delete('/{id}', 'CastsController@destroy');
    });

    //characters
    $router->group(['prefix' => 'characters', 'namespace' => 'Admin'], function () use ($router) {
        $router->get('/', 'CharactersController@index');
        $router->post('/', 'CharactersController@store');
        $router->get('/{id}', 'CharactersController@show');
        $router->put('/{id}', 'CharactersController@update');
        $router->delete('/{id}', 'CharactersController@destroy');
    });

    //reviews
    $router->group(['prefix' => 'reviews'], function () use ($router) {
        $router->get('/', 'ReviewsController@index');
        $router->post('/films/{idFilms}', 'ReviewsController@store');
        $router->get('/{id}', 'ReviewsController@show');
        $router->put('/films/{idFilms}', 'ReviewsController@update');
        $router->delete('/{id}', 'ReviewsController@destroy');
    });

    //master Posts
    $router->get('posts', 'PostsController@index');
    // $router->post('posts', 'PostsController@store');
    $router->get('post/{id}', 'PostsController@show');
    $router->put('post/{id}', 'PostsController@update');
    $router->delete('post/{id}', 'PostsController@destroy');
});
