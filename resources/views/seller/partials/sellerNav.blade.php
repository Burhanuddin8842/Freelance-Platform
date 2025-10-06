<div class="fixed sidebar-underlay top-0 w-full transition-all duration-300 min-h-screen bg-black/50 cursor-pointer" style="display: none;">
    <div class="bg-white min-h-screen w-1/3 p-3 sideNav">
        <div class="flex gap-3">

            <i class="bi bi-plus text-2xl text-gray-500 cursor-pointer" style="transform: rotate(45deg)"></i><img src="/logo.svg" alt="" class="h-[5vh]">
        </div>
        <ul class="unstyled text-gray-800 my-9">
                <li class="hover:text-gray-300 my-4 cursor-pointer">Dashboard</li>
                <li class="hover:text-gray-300 my-4 cursor-pointer">My Buisness <i class="bi bi-chevron-down"></i></li>
                <li class="hover:text-gray-300 my-4 cursor-pointer">Growth and Marketing <i class="bi bi-chevron-down"></i></li>
                <li class="hover:text-gray-300 my-4 cursor-pointer">Analytics <i class="bi bi-chevron-down"></i></li>
            </ul>
    </div>
</div>
<nav style="min-height: 10vh;">
    <div class="nav-upper h-[70%] flex md:justify-around justify-between items-center p-2 border-b-2 border-b-gray-300">
        <div class="upperNavLeft flex gap-3">
            <i class="bi bi-list block md:hidden cursor-pointer"></i>
            <img src="/logo.svg" alt="Fiverr" class="h-[100%]">
            <ul class="unstyled hidden gap-4 items-center text-gray-800 flex-wrap md:flex">
                <li class="hover:text-gray-300">Dashboard</li>
                <li class="hover:text-gray-300">My Buisness <i class="bi bi-chevron-down"></i></li>
                <li class="hover:text-gray-300">Growth and Marketing <i class="bi bi-chevron-down"></i></li>
                <li class="hover:text-gray-300">Analytics <i class="bi bi-chevron-down"></i></li>
            </ul>
        </div>
        <div class="upperNavright">
            <ul class="unstyled flex gap-4 items-center text-gray-800 text-xl flex-wrap">
                <li class="hover:text-gray-300"><i class="bi bi-bell"></i></li>
                <li class="hover:text-gray-300"><i class="bi bi-envelope"></i></li>
                <li class="hover:text-gray-300"><i class="b- bi-question-circle"></i></i></li>
                <li class="hover:text-gray-300"><i class="bi bi-person-fill"></i></li>
            </ul>
        </div>
    </div>
</nav>


<script>
    $('.bi-list').on('click', function(){
        $('.sidebar-underlay').css('display', 'block');
    })
    $('.sidebar-underlay').on('click', function(){
        $('.sidebar-underlay').css('display', 'none');
    })
    $('.sideNav').on('click', function(e){
        e.stopPropagation();
    })
</script>