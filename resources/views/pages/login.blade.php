<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-gradient-to-b from-green-600 via-green-200 to-green-100">

    <div class="flex h-full">
      
        <div class="w-1/2 flex items-center justify-center">
            <div class="bg-white p-8 rounded-[20px] shadow-lg w-full max-w-md">
                <h2 class="text-2xl font-bold text-left text-gray-700 ">Login</h2>
                <div class="mt-2 mb-6 text-sm">
                    <span>
                        Login untuk menggunakan apikasi
                    </span>
                </div>

                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-600">Email</label>
                        <input type="email" name="email" placeholder="Masukkan Email Anda" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-600">Password</label>
                        <div class="relative">
    <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm text-gray-600 hover:text-gray-800">👁️</button>
</div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-20 px-4 py-2 font-semibold text-white bg-green-600 rounded-[15px] hover:bg-green-700">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- KANAN: OPSIONAL -->
    <div class="w-1/2 flex my-20 justify-center">
            <h1 class="text-3xl font-bold text-white">BASMALAH PLASTIK
            <div class="flex items-center justify-center mt-4"> <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-80 h-auto">
            </div>
            </h1>
            
        </div>
        
    </div>


<script>
function togglePassword() {
    const passwordField = document.getElementById("password");
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
}
</script>
</body>
</html>
