@extends('layout', ['page_title' => 'Payment'])

@section('content')
    <div class="bg-white md:bg-gray-100">
        @include('nav.nav_main')
        <div class="relative hidden md:block">
            <div class=" bg-orange-200 h-40 pl-[7%] mt-2">
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
            <div class="flex">
                <!-- First Container -->
                <div class="flex flex-col bg-white w-[20%] ml-[7%] mt-4 rounded-md px-3 space-y-6 font-bold self-start">
                    <div class="flex justify-between pt-3">
                        <a href="order">Place an Order</a>
                        <i class="fa-solid fa-angle-right text-orange-500"></i>
                    </div>
                    <div class="flex justify-between">
                        <a href="#">Payment Options</a>
                        <i class="fa-solid fa-angle-right text-orange-500"></i>
                    </div>
                    <div class="flex justify-between">
                        <a href="#">Delivery Timeline</a>
                        <i class="fa-solid fa-angle-right text-orange-500"></i>
                    </div>
                    <div class="flex justify-between">
                        <a href="#">Track an order</a>
                        <i class="fa-solid fa-angle-right text-orange-500"></i>
                    </div>
                    <div class="flex justify-between">
                        <a href="#">Create a Return</a>
                        <i class="fa-solid fa-angle-right text-orange-500"></i>
                    </div>
                    <div class="flex justify-between">
                        <a href="#">Warranty</a>
                        <i class="fa-solid fa-angle-right text-orange-500"></i>
                    </div>
                    <div class="flex justify-between pb-3">
                        <a href="#">Help Center</a>
                        <i class="fa-solid fa-angle-right text-orange-500"></i>
                    </div>
                </div>
                
                <!-- Second Container -->
                <div class="flex flex-col bg-white ml-4 mt-4 w-[62%] rounded-md p-8 text-sm space-y-4">
                    <div class="flex flex-col" >
                        <div class="text-3xl font-bold pb-4">How to pay for your order</div>
                        <div class="text-lg">
                            Jumia offers multiple payment options. Pay for the item online (jumiaPay/BNPL) or on delivery by using your
                            card, bank transfer, or USSD via our jumiaPay secure plattform. You can also pay for your order using a voucher.
                        </div>
                    </div>
                    <div class="flex flex-col" >
                    <div class="text-2xl font-bold pb-4">Option 1: Pay on delivery</div>
                        <div class="text-lg">
                            You can pay for your orders upon delivery in a variety of ways to accomodate your needs. Choose to pay in cash
                            or, opt for a credit/debit card, bank transfer or mastercard
                        </div>
                    </div>
                    <div class="flex flex-col" >
                        <div class="text-2xl font-bold pb-4">Option 2: jumiaPay</div>
                            <div class="text-lg">
                            You can securely pay for your order on Jumia using Mastercard, Visa, or Verve cards, as well as bank transfer, or card payment.
                        </div>
                    </div>
                    <div class="flex flex-col" >
                        <div class="text-2xl font-bold pb-4">Option 3: Buy Now Pay Later (BNPL)</div>
                            <div class="text-lg">
                            Did you know you can buy now and pay later using our convenient payment options? Take advantage of Easy Buy or Credpal at checkout. 
                            For more information, visit this <a href="#"><span class="text-orange-500 font-bold">link.</span></a>
                        </div>
                    </div>
                    <div class="flex flex-col" >
                        <div class="text-2xl font-bold pb-4">Option 4: Mobile Money</div>
                            <div class="text-lg">
                            You can effortlessly pay for your orders using Opay or PalmPay at checkout,
                            ensuring a smooth and worry-free experience. 
                        </div>
                    </div>
                    <div class="flex flex-col" >
                        <div class="text-2xl font-bold pb-4">Option 5: Vouchers</div>
                            <div class="text-lg">
                            You can pay for your orders using a voucher code. Click <a href="#"><span class="text-orange-500 font-bold">HERE.</span></a> 
                            for a guide on how to use a voucher code 
                            <div class="text-lg pt-5">Choose the payment option that works best for you for a hassle-free shopping experience.</div>
                        </div>
                    </div>
                    <p class="text-lg">For payment upon delivery, including cash on delivery, credit/debit card payment, and bank, simply wait for your
                        order to be delivered and choose your prefered payment method.
                    </p>
                    <li class="text-lg">To pay with a voucher code for your order, follow the steps below:</li>
                    <p class="text-lg">- Add items to your cart and proceed to the "Checkout Page." </p>
                    <p class="text-lg">- Enter your voucher code in the "Voucher" field under the "Payment Method" Section.</p>
                    <p class="text-lg">- Apply the voucher by clicking "Add Voucher"</p>

                    <div class="flex flex-col" >
                        <div class="text-2xl font-bold pb-4">step 4: Confirm your payment</div>
                            <div class="text-lg">
                            Once your payment is complete, you will receive an order confirmation email. 
                        </div>
                    </div>
                    <li class="text-lg">If you've chosen online payment, the payment confirmation page will also display your payment details.
                        if you exprience any issues with payment, don't hesitate to reach out to our customer surport team.
                        We are here to help you and make sure that your jumia shopping exprince is as smooth as possible.
                    </li>
                    <p class="text-lg">We hope this guide has been helpful. Happy shopping!</p>
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
    </div>
@endsection

