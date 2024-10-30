<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="overflow-hidden pl-20 bg-white max-md:pl-5">
        <div class="flex gap-5 max-md:flex-col">
            <div class="flex flex-col w-[38%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-col self-stretch my-auto w-full max-md:mt-10 max-md:max-w-full">
                    <header class="flex flex-col self-start text-black max-md:max-w-full">
                        <h1 class="text-4xl font-bold max-md:max-w-full">Login to your Account</h1>
                        <p class="mt-3 text-xl max-md:max-w-full">Selamat datang! Pilih metode untuk login</p>
                    </header>
                    <div class="flex gap-5 mt-8 w-full text-xl text-black whitespace-nowrap max-md:max-w-full">
                        <button class="flex flex-1 gap-1.5 justify-center items-center py-4 pr-12 pl-12 border border-solid border-stone-300 rounded-[40px] hover:bg-slate-200 ease-in-out duration-300 max-md:px-5">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4c57985399fd18df77910d92f548cefa8a8a1e00764d39ca00d1c6505393a243?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square w-[35px]" />
                            <span class="self-stretch my-auto">Google</span>
                        </button>
                        <button class="flex flex-1 gap-1.5 justify-center items-center py-5 pr-10 pl-10 border border-solid border-stone-300 min-h-[65px] rounded-[40px] hover:bg-slate-200 ease-in-out duration-300 max-md:px-5">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7c4744d926195fd9de0d57460219a6e65293a580d22104d32e9c03048b4ed8ef?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square w-[30px]" />
                            <span class="self-stretch my-auto">Facebook</span>
                        </button>
                    </div>
                    <div class="flex gap-4 justify-between items-center mt-8 text-base text-neutral-400">
                        <div class="flex shrink-0 self-stretch my-auto h-px bg-zinc-300 w-[103px]"></div>
                        <p class="self-stretch my-auto">atau lanjutkan dengan email</p>
                        <div class="flex shrink-0 self-stretch my-auto h-px bg-zinc-300 w-[103px]"></div>
                    </div>
                    <form>
                        <div class="flex gap-2 items-center px-8 py-5 mt-8 text-xl font-medium whitespace-nowrap border border-solid border-stone-300 min-h-[65px] rounded-[40px] text-stone-300 max-md:px-5">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6fd39a4dbfc41981d1f8e5565a98b79ed42ba2b3a6af63a5ffaa755780ac8922?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" alt="" class="object-contain shrink-0 self-stretch my-auto w-6 aspect-square" />
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" id="email" placeholder="Email" class="bg-transparent border-none outline-none w-full" />
                        </div>
                        <div class="flex gap-2 items-center px-8 py-5 mt-6 text-xl font-medium whitespace-nowrap border border-solid border-stone-300 min-h-[65px] rounded-[40px] text-stone-300 max-md:px-5">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b5f7834670f96e440ab2a080a88307bd01fddf4a811573cfa51c868582ef7ee?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" alt="" class="object-contain shrink-0 self-stretch my-auto w-6 aspect-square" />
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" id="password" placeholder="Password" class="bg-transparent border-none outline-none w-full" />
                        </div>
                        <div class="flex gap-10 mt-6 w-full text-sm font-semibold max-md:max-w-full">
                            <div class="flex flex-1 gap-2 text-stone-300">
                                <input type="checkbox" id="remember-me" class="rounded bg-neutral-400 bg-opacity-10 h-[19px] w-[19px]" />
                                <label for="remember-me">Remember me</label>
                            </div>
                            <a href="#" class="my-auto text-right text-blue-700">Lupa Password?</a>
                        </div>
                        <button type="submit" class="w-full px-8 py-5 mt-12 text-xl font-medium text-white whitespace-nowrap bg-blue-700 min-h-[65px] rounded-[40px] hover:bg-blue-800 ease-in-out duration-300 max-md:px-5 max-md:mt-10">
                            Login
                        </button>
                    </form>
                    <p class="self-center mt-6 ml-3 text-base">
                        Belum punya akun? <a href="/register" class="hover:text-blue-700 hover:underline">Buat disini</a>
                    </p>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-[62%] hidden md:block max-md:ml-0 max-md:w-full">
                <div class="flex shrink-0 mx-auto max-w-full bg-blue-700 h-[1024px] rounded-[50px_0px_0px_50px] w-[720px] max-md:mt-10"></div>
            </div>
        </div>
    </section>
</body>

</html>