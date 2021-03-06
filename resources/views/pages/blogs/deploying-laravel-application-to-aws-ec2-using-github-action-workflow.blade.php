<div class="introduction">
    <h1>Deploying your Laravel Application to AWS ec2 instance or any other server with Github Action and Workflows</h1>
    <p>In this post I am going to explain how to deploy Laravel Application to AWS ec2 instance using Github Action and Workflows.</p>

    <h2 class="mt-10">After completing this guide, you should be able to:</h2>
    <ul>
        <li>Deploy Laravel Application to AWS ec2 instance on push</li>
        <li>Run test cases of your Laravel Application</li>
    </ul>

    <h2 class="mt-10">Prerequisites</h2>
    <ul>
        <li>You have running AWS ec2 instance or other running server.</li>
        <li>SSH access to server.</li>
        <li>SSH key pairs.</li>
        <li>Github repository.</li>
        <li>Have a copy of  <code>.env</code> somewhere in your server. We will use it later.</li>
    </ul>

    <h2 class="mt-10">Disclaimer</h2>
    <p>I am not an expert of DevOps. This guide is not meant for big and complex systems.</p>
    <p>This may not work on your application. And if you have a better solution how to do it. 
        Please reach me.</p>

    <h2 class="mt-10">Before we start, we need to do the following:</h2>
    <p>Create the following <code>secret</code> environment.</p>
    <img 
        src="/assets/img/github-deploy-to-server-with-action-and-workflows/github-repo-secrers-env.jpg" 
        alt="Github settings secrets"
    >
    <ul>
        <li><code>HOST</code> - Your server host e.g edionme.com.</li>
        <li><code>KEY</code> - Your public key.</li>
        <li><code>PORT</code> - Port ssh to connect to.</li>
        <li><code>USERNAME</code> - Your server username.</li>
    </ul>

    <h2 class="my-10">Creating a workflow</h2>
    <p>Workflows are stored in <code>.github/workflows/</code> folder.</p>
    <p>Now, create a file inside <code>.github/workflows/</code> called <code>main.yml</code> and paste content below.</p>
<pre>
<code>
name: Deploy
on:
    push:
    branches: [ master ]

jobs:
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

            php artisan optimize

    </code>
</pre>
    <h2 class="mt-10">Variables</h2>
    <ul>
        <li><code>name</code> - Workflow name.</li>
        <li><code>on</code> - What event workflow will trigger, here we set to <code>push</code>.</li>
        <li><code>branch</code> - Branch workflow event will trigger.</li>
    </ul>
    <p>Refer to Github actions <a href="https://github.com/features/actions" target="_blank">documentation</a> for more information.</p>

    <h2 class="mt-10">Jobs</h2>
    <ul>
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

<p class="my-10">All Done! Try to push now using <code>master</code> branch (or your choice of branch) and see in Actions.</p>

<p>If everything is set up properly, you should see this.</p>
<img 
    src="/assets/img/github-deploy-to-server-with-action-and-workflows/github-actions-successful-workflow.jpg" 
    alt="Github successful workflow"
>