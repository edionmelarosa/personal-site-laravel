<div class="introduction">
    <h2>Deploying Github page with Github Action and Workflows</h2>

    <p>In this post I am going to explain and share how to deploy Github Page using Github Action and Workflows.</p>
    <p>This Workflow will deploy a static page to Github Page whenever you push to <code>master</code> branch or the <code>branch</code> you choose to use.</p>

    <hr>
    <p><strong>NOTE:</strong> Github page only deploys static page. If you need to deploy dynamic pages, Github page is not for you.</p>
    <hr>
    <p><strong>This assume you have already:</strong></p>
    <ul>
        <li>
            created <code>SSH key</code>.
            If you haven't created yet, you can follow this 
            <a href="https://help.github.com/en/github/authenticating-to-github/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent" target="_blank">guide.</a>
        </li>
        <li>
            setup <code>SSH key</code>
            to your Github account. If you haven't done yet, you can follow this 
            <a href="https://help.github.com/en/github/authenticating-to-github/adding-a-new-ssh-key-to-your-github-account" target="_blank">guide.</a>
        </li>
        <li>
            setup <code>gh-pages</code> branch as deployment branch. 

            If you haven't done yet, you can go to your repository. Click <strong>Settings</strong> tab 
            and scroll down to <strong>Github Pages</strong> section.
            <img 
                src="{{url('assets/img/github-pages-deployment-branch.jpg')}}" 
                alt="Github pages deployment branch"
                style="border: 1px solid #ccc;"
            >
        </li>
        <li>
            setup repository's <code>DEPLOY_KEY</code> secret.

            To do this, go to your repository. Click <strong>Settings</strong> and click <strong>Secrets</strong>.
            Click <strong>Ad new secret</strong>.
            Name your key as <code>DEPLOY_KEY</code> and paste in your <code>private key</code>.
            <img 
                src="{{url('assets/img/github-settings-secret-deployment-key.jpg')}}" 
                alt="Github settings secrets"
            >
        </li>
    </ul>
</div> 

<div class="main-content">
    <p>
        For this post, I'm going to use my own website which is hosted to Github Page.
        My <a href="https://edionmelarosa.github.io/personal-site/#/" target="_blank">website</a> | <a href="https://github.com/edionmelarosa/personal-site">Github repository</a>
    </p>

    <hr>
    <h2>Creating a workflow</h2>
    <p>Workflows are stored in <code>.github/workflows/</code> folder.</p>
    <p>Now, create a file inside <code>.github/workflows/</code> called <code>main.yml</code> and paste content below.</p>
<pre>name: Deploy to Github Pages
on: 
push:
branches:
- master
jobs:
build-and-deploy:
runs-on: ubuntu-latest
steps:
- name: Checkout 🛎️
uses: actions/checkout@v2 # If you're using actions/checkout@v2 you must set persist-credentials to false in most cases for the deployment to work correctly.
with:
persist-credentials: false

- name: Install SSH Client 🔑
uses: webfactory/ssh-agent@v0.2.0
with:
ssh-private-key: @php
    echo '{{deployment_key}}'
@endphp

- name: Deploy to Github Pages 🚀
uses: JamesIves/github-pages-deploy-action@releases/v3
with:
SSH: true
BRANCH: gh-pages # The branch the action should deploy to.
FOLDER: dist # The folder the action should deploy.</pre>

<p><strong>Install SSH Client</strong></p>
<pre>
- name: Install SSH Client 🔑
uses: webfactory/ssh-agent@v0.2.0
with:
ssh-private-key: @php
echo '${{ secrets.DEPLOY_KEY }}'
@endphp
</pre>
    <p>The <code>secrets.DEPLOY_KEY</code> is the one that we setup above.</p>

    <p><strong>Deploy to Github Pages</strong></p>
<pre>
- name: Deploy to Github Pages 🚀
uses: JamesIves/github-pages-deploy-action@releases/v3
with:
SSH: true
BRANCH: gh-pages # The branch the action should deploy to.
FOLDER: dist # The folder the action should deploy.
</pre>

    <ul>
        <li>
            <code>BRANCH</code> - The deployment branch you setup for your Github pages.
        </li>
        <li>
            <code>FOLDER</code> - The folder you want to to get deployed. <br>
            Usually, it's <code>dist</code> for VueJs App. and <code>build</code> for ReactJs App.
        </li>
        <li>
            <code>SSH</code> - leave to <code>true</code>. This is required for deployment using an <code>SSH</code>.
        </li>
    </ul>
</div>

<p>All Done! Try to push now using <code>master</code> branch and see in Actions.</p>
<img 
    src="{{url('assets/img/github-all-workflows.jpg')}}" 
    alt="Github all workflows"
    style="border: 1px solid #ccc;"
>

<p>If everything setup properly, you will see like this.</p>
<img 
    src="{{url('assets/img/github-successfull-deployment.jpg')}}" 
    alt="Github success deployment"
    style="border: 1px solid #ccc;"
>
<hr>

<style>
    img {
        max-width: 800px;
    }
</style>