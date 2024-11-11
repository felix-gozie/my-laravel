<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="flex flex-col items-center justify-center py-8 shadow-lg max-w-xl mx-auto mt-6">
        <div class="flex flex-col items-center mb-4">
            <div class="h-12 w-12 bg-orange-500 flex items-center justify-center rounded-full">
                <i class="fa fa-star text-3xl text-white"></i>
            </div>
            <p class="font-bold text-black mt-4">Please Log in</p>
        </div>
        <input type="text" name="email" placeholder="Email" class="px-4 py-2 mt-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-500"/>
        <div class="relative mt-4">
            <input id="password" type="password" name="password" placeholder="Password" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-500"/>
            <i id="togglePassword" class="fa fa-eye-slash absolute right-3 top-3 cursor-pointer text-gray-500"></i>
        </div>
        <button class="mt-4 bg-orange-500 px-4 py-2 text-white font-bold rounded-lg shadow-lg" type="submit">Log in</button>
        <a href="{{ route('register') }}" class="mt-2">If you don't have an account<br><span class="text-orange-500 ml-[35%]"> Click here!</span></a>
    </div>
    <div class="flex items-center justify-center mt-[5%] space-x-1">
        <div class="font-bold text-black text-2xl">JUMIA</div>
        <i class="fa fa-star bg-orange-500 text-white rounded-full px-1 py-1"></i>
    </div>
</form>


    <script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        
        password.setAttribute('type', type);
        
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>
</body>
</html>