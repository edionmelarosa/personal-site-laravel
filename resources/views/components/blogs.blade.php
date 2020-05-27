<h2 class="font-bold text-4xl mt-5">Blogs</h2>
<section id="blogs" class="my-10">
    <div class="blogs-wrapper">
        @foreach ($blogs as $blog)
            @php
                $blog = (object) $blog;
            @endphp
            <a class="text-gray-800" href="{{url(\App\Blog\Blog::blogUrl($blog->slug))}}">
                <div class="shadow-md border-gray-900 bg-white hover:bg-gray-100 hover:shadow-sm my-4 p-5 rounded-lg">
                    <span class="font-semibold text-2xl block">{{$blog->title}}</span>
                    <span class="text-xl mb-4 block">{{$blog->excerpt}}</span>
                    <small class="font-thin font-xl font-gray-600 block">Updated: {{$blog->updated_at->format('m d, Y')}}</small>
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