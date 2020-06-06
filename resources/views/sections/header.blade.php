<header id="header" class="shadow-sm border-b-2 py-3 bg-white">
    <div class="flex pt-2 px-3 md:px-10 max-w-6xl m-auto">
        <div class="logo w-3/4 sm:w-5/6">
            <a href="/">
                <div class="flex">
                    <img class="hidden md:flex md:w-1/2 rounded-full float-left mr-6" src="{{url('assets/img/edion-profile.png')}}" alt="Photo of Espiridion Larosa" style="width: 64px;height:100%;">
                    <h1 class="w-full md:w-1/2 text-xl text-2xl font-bold text-gray-800 hover:text-blue-800">Espiridion Larosa Jr. 
                        <span class="text-sm text-gray-700 block font-hairline font-semibold">Full-stack developer, climber and cyclist</span>
                    </h1>
                </div>
            </a>
        </div>
        <div class="pt-2 text-right w-1/3">
            @include('sections.nav')
        </div>
    </div>
</header>
<nav id="nav-mobile"
    class="bg-gray-200 px-3 border"
    style="display: none;">
    <ul class="p-0">
        <li class="mr-4 font-bold list-none text-base md:text-base">
            <a class="text-gray-800 hover:text-blue-800" href="/blogs">BLOG</a>                            
        </li>
        <li class="mr-4 font-bold list-none text-base md:text-base">
            <a class="text-gray-800 hover:text-blue-800" href="/resume">RESUME</a>                            
        </li>
    </ul>
</nav>