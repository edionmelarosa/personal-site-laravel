<nav id="nav">
    <span onclick="toggleHeaderMenu()"
        class="md:hidden">
        <svg id="nav-mobile-show" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 32 32" 
            class="fill-current text-gray-900 h-15 w-6 float-right">
            <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"></path>
        </svg>
        <svg id="nav-mobile-hide" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 36 30" 
            class="fill-current text-gray-900 h-15 w-6 float-right hidden">
            <polygon points="32.8,4.4 28.6,0.2 18,10.8 7.4,0.2 3.2,4.4 13.8,15 3.2,25.6 7.4,29.8 18,19.2 28.6,29.8 32.8,25.6 22.2,15 "></polygon>
        </svg>
    </span>
    <ul class="p-0 float-right hidden md:flex">
        <li class="mr-4 font-bold list-none text-xl md:text-base">
            <a class="text-gray-800 hover:text-blue-800" href="/blogs">BLOG</a>                            
        </li>
        <li class="mr-4 font-bold list-none text-xl md:text-base">
            <a class="text-gray-800 hover:text-blue-800" href="/resume">RESUME</a>                            
        </li>
    </ul>
</nav>
<script>
    function toggleHeaderMenu() {
        var navMobile = document.getElementById("nav-mobile");
        var navMobileHide = document.getElementById("nav-mobile-hide");
        var navMobileShow = document.getElementById("nav-mobile-show");

        navMobile.style.display = (navMobile.style.display === 'none') ? 'block' : 'none';

        if (navMobile.style.display === 'block') {
            navMobileShow.style.display = 'none';
            navMobileHide.style.display = 'block';
        } else {
            navMobileShow.style.display = 'block';
            navMobileHide.style.display = 'none';
        }
    }
</script>