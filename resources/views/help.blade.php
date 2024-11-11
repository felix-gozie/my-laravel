<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white md:bg-gray-200">
    <div class="py-4 bg-gray-100 grid grid-cols-2">
        <div class="flex hidden md:flex items-center justify-center mr-[49%] space-x-2">
            <div class="h-6 w-6 bg-orange-400 text-white rounded-full flex items-center justify-center">
                <i class="fa fa-star text-xs"></i>
            </div>
            <a href="#" class="text-xl text-orange-500">Sell on Jumia</a>
        </div>
        <div class="flex items-center justify-center space-x-2 pr-[80%]">
            <a class="text-lg font-bold text-black">Jumia</a>
            <div class="h-6 w-6 bg-orange-400 text-white rounded-full flex items-center justify-center">
                <i class="fa fa-star text-xs"></i>
            </div>
        </div>
    </div>
    @include('nav.nav_describe')
    <div class="relative hidden md:block bg-orange-200 h-40 pl-[7%] mt-2">
        <div class="pt-5 font-bold">Help Center</div>
        <div class="font-bold text-2xl">Hi, how can we help you?</div>
        <div class="flex space-x-4 absolute left-[7%] top-28">
            <a href="#" class="bg-white text-black font-bold px-4 shadow-lg rounded-lg flex items-center space-x-2">
                <span>Place your order</span>
                <i class="fa-solid fa-bag-shopping text-orange-200 text-5xl"></i>
            </a>
            <a href="#" class="bg-white text-black font-bold px-4 shadow-lg rounded-lg flex items-center space-x-2">
                <span>Track your order</span>
                <i class="fa-solid fa-truck text-orange-200 text-5xl"></i>
            </a>
            <a href="#" class="bg-white text-black font-bold px-4 py-8 shadow-lg rounded-lg flex items-center space-x-2">
                <span>Pay for your order</span>
                <i class="fa-regular fa-credit-card text-orange-200 text-5xl"></i>
            </a>
            <a href="#" class="bg-white text-black font-bold px-4 py-8 shadow-lg rounded-lg flex items-center space-x-2">
                <span>Cancel an order</span>
                <i class="fa-solid fa-xmark text-orange-200 text-5xl"></i>
            </a>
            <a href="#" class="bg-white text-black font-bold px-4 py-8 shadow-lg rounded-lg flex items-center space-x-2">
                <span>Create a return</span>
                <i class="fa-solid fa-rotate-left text-orange-200 text-5xl"></i>
            </a>
        </div>
    </div>

    <div class="flex hidden md:flex items-center pl-[7%] mt-[7%]">
        <div class="bg-white shadow-lg rounded-lg flex items-center space-x-2 px-4 py-2 w-[36%]">
            <i class="fa-solid fa-magnifying-glass text-gray-500"></i>
            <input type="text" placeholder='Type keywords like "return"' class="border-none focus:outline-none py-1 px-2 placeholder-gray-500 text-black w-full" />
        </div>
    </div>

    <!--Mobile view started here-->
    <div class="md:hidden px-2 space-y-2 py-8 bg-gray-100">
        <div class="flex relative bg-orange-500 justify-center rounded-md shadow-md shadow-gray-300">
            <i class="absolute fa-regular fa-comment-dots text-white left-3 mt-[12px] text-2xl"></i>
            <a href="#" class="text-white py-2 text-center text-lg">CHAT WITH US</a>
        </div>
        <p>NEED HELP?</p>
    </div>
    <div class="md:hidden">
        <div class="mt-4 px-2 space-y-6">
            <div class="flex justify-between ">
                <a href="orders.php">Place an Order</a>
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <div class="flex justify-between ">
                <a href="payment.php">Payment Options</a>
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <div class="flex justify-between ">
                <a href="#">Delivery Timeline</a>
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <div class="flex justify-between ">
                <a href="#">Track an order</a>
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <div class="flex justify-between ">
                <a href="#">Create a Return</a>
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <div class="flex justify-between ">
                <a href="#">Warranty</a>
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <div class="flex justify-between ">
                <a href="#">Help Center</a>
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <div class="flex justify-between ">
                <a href="#">About Us</a>
                <i class="fa-solid fa-angle-right"></i>
            </div>
        </div>
        <div class="flex bg-black pt-2 pl-3 text-xs">
            <div class="text-white px-3">
                <a href="#">CHAT WITH US</a>
            </div>
            <div class="text-white px-3">
                <a href="#">HELP CENTER</a>
            </div>
            <div class="text-white">
                <a href="#">CONTACT US</a>
            </div>
        </div>
        <div class="flex bg-black pt-2 pl-5 text-xs">
            <div class="text-white px-3">
                <a href="#">TERMS & CONDITIONS</a>
            </div>
            <div class="text-white px-3">
                <a href="#">PRIVACY NOTICE</a>
            </div>
        </div>
        <div class="flex bg-black pt-2 pl-8 text-xs">
            <div class="text-white px-3">
                <a href="#">COOKIE NOTICE</a>
            </div>
            <div class="text-white px-3">
                <a href="#">BECOME A SELLER</a>
            </div>
        </div>
        <div class="flex bg-black pt-2  text-xs">
            <div class="text-white px-3">
                <a href="#">REPORT A PRODUCT</a>
            </div>
            <div class="text-white px-3">
                <a href="#">JUMIA ANNIVERSARY 2024</a>
            </div>
        </div>
    </div>
    <!--Mobile view ends here-->
</body>
</html>
