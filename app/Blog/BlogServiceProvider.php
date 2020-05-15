<?php 
   
   namespace App\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
   {
       /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        }
   }
   