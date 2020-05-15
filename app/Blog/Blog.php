<?php 
   
   namespace App\Blog;

   class Blog
   {
       private $blogs = [
           'deploying-your-github-page-using-github-action-workflow' => [
               'id'           => 1,
               'title'        => 'Deploying Github page using Github action and workflows',
               'slug'         => 'deploying-your-github-page-using-github-action-workflow',
               'description'  => 'A guide on deploying your github pages using Github action and workflows.',
               'date_updated' => 'May 12, 2020',
               'keywords'     => 'github pages, github action, github workflows, deploy to github pages'
            ]
       ];

       public static function all()
       {
           return (new self)->blogs;
       }

       public static function getBySlug($slug)
       {
           return isset((new self)->blogs[$slug]) ? (object) (new self)->blogs[$slug] : null;
       }
   }
   