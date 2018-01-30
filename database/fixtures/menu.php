<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('menu')->delete();

        \DB::table('menu')->insert(array (
            0 =>
            array (
                'id' => 1,
                'href' => 'search',
                'title' => 'Advanced Search',
                'newwindow' => 0,
                'tooltip' => 'Search for releases.',
                'role' => 1,
                'ordinal' => 10,
                'menueval' => '""',
            ),
            1 =>
            array (
                'id' => 2,
                'href' => 'browsegroup',
                'title' => 'Groups List',
                'newwindow' => 0,
                'tooltip' => 'Browse by Group.',
                'role' => 1,
                'ordinal' => 25,
                'menueval' => '""',
            ),
            2 =>
            array (
                'id' => 3,
                'href' => 'movies',
                'title' => 'Movies',
                'newwindow' => 0,
                'tooltip' => 'Browse Movies.',
                'role' => 1,
                'ordinal' => 40,
                'menueval' => '""',
            ),
            3 =>
            array (
                'id' => 4,
                'href' => 'upcoming',
                'title' => 'Theatres',
                'newwindow' => 0,
                'tooltip' => 'Movies currently in theatres.',
                'role' => 1,
                'ordinal' => 45,
                'menueval' => '""',
            ),
            4 =>
            array (
                'id' => 5,
                'href' => 'series',
                'title' => 'TV Series',
                'newwindow' => 0,
                'tooltip' => 'Browse TV Series.',
                'role' => 1,
                'ordinal' => 50,
                'menueval' => '""',
            ),
            5 =>
            array (
                'id' => 6,
                'href' => 'predb',
                'title' => 'PreDB',
                'newwindow' => 0,
                'tooltip' => 'Browse PreDB.',
                'role' => 1,
                'ordinal' => 51,
                'menueval' => '""',
            ),
            6 =>
            array (
                'id' => 7,
                'href' => 'anime',
                'title' => 'Anime',
                'newwindow' => 0,
                'tooltip' => 'Browse Anime',
                'role' => 1,
                'ordinal' => 55,
                'menueval' => '""',
            ),
            7 =>
            array (
                'id' => 8,
                'href' => 'music',
                'title' => 'Music',
                'newwindow' => 0,
                'tooltip' => 'Browse Music.',
                'role' => 1,
                'ordinal' => 60,
                'menueval' => '""',
            ),
            8 =>
            array (
                'id' => 9,
                'href' => 'console',
                'title' => 'Console',
                'newwindow' => 0,
                'tooltip' => 'Browse Games.',
                'role' => 1,
                'ordinal' => 65,
                'menueval' => '""',
            ),
            9 =>
            array (
                'id' => 10,
                'href' => 'books',
                'title' => 'Books',
                'newwindow' => 0,
                'tooltip' => 'Browse Books.',
                'role' => 1,
                'ordinal' => 67,
                'menueval' => '""',
            ),
            10 =>
            array (
                'id' => 11,
                'href' => 'admin',
                'title' => 'Admin',
                'newwindow' => 0,
                'tooltip' => 'Admin',
                'role' => 2,
                'ordinal' => 70,
                'menueval' => '""',
            ),
            11 =>
            array (
                'id' => 12,
                'href' => 'cart',
                'title' => 'My Cart',
                'newwindow' => 0,
                'tooltip' => 'Your Nzb cart.',
                'role' => 1,
                'ordinal' => 75,
                'menueval' => '""',
            ),
            12 =>
            array (
                'id' => 13,
                'href' => 'myshows',
                'title' => 'My Shows',
                'newwindow' => 0,
                'tooltip' => 'Your TV shows.',
                'role' => 1,
                'ordinal' => 77,
                'menueval' => '""',
            ),
            13 =>
            array (
                'id' => 14,
                'href' => 'mymovies',
                'title' => 'My Movies',
                'newwindow' => 0,
                'tooltip' => 'Your Movie Wishlist.',
                'role' => 1,
                'ordinal' => 78,
                'menueval' => '""',
            ),
            14 =>
            array (
                'id' => 15,
                'href' => 'apihelp',
                'title' => 'API',
                'newwindow' => 0,
                'tooltip' => 'Information on the API.',
                'role' => 1,
                'ordinal' => 79,
                'menueval' => '""',
            ),
            15 =>
            array (
                'id' => 16,
                'href' => 'rss',
                'title' => 'RSS',
                'newwindow' => 0,
                'tooltip' => 'RSS Feeds.',
                'role' => 1,
                'ordinal' => 80,
                'menueval' => '""',
            ),
            16 =>
            array (
                'id' => 17,
                'href' => 'queue',
                'title' => 'My Queue',
                'newwindow' => 0,
                'tooltip' => 'View Your Queue.',
                'role' => 1,
                'ordinal' => 0,
                'menueval' => '',
            ),
            17 =>
            array (
                'id' => 18,
                'href' => 'forum',
                'title' => 'Forum',
                'newwindow' => 0,
                'tooltip' => 'Browse Forum.',
                'role' => 1,
                'ordinal' => 85,
                'menueval' => '""',
            ),
            18 =>
            array (
                'id' => 19,
                'href' => 'login',
                'title' => 'Login',
                'newwindow' => 0,
                'tooltip' => 'Login.',
                'role' => 0,
                'ordinal' => 100,
                'menueval' => '""',
            ),
            19 =>
            array (
                'id' => 20,
                'href' => 'register',
                'title' => 'Register',
                'newwindow' => 0,
                'tooltip' => 'Register.',
                'role' => 0,
                'ordinal' => 110,
                'menueval' => '""',
            ),
            20 =>
            array (
                'id' => 21,
                'href' => 'content',
                'title' => 'Contents page',
                'newwindow' => 0,
                'tooltip' => 'Administrator messages for users.',
                'role' => 1,
                'ordinal' => 14,
                'menueval' => '""',
            ),
        ));


    }
}