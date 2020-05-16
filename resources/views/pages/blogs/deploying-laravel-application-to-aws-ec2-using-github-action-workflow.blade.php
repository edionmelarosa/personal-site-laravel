<div class="introduction">
    <h2>Deploying your Laravel Application to AWS ec2 instance or any other server with Github Action and Workflows</h2>

    <p>In this post I am going to explain how to deploy Laravel Application to AWS ec2 instance using Github Action and Workflows.</p>

    <p>After completing this guide, you should be able to:</p>
    <ul>
        <li>Deploy Laravel Application to AWS ec2 instance on push</li>
        <li>Run test cases of your Laravel Application</li>
    </ul>

    <hr>
    <p><strong>Prerequisites</strong>:</p>
    <ul>
        <li>You have running AWS ec2 instance or other running server.</li>
        <li>SSH access to server.</li>
        <li>SSH key pairs.</li>
        <li>Github repository.</li>
        <li>Have a copy of  <code>.env</code> somewhere in your server. We will use it later.</li>
    </ul>

    <hr>
    <p><strong>Disclaimer</strong></p>
    <p>I am not an expert of DevOps. This guide is not meant for big and complex systems.</p>
    <p>This may not work on your application. And if you have a better solution how to do it. 
        Please reach me.</p>
    <hr>

    <h2>Before we start, we need to do the following:</h2>
    <p>Create the following <code>secret</code> environment.</p>
    <img 
        src="{{url('assets/img/github-deploy-to-server-with-action-and-workflows/github-repo-secrers-env.jpg')}}" 
        alt="Github settings secrets"
    >

    <ul>
        <li><code>HOST</code> - Your server host e.g edionme.com.</li>
        <li><code>KEY</code> - Your public key.</li>
        <li><code>PORT</code> - Port ssh to connect to.</li>
        <li><code>USERNAME</code> - Your server username.</li>
    </ul>

    <h2>Creating a workflow</h2>
    <p>Workflows are stored in <code>.github/workflows/</code> folder.</p>
    <p>Now, create a file inside <code>.github/workflows/</code> called <code>main.yml</code> and paste content below.</p>
<pre>
name: Test and deploy
on:
    push:
    branches: [ master ]

jobs:
    run-phpunit-tests:
    runs-on: ubuntu-latest
    steps:
    - uses: actions/checkout@v2
    - name: Copy .env
        run: php -r "file_exists('.env') || copy('.env.example', '.env');"
    - name: Install Dependencies
        run: composer install -q --no-ansi --no-interaction --no-scripts --no-suggest --no-progress --prefer-dist
    - name: Generate key
        run: php artisan key:generate
    - name: Directory Permissions
        run: chmod -R 777 storage bootstrap/cache
    - name: Create Database
        run: |
        mkdir -p database
        touch database/database.sqlite
    - name: Execute tests (Unit and Feature tests) via PHPUnit
        env:
        DB_CONNECTION: sqlite
        DB_DATABASE: database/database.sqlite
        run: vendor/bin/phpunit
        
    copy-files:
    runs-on: ubuntu-latest
    steps:
    - uses: actions/checkout@master

    - name: copy files
        uses: appleboy/scp-action@master
        with:
        host: @php
        echo '${{ secrets.HOST }}'
    @endphp

        username: @php
            echo '${{ secrets.USERNAME }}' 
        @endphp

        key: @php
            echo '${{ secrets.KEY }}' 
        @endphp

        port: @php
            echo '${{ secrets.PORT }}'
        @endphp

        overwrite: true
        source: "./*"
        target: "/var/www/edionme.com"  

    configure-laravel:
    runs-on: ubuntu-latest
    steps:
        - name: Configure laravel
        uses: appleboy/ssh-action@master
        with:
        host: @php
        echo '${{ secrets.HOST }}'
    @endphp

        username: @php
            echo '${{ secrets.USERNAME }}' 
        @endphp

        key: @php
            echo '${{ secrets.KEY }}' 
        @endphp

        port: @php
            echo '${{ secrets.PORT }}'
        @endphp

            script: |
            cp ~/edionme.com/.env /var/www/edionme.com/.env
            cd /var/www/edionme.com
            composer install --optimize-autoloader --no-dev
            php artisan config:cache
            php artisan view:cache
            php artisan route:cache
            chmod 2775 /var/www/edionme.com
            find /var/www/edionme.com -type d -exec chmod 2775 {} \;
            find /var/www/edionme.com -type f -exec chmod 0664 {} \;
</pre>
    <p><strong>Variables</strong></p>
    <ul>
        <li><code>name</code> - Workflow name.</li>
        <li><code>on</code> - What event workflow will trigger, here we set to <code>push</code>.</li>
        <li><code>branch</code> - Branch workflow event will trigger.</li>
        <li><code>jobs</code> - This workflow has 2 jobs <code>tests and deploy</code>.</li>
    </ul>

    <p>Refer to Github actions <a href="https://github.com/features/actions" target="_blank">documentation</a> for more information.</p>

    <p><strong>Jobs</strong></p>

    <ul>
        <li>
            <p><code>tests</code> - Basically just run tests using <code>phpunit</code>.</p>
        </li>
        <li>
            <p><code>copy-files</code> - Copy files to our server.</p>
            <ul>
                <li><code>overwrite</code> - If existing files should be overriden</li>
                <li><code>source</code> - Source file or directory to copy. In laravel case should be all files</li>
                <li><code>target</code> - Target directory where files to copy. In my case in <code>var/www/edionme.com</code></li>
                <p>Go <a href="https://github.com/appleboy/scp-action" target="_blank">here</a> for complete variable lists.</p>
            </ul>
        </li>
        <li>
            <p><code>configure-laravel</code> - Configure laravel. You may need to edit it based on your own needs</p>
        </li>
    </ul>
</div>
<p>All Done! Try to push now using <code>master</code> branch (or your choice of branch) and see in Actions.</p>

<p>If everything is set up properly, you will see this.</p>
<img 
    src="{{url('assets/img/github-deploy-to-server-with-action-and-workflows/github-actions-successful-workflow.jpg')}}" 
    alt="Github successful workflow"
>
<hr>


<style>
    img {
        max-width: 800px;
        border: 1px solid #ddd;
    }
</style>