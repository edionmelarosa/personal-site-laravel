<div class="introduction">
    <h1 class="font-bold text-4xl mb-4">Deploying Github page with Github Action and Workflows</h1>
    <p class="leading-10">In this post I am going to explain and share how to deploy Github Page using Github Action and Workflows.
    This Workflow will deploy a static page to Github Page whenever you push to <code>master</code> branch or the <code>branch</code> you choose to use.</p>
    <div class="my-10">
        <h2>Note:</h2>
        <p>Github page only deploys static page. If you need to deploy dynamic pages, Github page is not for you.</p>
    </div>
    <h2 class="font-semibold text-2xl">This assume you have already:</h2>
    <ul class="list-disc px-12 text-xl">
        <li class="py-5">
            created <span class="code-highlight">SSH key</span>.
            If you haven't created yet, you can follow this 
            <a href="https://help.github.com/en/github/authenticating-to-github/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent" target="_blank">guide.</a>
        </li>
        <li>
            setup <span class="code-highlight">SSH key</span>
            to your Github account. If you haven't done yet, you can follow this 
            <a href="https://help.github.com/en/github/authenticating-to-github/adding-a-new-ssh-key-to-your-github-account" target="_blank">guide.</a>
        </li>
        <li>
            setup <span class="code-highlight">gh-pages</span> branch as deployment branch. 
            If you haven't done yet, you can go to your repository. 
            Click <strong>Settings</strong> tab and scroll down to <strong>Github Pages</strong> section.
            <img 
                class="mt-2"
                src="/assets/img/github-pages-deployment-branch.jpg" 
                alt="Github pages deployment branch"
            >
        </li>
        <li>
            setup repository's <code class="code-highlight">DEPLOY_KEY</code> secret.

            To do this, go to your repository. Click <strong>Settings</strong> and click <strong>Secrets</strong>.
            Click <strong>Ad new secret</strong>.
            Name your key as <code>DEPLOY_KEY</code> and paste in your <code>private key</code>.
            <img 
            class="mt-2"
                src="/assets/img/github-settings-secret-deployment-key.jpg" 
                alt="Github settings secrets"
            >
        </li>
    </ul>
</div> 

<div class="main-content my-20">
    <h3 class="text-2xl">
        For this post, I'm going to use my own website which is hosted to Github Page.
        My <a href="https://edionmelarosa.github.io/personal-site/#/" target="_blank">website</a> | <a href="https://github.com/edionmelarosa/personal-site">Github repository</a>
    </h3>

    <h2 class="my-10">Creating a workflow</h2>
    <p>Workflows are stored in <code class="code-highlight">.github/workflows/</code> folder.</p>
    <p>Now, create a file inside <code>.github/workflows/</code> called <code>main.yml</code> and paste content below.</p>

<pre>
<code class="language-yaml">
name: Deploy to Github Pages
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
                echo '${{ secrets.DEPLOY_KEY }}'
            @endphp

        - name: Deploy to Github Pages 🚀
        uses: JamesIves/github-pages-deploy-action@releases/v3
        with:
            SSH: true
            BRANCH: gh-pages # The branch the action should deploy to.
            FOLDER: '.' # The folder the action should deploy.
</code>
</pre>

<h2>Install SSH Client</h2>
<pre>
    <code class="yaml">
    - name: Install SSH Client 🔑
        uses: webfactory/ssh-agent@v0.2.0
        with:
            ssh-private-key: @php
            echo '${{ secrets.DEPLOY_KEY }}'
            @endphp
    </code>
</pre>
<p>The <code>secrets.DEPLOY_KEY</code> is the one that we setup above.</p>

<h2 class="my-10">Deploy to Github Pages</h2>
<pre>
<code class="yam">
- name: Deploy to Github Pages 🚀
    uses: JamesIves/github-pages-deploy-action@releases/v3
    with:
        SSH: true
        BRANCH: gh-pages # The branch the action should deploy to.
        FOLDER: dist # The folder the action should deploy.
</code>
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

<p class="my-10">All Done! Try to push now using <code>master</code> branch and see in Actions.</p>
<img 
    src="/assets/img/github-all-workflows.jpg" 
    alt="Github all workflows"
    style="border: 1px solid #ccc;"
>

<p class="my-10">If everything is set up properly, you will see this.</p>
<img 
    src="/assets/img/github-successfull-deployment.jpg" 
    alt="Github success deployment"
    style="border: 1px solid #ccc;"
>
<hr>

<style>
    img {
        max-width: 800px;
    }
</style>
