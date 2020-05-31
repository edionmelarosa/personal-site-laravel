<h2 class="font-bold text-4xl mt-5">Blogs</h2>
<p>Here are the latest blogs I have written.</p>
<section id="blogs" class="my-10">
    <div class="blogs-wrapper">
        @foreach ($blogs as $blog)
            @php
                $blog = (object) $blog;
            @endphp
            <a class="text-gray-800" href="{{url(\App\Blog\Blog::blogUrl($blog->slug))}}">
                <div class="my-6 pb-5 border-t">
                    <span class="font-semibold text-2xl block hover:text-blue-600">{{$blog->title}}</span>
                    <span class="text-xl mb-1 block">{{$blog->excerpt}}</span>
                    <small class="text-sm font-gray-600 block">Updated: {{$blog->updated_at->format('m d, Y')}}</small>
                </div>
            </a>
        @endforeach
    </div>
</section>

<style>
    #blogs .section-item {
        margin-bottom: 15px;
    }
</style>