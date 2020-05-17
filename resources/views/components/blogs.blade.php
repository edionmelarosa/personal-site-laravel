<section id="blogs">
    <h2>Blogs</h2>
    <ul class="section-list">
        @foreach (App\Blog\Blog::all() as $blog)
            @php
                $blog = (object) $blog;
            @endphp
            <a href="{{url($blog->url)}}">
                <li class="section-item">
                    {{$blog->title}}
                <br>
                <span>{{$blog->description}}</span>
                <br>
                <small><i class="far fa-clock"></i> Updated: {{$blog->date_updated}}</small>
                </li>
            </a>
        @endforeach
    </ul>
</section>

<style>
    #blogs .section-item {
        margin-bottom: 15px;
    }
</style>