<?php 
   
   namespace App\Blog;

   class Blog
   {
       private $blogs = [
           'deploying-your-github-page-using-github-action-workflow' => [
               'id'             => 1,
               'title'          => 'Deploy Github page using Github action and workflows',
               'slug'           => 'deploying-your-github-page-using-github-action-workflow',
               'url'            => 'blogs/deploying-your-github-page-using-github-action-workflow',
               'description'    => 'A guide on deploying your github pages using Github action and workflows.',
               'date_updated'   => 'May 12, 2020',
               'file_content'   => 'pages.blogs.deploying-your-github-page-using-github-action-workflow',
               'featured_image' => 'assets/img/github-all-workflows.jpg'
            ],
           'deploying-laravel-application-to-aws-ec2-using-github-action-workflow' => [
               'id'             => 2,
               'title'          => 'Deploy Laravel application using Github action and workflows',
               'slug'           => 'deploying-laravel-application-to-aws-ec2-using-github-action-workflow',
               'url'            => 'blogs/deploying-laravel-application-to-aws-ec2-using-github-action-workflow',
               'description'    => 'Deploy Laravel application using Github action and workflows.',
               'date_updated'   => 'May 16, 2020',
               'file_content'   => 'pages.blogs.deploying-laravel-application-to-aws-ec2-using-github-action-workflow',
               'featured_image' => 'assets/img/github-deploy-to-server-with-action-and-workflows/github-actions-successful-workflow.jpg'
           ],
           'import-and-parse-large-csv-file-with-php-generator-and-real-example-with-laravel-and-vue' => [
               'id'             => 3,
               'title'          => 'Import and process large CSV file with PHP generator with example implementation using Laravel and Vue',
               'slug'           => 'import-and-parse-large-csv-file-with-php-generator-and-real-example-with-laravel-and-vue',
               'url'            => 'blogs/import-and-parse-large-csv-file-with-php-generator-and-real-example-with-laravel-and-vue',
               'description'    => 'Import and process large CSV file with PHP generator with example implementation using Laravel and Vue.',
               'date_updated'   => 'May 21, 2020',
               'file_content'   => 'pages.blogs.import-and-parse-large-csv-file-with-php-generator-and-real-example-with-laravel-and-vue',
               'featured_image' => 'assets/img/process-csv-with-php-generator-laravel-vue/lazy-csv-file-code.jpg'
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
   