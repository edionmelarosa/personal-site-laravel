<header id="header" class="shadow-sm border-b-2 py-3 bg-white">
    <div class="flex pt-2 px-3 md:px-10 max-w-6xl m-auto">
        <div class="logo w-3/4 sm:w-5/6">
            <a href="/"
                class="text-gray-800 hover:text-blue-800">
                <h1 class="w-full md:w-1/2 text-xl text-2xl font-bold">Espiridion Larosa Jr. 
                {{-- <span class="text-sm text-gray-700 block font-hairline font-semibold">Full-stack developer, climber and cyclist</span> --}}
            </a>
        </div>
        <div class="text-right w-1/3">
            @include('sections.nav')
        </div>
    </div>
</header>
<nav id="nav-mobile"
    class="bg-gray-200 px-3 border"
    style="display: none;">
    <ul class="p-0">
        @include('components.navLinks')
    </ul>
</nav>