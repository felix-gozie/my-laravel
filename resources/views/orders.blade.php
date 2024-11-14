<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    @include('nav.nav_describe')
    <div class="hidden md:block">
        <div class="bg-gray-100 pt-5 pl-[7%] flex space-x-4">
            <div class="w-[25%] shadow-lg bg-white rounded-lg">
                <a href="myaccount.php" class="block px-4 py-2 bg-gray-300 rounded-sm">
                    <i class="fa-solid fa-user mr-2 text-2xl font-semibold"></i>My Jumia Account
                </a>
                <a href="orders" class="block px-4 py-2 hover:bg-gray-100 rounded-md">
                    <i class="fa-solid fa-box mr-2 text-2xl"></i>Orders
                </a>
                <a href="inbox.php" class="block px-4 py-2 hover:bg-gray-100 rounded-md">
                    <i class="fa-solid fa-envelope mr-2 text-2xl"></i>Inbox
                </a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">
                    <i class="fa-solid fa-message mr-2 text-2xl"></i>Pending Reviews
                </a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">
                    <i class="fa-solid fa-clock-rotate-left mr-2 text-2xl"></i>Recently Viewed
                </a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">
                    <i class="fa-solid fa-shop mr-2 text-2xl"></i>Followed Sellers
                </a>
                <a href="save.php" class="block px-4 py-2 hover:bg-gray-100 rounded-md">
                    <i class="fa-solid fa-heart mr-2 text-2xl"></i>Saved Items
                </a>
                <a href="voucher.php" class="block px-4 py-2 hover:bg-gray-100 rounded-md">
                    <i class="fa-solid fa-ticket mr-2 text-2xl"></i>Voucher
                </a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Account Management</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Address Book</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Newsletter Preferences</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded-md">Close Account</a>
                <div class="flex justify-center mt-4 w-auto">
                    <a href="logout.php" class="block px-4 py-2 hover:bg-orange-200 text-center text-orange-500 rounded-md">
                        Logout
                    </a>
                </div>
            </div>

            <div class="py-6 shadow-lg bg-white text-black w-[64%] text-black rounded-lg">
                <div class="border-b pl-4 text-2xl -mt-4 pb-1">
                    Orders
                </div>
                <div class="pt-5 pl-8 border-b">
                    <a href="#" class="pl-4 hover:text-orange-500">
                        ONGOING/DELIVERED()
                    </a>
                    <a href="#" class="pl-4 hover:text-orange-500">
                        CANCELED/RETURNED()
                    </a>
                </div>
                <div class="pl-[47%] pt-[7%] text-orange-500 text-7xl">
                    <i class="fa-solid fa-cart-arrow-down pb-3"></i>
                </div>
            </div>
        </div>
        <div class="py-4 bg-black">
            <div class="flex items-center pl-[7%] space-x-1">
                <a class="text-4xl font-bold text-white mt-[-16%]">JUMIA</a>
                <div class="h-6 w-6 bg-orange-400 rounded-full flex items-center justify-center mt-[-16%]">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="flex flex-col pl-[10%] space-y-3">
                    <div class="text-white font-bold">NEW TO JUMIA?</div>
                    <div class="text-white text-sm text-slate-200">Subscribe to our Newsletter to get updates on our latest offers!</div>
                    <div class="flex items-center space-x-6 ">
                        <input class="bg-white w-[40%] h-14 rounded-lg" type="text" name="email">
                        <button class="border-2 text-white font-bold h-14 px-4 rounded-lg border-white hover:border-orange-500 hover:text-orange-500">MALE</button>
                        <button class="border-2 text-white font-bold h-14 px-4 rounded-lg border-white hover:border-orange-500 hover:text-orange-500">FEMALE</button>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" class="w-5 h-5 mb-5">
                        <span class="text-white">I agree to Jumia's Privacy and Cookie Policy. You can unsubscribe from the newsletters at <br> any time.</span>
                    </div>
                    <div class="pl-6">
                        <a href="#" class="text-orange-500 hover:underline text-xs">I accept the legal Terms</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 bg-gray-600 flex">
            <div class="text-white pl-[7%] font-bold">
                NEED HELP?
                <div class="text-sm font-normal mt-2">
                    <a href="#" class="block text-slate-200 hover:underline">Chat with us</a>
                    <a href="#" class="block text-slate-200 hover:underline">Help Center</a>
                    <a href="#" class="block text-slate-200 hover:underline">Contact Us</a>
                </div>
                <div class="mt-2">
                    USEFUL LINKS
                </div>
                <div class="text-sm font-normal mt-2">
                    <a href="#" class="block text-slate-200 hover:underline">Service center</a>
                    <a href="#" class="block text-slate-200 hover:underline">How to shop on Jumia?</a>
                    <a href="#" class="block text-slate-200 hover:underline">Delivery options and timelines</a>
                    <a href="#" class="block text-slate-200 hover:underline">How to return a product on Jumia?</a>
                    <a href="#" class="block text-slate-200 hover:underline">Corporate and bulk purchases</a>
                    <a href="#" class="block text-slate-200 hover:underline">Report a product</a>
                    <a href="#" class="block text-slate-200 hover:underline">Dispute Resolution Policy</a>
                    <a href="#" class="block text-slate-200 hover:underline">Returns and Refund Timeline</a>
                    <a href="#" class="block text-slate-200 hover:underline">Return Policy</a>
                </div>
                <div class="mt-6">
                    JOIN US ON
                </div>
                <div class="mt-4 flex space-x-7 text-3xl">
                    <a href="#" class="hover:text-orange-500">
                        f
                    </a>
                    <a href="#" class="text-white hover:text-orange-500">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="text-white hover:text-orange-500">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-white hover:text-orange-500">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            <div class="text-white pl-[7%] font-bold">
                ABOUT JUMIA
                <div class="text-sm font-normal mt-2">
                    <a href="#" class="block text-slate-200 hover:underline">About us</a>
                    <a href="#" class="block text-slate-200 hover:underline">Jumia careers</a>
                    <a href="#" class="block text-slate-200 hover:underline">Jumia express</a>
                    <a href="#" class="block text-slate-200 hover:underline">Terms and conditions</a>
                    <a href="#" class="block text-slate-200 hover:underline">Privacy Notice</a>
                    <a href="#" class="block text-slate-200 hover:underline">Jumia Store Credit Terms & Conditions</a>
                    <a href="#" class="block text-slate-200 hover:underline">Jumia Payment Information Guideline</a>
                    <a href="#" class="block text-slate-200 hover:underline">Cookie Notice</a>
                    <a href="#" class="block text-slate-200 hover:underline">Jumia Global</a>
                    <a href="#" class="block text-slate-200 hover:underline">Official Stores</a>
                    <a href="#" class="block text-slate-200 hover:underline">Flash Sales</a>
                </div>
            </div>
            <div class="text-white pl-[7%] font-bold">
                MAKE MONEY WITH JUMIA
                <div class="text-sm font-normal mt-2">
                    <a href="#" class="block text-slate-200 hover:underline">Sell on Jumia </a>
                    <a href="#" class="block text-slate-200 hover:underline">Vendor hub</a>
                    <a href="#" class="block text-slate-200 hover:underline">Become a sales consultant</a>
                    <a href="#" class="block text-slate-200 hover:underline">Join the Jumia KOL Program</a>    
                </div>
            </div>
            <div class="text-white pl-[7%] font-bold">
                    JUMIA INTERNATIONAL
                    <div class="flex">
                        <div class="text-sm font-normal mt-2">
                            <a href="#" class="block text-slate-200 hover:underline">Algeria </a>
                            <a href="#" class="block text-slate-200 hover:underline">Egypt</a>
                            <a href="#" class="block text-slate-200 hover:underline">Ivory Coast</a>
                            <a href="#" class="block text-slate-200 hover:underline">Ghana</a> 
                            <a href="#" class="block text-slate-200 hover:underline">Kenya</a>   
                        </div>
                        <div class="text-sm font-normal mt-2 ml-12">
                            <a href="#" class="block text-slate-200 hover:underline">Morocco </a>
                            <a href="#" class="block text-slate-200 hover:underline">Senegal</a>
                            <a href="#" class="block text-slate-200 hover:underline">Tunisia</a>
                            <a href="#" class="block text-slate-200 hover:underline">Uganda</a> 
                            <a href="#" class="block text-slate-200 hover:underline">Zando</a>   
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!--Mobile view started here -->
    <div class="block md:hidden">
        <div class="bg-orange-200 p-2 pl-3">
            <p class="text-sm ">Help Center</p>
            <p class="text-sm ">Place an Order</p>
            <p class="text-sm ">You can try to find your problem here or contact us</p>
            <div class="relative mt-2">
                <i class="absolute fa-solid fa-magnifying-glass text-gray-500 m-2"></i>
                <input type="text" placeholder='Type keywords like "return"' class="rounded-md text-sm pl-8 border-none focus:outline-none py-2 px-2 placeholder-gray-500 text-black w-full" />
            </div>
        </div>
        <div class="bg-gray-100">
            <p class="font-bold p-3">how to place an order</p>
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