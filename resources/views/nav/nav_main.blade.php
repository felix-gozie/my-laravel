
<div class="hidden md:block w-full bg-white z-50 sticky top-0 mb-[1%]">
    <div class="relative flex items-center w-[92%] pb-3 pl-[7%] pt-4 ">
            <a href="" class="text-4xl font-bold text-black">JUMIA</a>
            <div class="bg-orange-500 rounded-full py-1 mr-[93px] px-2">
                <i class="fa fa-star text-white"></i>
            </div>
            <div class="relative flex-grow max-w-[50%]">
                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <img class="w-5 h-5" src="icons/icons8-search-50.png">
                </span>
                <input class="placeholder:italic rounded-md placeholder:text-slate-400 block bg-white w-full border border-slate-300 py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 sm:text-lg" placeholder="Search products, brands and categories..." type="text" name="search"/>
            </div>

            <button class="block bg-orange-500 py-2 ml-2 shadow-lg px-4 rounded-md text-white hover:bg-orange-700">SEARCH</button>
            
            <div class="flex items-center ml-4 relative">
                <div class="group">
                    <a href="#">
                    <span class="flex items-center hover:text-orange-500">
                    <i class="fa-solid fa-user text-2xl"></i>
                    @if(Auth::check())
                        <span class="font-bold ml-1">Account Hi, {{Auth::user()->fname }}</span>
                    @else
                        <span class="font-bold ml-1">Account Hi, Guest</span>
                    @endif
                </span>
                    </a>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-lg w-[200px] py-8 shadow-lg">
                        
                        <a href="/login" class="block px-4 py-2 text-white bg-orange-500 hover:bg-orange-700 shadow-lg rounded-md text-center">login</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">
                            <i class="fa-solid fa-box mr-2 text-2xl"></i>Orders
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">
                            <i class="fa-solid fa-heart mr-2 text-2xl"></i>Saved Items
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center ml-4 relative">
                <div class="group">
                    <a href="">
                        <span class="flex items-center hover:text-orange-500">
                            <i class="fa-solid fa-circle-info text-2xl"></i><span class="font-bold ml-1">Help</span>
                        </span>
                    </a>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-lg p-6 w-[250px] py-8 shadow-lg">
                        <a href="help.php" class="block px-4 py-2 hover:bg-gray-100 rounded-md">
                            <i class="text-2xl"></i>Help Center
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Place an order</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Payment options</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Track an order</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Cancel an order</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Returns & Refunds</a>
                        <a href="#" class="block px-4 py-2 text-white bg-orange-500 hover:bg-orange-700 rounded-md text-center shadow-lg mt-4">Live Chat</a>
                    </div>
                </div>
            </div>
            
        <div class="flex items-center ml-4">
            <a href="">
                <div class="flex items-center hover:text-orange-500">
                    <i class="fa-solid fa-cart-shopping text-2xl"></i><span class="font-bold ml-1">Cart</span>
                </div>
            </a>
        </div>
    </div>
</div>

<!--Mobile view started here-->
<!-- Main Navbar -->
<nav class="block md:hidden bg-white shadow-lg fixed top-0 left-0 w-full z-10">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between py-3">
            <div>
                <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                    <i class="fa-solid fa-bars text-2xl mr-2 hover:text-orange-500"></i>
                </button>
            </div>
            <div class="flex items-center pl-2">
                <a href="#" class="text-2xl font-bold text-black">JUMIA</a>
                <div class="bg-orange-500 rounded-full py-1 px-2 w-5 h-5 flex items-center justify-center">
                    <i class="fa fa-star text-white"></i>
                </div>
            </div>
            <div class="flex items-center ml-auto">
                <a href="myaccount.php" class="text-gray-800">
                    <i class="fa-solid fa-user text-2xl hover:text-orange-500"></i>
                </a>
                <a href="#" class="text-gray-800 ml-4">
                    <i class="fa-solid fa-cart-shopping text-2xl"></i>
                </a>
            </div>
        </div>
        <div class="relative flex-grow">
            <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                <img class="w-5 h-5" src="icons/icons8-search-50.png" alt="search-icon">
            </div>
            <input class="placeholder:italic rounded-full placeholder:text-slate-400 block bg-white w-full border border-slate-300 py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 sm:text-lg" placeholder="Search products, brands and categories..." type="text" name="search"/>
        </div>
    </div>
</nav>

