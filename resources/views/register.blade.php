<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="overflow-hidden pl-20 bg-white max-md:pl-5">
        <div class="flex gap-5 max-md:flex-col">
            <div class="flex flex-col w-[38%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-col self-stretch my-auto w-full max-md:mt-10 max-md:max-w-full">
                    <header class="flex flex-col text-black max-md:mr-2.5 max-md:max-w-full">
                        <h1 class="text-4xl font-bold max-md:max-w-full">Buat akun anda</h1>
                        <p class="mt-3 text-xl max-md:max-w-full">Selamat datang! Pilih metode untuk buat akun</p>
                    </header>
                    <div class="flex gap-5 mt-8 w-full text-xl text-black whitespace-nowrap max-md:max-w-full">
                        <button class="flex flex-1 gap-1.5 justify-center items-center py-4 pr-12 pl-12 border border-solid border-stone-300 rounded-[40px] hover:bg-slate-200 ease-in-out duration-300 max-md:px-5">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/496610fc7abbe80f29b10156b8d6aeff09349e86e5097116822d5d01e6f0ce7f?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square w-[35px]" />
                            <span class="self-stretch my-auto">Google</span>
                        </button>
                        <button class="flex flex-1 gap-1.5 justify-center items-center py-5 pr-10 pl-10 border border-solid border-stone-300 min-h-[65px] rounded-[40px] hover:bg-slate-200 ease-in-out duration-300 max-md:px-5">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1705c32c4a2b81901cab332965940a05642c92ff3ca9edc88966e834eb629aa2?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square w-[30px]" />
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
                            <input type="email" id="email" placeholder="Email" class="bg-transparent border-none w-full focus:outline-none" />
                        </div>
                        <div class="flex gap-2 items-center px-8 py-5 mt-6 text-xl font-medium border border-solid border-stone-300 min-h-[65px] rounded-[40px] text-stone-300 max-md:px-5">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/30b21a42f1139092a9469d968ab67d605f5a4444d81a01b45e67fcf38d126051?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" alt="" class="object-contain shrink-0 self-stretch my-auto w-6 aspect-square" />
                            <label for="phone" class="sr-only">Phone Number</label>
                            <input type="tel" id="phone" placeholder="Phone Number" class="bg-transparent border-none w-full focus:outline-none" />
                        </div>
                        <div class="flex gap-2 items-center px-8 py-5 mt-6 text-xl font-medium border border-solid border-stone-300 min-h-[65px] rounded-[40px] text-stone-300 max-md:px-5">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b5f7834670f96e440ab2a080a88307bd01fddf4a811573cfa51c868582ef7ee?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" alt="" class="object-contain shrink-0 self-stretch my-auto w-6 aspect-square" />
                            <label for="password" class="sr-only">Masukan Password</label>
                            <input type="password" id="password" placeholder="Masukan Password" class="bg-transparent border-none w-full focus:outline-none" />
                        </div>
                        <div class="flex gap-2 items-center px-8 py-5 mt-6 text-xl font-medium border border-solid border-stone-300 min-h-[65px] rounded-[40px] text-stone-300 max-md:px-5">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b5f7834670f96e440ab2a080a88307bd01fddf4a811573cfa51c868582ef7ee?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" alt="" class="object-contain shrink-0 self-stretch my-auto w-6 aspect-square" />
                            <label for="confirm-password" class="sr-only">Ulangi Password</label>
                            <input type="password" id="confirm-password" placeholder="Ulangi Password" class="bg-transparent border-none w-full focus:outline-none" />
                        </div>
                        <div class="flex gap-10 mt-6 w-full text-sm font-semibold max-md:max-w-full">
                            <div class="flex flex-1 gap-2 text-stone-300">
                                <input type="checkbox" id="remember-me" class="rounded bg-neutral-400 bg-opacity-10 h-[19px] w-[19px]" />
                                <label for="remember-me" class="my-auto">Remember me</label>
                            </div>
                            <a href="#" class="my-auto text-right text-blue-700">Lupa Password?</a>
                        </div>
                        <button type="submit" class="w-full gap-2 self-stretch px-8 py-5 mt-12 text-xl font-medium text-white bg-blue-700 min-h-[65px] rounded-[40px] hover:bg-blue-800 ease-in-out duration-300 max-md:px-5 max-md:mt-10">
                            Buat Akun
                        </button>
                    </form>
                    <p class="self-center mt-6 ml-4 text-base">
                        Sudah punya akun? <a href="/login" class="hover:text-blue-700 hover:underline">Masuk disini</a>
                    </p>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-[62%] max-md:ml-0 max-md:w-full hidden md:block">
                <div class="flex shrink-0 mx-auto max-w-full bg-blue-700 h-[1024px] rounded-[50px_0px_0px_50px] w-[720px] max-md:mt-10"></div>
            </div>
        </div>
    </section>
</body>

</html>