<section id="blogs" class="my-10">
    <h2 class="font-bold text-4xl">Blogs</h2>
    <div class="blogs-wrapper">
        @foreach (App\Blog\Blog::all() as $blog)
            @php
                $blog = (object) $blog;
            @endphp
            <a href="{{url($blog->url)}}" >
                <div class="shadow-md border-gray-900 bg-white hover:bg-gray-100 hover:shadow-sm my-4 p-5 rounded-lg">
                    <span class="font-semibold text-3xl block">{{$blog->title}}</span>
                    <span class="text-xl mb-4 block">{{$blog->description}}</span>
                    <small class="font-thin font-xl font-gray-600 block">Updated: {{$blog->date_updated}}</small>
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