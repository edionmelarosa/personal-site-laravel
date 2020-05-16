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
               'file_content' => 'pages.blogs.deploying-your-github-page-using-github-action-workflow'
            ],
           'deploying-laravel-application-to-aws-ec2-using-github-action-workflow' => [
               'id'           => 2,
               'title'        => 'Deploying Laravel application to AWS ec2 (work also on other server) using Github action and workflows',
               'slug'         => 'deploying-laravel-application-to-aws-ec2-using-github-action-workflow',
               'description'  => 'Deploying Laravel application to AWS ec2 (work also on other server) using Github action and workflows.',
               'date_updated' => 'May 16, 2020',
               'file_content' => 'pages.blogs.deploying-laravel-application-to-aws-ec2-using-github-action-workflow'
            ]
       ];

       /**
        * 
        * return all blogs
        */
       public static function all()
       {
           return (new self)->blogs;
       }

       /**
        * 
        * get blog by slug
        * 
        * @param string $slug
        * @return object|null Return $blog as object and null if no blog is found
        */
       public static function getBySlug(string $slug)
       {
           return isset((new self)->blogs[$slug]) ? (object) (new self)->blogs[$slug] : null;
       }
   }
   