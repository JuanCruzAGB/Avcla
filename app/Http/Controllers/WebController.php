<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class WebController extends Controller{
        /**
         * * Control the coming soon page.
         * @return [*]
         */
        public function comingsoon(){
            return view('web.coming_soon', [
                // ? Return variables.
            ]);
        }

        /**
         * * Control the home page.
         * @return [*]
         */
        public function home(){
            return view('web.home', [
                // ? Return variables.
            ]);
        }
    }