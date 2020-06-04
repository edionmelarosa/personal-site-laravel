<h1 class="font-bold text-4xl mb-10">Blogs</h1>
<div id="blogs" class="md:flex">
    <div class="personal-blogs pr-10">
        <p>Here are the latest blogs I have written.</p>
        <section class="my-3">
            <div class="blogs-wrapper">
                @foreach ($blogs as $blog)
                    @php
                        $blog = (object) $blog;
                    @endphp
                    <a class="text-gray-800" 
                        href="{{url(\App\Blog\Blog::blogUrl($blog->slug))}}">
                        <div class="py-6 pb-5 bg-indigo-100 rounded-md mb-5 px-6">
                            <span class="font-semibold text-2xl block hover:text-blue-600">{{$blog->title}}</span>
                            <span class="text-xl mb-2 block">{{$blog->excerpt}}</span>
                            <small class="text-sm font-gray-600 block">Updated: {{$blog->updated_at->format('M d, Y')}}</small>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </div>

    <div class="recently-read-blogs">
        <p>Blogs I like to read.</p>
        <section class="my-3">
            <div class="blogs-wrapper">
                <a class="text-gray-800" 
                    href="https://freek.dev/1676-adding-trycatch-to-laravel-collections"
                    target="_blank">
                    <div class="py-6 pb-5 bg-indigo-100 rounded-md mb-5 px-6">
                        <span class="font-semibold text-xl block hover:text-blue-600">Adding try/catch to Laravel collections</span>
                        <span class="text-xl mb-2 block">You'll surely enjoy watching them code.</span>
                    </div>
                </a>

                <a class="text-gray-800" 
                    href="https://divinglaravel.com/when-does-php-call-__destruct"
                    target="_blank">
                    <div class="py-6 pb-5 bg-indigo-100 rounded-md mb-5 px-6">
                        <span class="font-semibold text-xl block hover:text-blue-600">When does PHP call __destruct()?</span>
                    </div>
                </a>
                
                <a class="text-gray-800" 
                    href="https://driesvints.com/blog/the-beauty-of-single-action-controllers/"
                    target="_blank">
                    <div class="py-6 pb-5 bg-indigo-100 rounded-md mb-5 px-6">
                        <span class="font-semibold text-xl block hover:text-blue-600">The Beauty of Single Action Controllers</span>
                        <span class="text-xl mb-2 block"></span>
                    </div>
                </a>

                <a class="text-gray-800" 
                    href="https://jasonmccreary.me/articles/avoiding-inheritance-laravel/"
                    target="_blank">
                    <div class="py-6 pb-5 bg-indigo-100 rounded-md mb-5 px-6">
                        <span class="font-semibold text-xl block hover:text-blue-600">Avoiding inheritance in Laravel</span>
                        <span class="text-xl mb-2 block">Developers often choose to use inheritance. However, in Laravel, this may prove to be a painful decision.</span>
                    </div>
                </a>

                <a class="text-gray-800" 
                    href="https://laravel-news.com/laravel-optional-helper"
                    target="_blank">
                    <div class="py-6 pb-5 bg-indigo-100 rounded-md mb-5 px-6">
                        <span class="font-semibold text-xl block hover:text-blue-600">Using the Laravel Optional Helper and the New Optional Closure</span>
                    </div>
                </a>
            </div>
        </section>
    </div>
</div>

<style>
    #blogs .section-item {
        margin-bottom: 15px;
    }
</style>