<!-- Sliding Side Menu -->
<div id="side-menu" class="fixed top-0 -left-full bg-white z-20 w-[80%] h-full shadow-lg transition-all duration-300 ease-in-out overflow-y-auto">
    <div class="py-2 px-4 flex flex-col h-full">
        <!-- Close "X" Button -->
        <div class="flex">
            <div class="flex items-center justify-between">
                <button id="menu-close" class="text-4xl font-bold text-gray-800 hover:text-orange-500 focus:outline-none">
                    &times;
                </button>
            </div>
            <!-- JUMIA Logo and Star Icon -->
            <div class="flex items-center pl-3 pt-2">
                <a href="header.php" class="text-2xl font-bold text-black">JUMIA</a>
                <div class="bg-orange-500 rounded-full py-1 px-2  w-5 h-5 flex items-center justify-center ">
                    <i class="fa fa-star text-white"></i>
                </div>
            </div>
        </div>
        <!-- Menu Items -->
        <div class="relative">
            <div class="flex flex-col justify-between">
                <div class="flex justify-between items-center py-4">
                    <a href="help.php" class="text-gray-800 font-semibold hover:text-orange-500 text-sm">NEED HELP?</a>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <div class="flex justify-between items-center py-3">
                    <a href="#" class="text-gray-800 font-semibold hover:text-orange-500">MY JUMIA ACCOUNT</a>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <a href="orders.php" class="block py-2 hover:bg-gray-100 rounded-md flex items-center">
                    <i class="fa-solid fa-box mr-2 text-2xl"></i>Orders
                </a>
                <a href="inbox.php" class="block py-2 hover:bg-gray-100 rounded-md flex items-center">
                    <i class="fa-solid fa-envelope mr-2 text-2xl"></i>Inbox
                </a>
                <a href="#" class="block py-2 hover:bg-gray-100 rounded-md flex items-center">
                    <i class="fa-solid fa-message mr-2 text-2xl"></i>Pending Reviews
                </a>
                <a href="voucher.php" class="block py-2 hover:bg-gray-100 rounded-md flex items-center">
                    <i class="fa-solid fa-ticket mr-2 text-2xl"></i>Voucher
                </a>
                <a href="save.php" class="block py-2 hover:bg-gray-100 rounded-md flex items-center">
                    <i class="fa-solid fa-heart mr-2 text-2xl"></i>Saved Items
                </a>
            </div>

            <hr class="absolute w-screen border-t border-gray-300 -ml-4">
            <a href="#">
                <div class="flex justify-between items-center text-xs font-bold pt-3">
                    <span>OUR CATEGORIES</span>
                    <span class="text-orange-500 font-bold">See All</span>
                </div>
            </a>
            <a href="#" class="block  py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-phone text-2xl px-2"></i> Phones & Tablets
            </a>
            <a href="#" class="block  py-1 text-sm hover:text-orange-500">
                <i class="fa-solid fa-blender-phone text-2xl px-2"></i> Appliances
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-tv text-2xl px-2"></i> Electronics
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-apple-whole text-2xl px-2"></i> Supermarket
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-notes-medical text-2xl px-2"></i> Health and Beauty
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-house-medical text-2xl px-2"></i> Home and Office
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-house text-2xl px-2"></i> Power
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-tv text-2xl px-2"></i> Computing
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-shirt text-2xl px-2"></i> Women's Fashion
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-user-tie text-2xl px-2"></i> Men's Fashion
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-baby text-2xl px-2"></i> baby's Product
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-gamepad text-2xl px-2"></i> Gaming
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-dumbbell text-2xl px-2"></i> Sporting Goods
            </a>
            <a href="#" class="block py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-car text-2xl px-2"></i> Automobile
            </a>
            <hr class="absolute w-screen border-t border-gray-300 -ml-4">
            <a href="#">
                <div class="flex justify-between items-center text-xs font-bold pt-3 pl-2">
                    <span>OUR SERVICES</span>
                    <span class="text-orange-500 font-bold">See All</span>
                </div>
            </a>
            <a href="#" class="flex block px-2 py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-star text-sm bg-black rounded-full w-5 h-5 text-white flex items-center justify-center text-2xl mr-2"></i> J-Force
            </a>
            <a href="#" class="flex block px-2 py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-star text-sm bg-black rounded-full w-5 h-5 text-white flex items-center justify-center text-2xl mr-2"></i> Pay Artime & Bills
            </a>
            <a href="#" class="flex block px-2 py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-star text-sm bg-black rounded-full w-5 h-5 text-white flex items-center justify-center text-2xl mr-2"></i> Pay Electricity Bills
            </a>
            <a href="#" class="flex block px-2 py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-star text-sm bg-black rounded-full w-5 h-5 text-white flex items-center justify-center text-2xl mr-2"></i> Pay Internet Bills
            </a>
            <a href="#" class="flex block px-2 py-2 text-sm hover:text-orange-500">
                <i class="fa-solid fa-star text-sm bg-black rounded-full w-5 h-5 text-white flex items-center justify-center text-2xl mr-2"></i> Buy Data
            </a>
            <hr class="absolute w-screen border-t border-gray-300 -ml-4">
            <div class="mt-6 pl-2">
                <a href="#" class="block py-4">Sell on Jumia</a>
                <a href="#" class="block py-4">Service Center</a>
                <a href="#" class="block py-4">Contact us</a>
            </div>
        </div>
    </div>
</div>

<!--Mobile view ended here-->
<script>
    // Elements
    const menuToggle = document.getElementById('menu-toggle');
    const sideMenu = document.getElementById('side-menu');
    const closeMenu = document.getElementById('menu-close');

    // Open the side menu when the hamburger icon is clicked
    menuToggle.addEventListener('click', function() {
        sideMenu.classList.remove('-left-full');
        sideMenu.classList.add('left-0');
    });

    // Close the side menu when the "X" button is clicked
    closeMenu.addEventListener('click', function() {
        sideMenu.classList.remove('left-0');
        sideMenu.classList.add('-left-full');
    });
</script>

