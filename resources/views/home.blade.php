<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<section class="flex overflow-hidden flex-col pt-8 bg-white">
  <div class="flex flex-col px-20 w-full max-md:px-5 max-md:max-w-full">
    <!-- Header -->
    <header class="flex flex-wrap gap-10 justify-between items-center w-full max-md:max-w-full">
      <div class="flex flex-wrap gap-10 items-center self-stretch my-auto min-w-[240px] max-md:max-w-full">
        <h1 class="self-stretch my-auto text-3xl font-bold text-black">
          Gelar <span class="text-blue-700">Product</span>
        </h1>
        <!-- Navbar -->
        <nav class="flex gap-5 items-center self-stretch my-auto text-base min-w-[240px] text-neutral-700">
          <a href="/" class="self-stretch my-auto hover:text-blue-700 hover:underline ease-in-out duration-300">Beranda</a>
          <a href="#services" class="self-stretch my-auto hover:text-blue-700 hover:underline ease-in-out duration-300">Layanan</a>
          <a href="#about" class="self-stretch my-auto hover:text-blue-700 hover:underline ease-in-out duration-300">Tentang Kita</a>
          <a href="#contact" class="self-stretch my-auto hover:text-blue-700 hover:underline ease-in-out duration-300">Contact</a>
        </nav>
        <!-- End Navbar -->
      </div>
      <div class="flex gap-6 items-center self-stretch my-auto text-base font-medium min-w-[240px]">
        <a href="/login" class="gap-2 self-stretch px-8 py-4 my-auto text-white bg-blue-700 rounded-[35px] border border-blue-700 hover:bg-white hover:text-blue-700 ease-in-out duration-300 max-md:px-5">Login</a>
        <a href="/register" class="gap-2 self-stretch px-8 py-4 my-auto text-blue-700 bg-blue-700 bg-opacity-10 rounded-[35px] hover:text-white hover:bg-blue-700 ease-in-out duration-300 max-md:px-5">Sign Up</a>
      </div>
    </header>
    <!-- End Header -->

    <!-- Content -->
    <div class="flex gap-4 items-center self-center px-4 py-2 mt-32 text-base text-center rounded-3xl border border-solid border-stone-300 text-neutral-400 max-md:mt-10">
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/854b0a0c7ace2a340ccf6f42c1ab43cb0a156a2efeebdbb55a95366c3c82408c?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-contain shrink-0 self-stretch my-auto aspect-[3] w-[78px]" alt="" />
      <p>Sudah 10+ UMKM Bergabung</p>
    </div>
    <div class="flex flex-col justify-center items-center self-center mt-4 max-w-full w-[627px]">
      <div class="flex flex-col justify-center items-center w-full text-center">
        <h2 class="text-3xl font-bold text-blue-700 max-md:max-w-full">
          <span>Tingkatkan Bisnis Anda Dengan</span>
          <span class="font-semibold">Gelar</span>
          <span class="font-semibold text-blue-700">Product</span>
          <span class="text-blue-700">,</span>
          <span>Solusi Digital untuk Usaha Anda</span>
        </h2>
        <p class="mt-4 text-base font-medium text-neutral-400 max-md:max-w-full">
          Lorem ipsum dolor sit amet consectetur. Luctus iaculis risus arcu duis blandit
        </p>
      </div>
      <div class="flex gap-8 items-start mt-8 text-base font-medium text-white">
        <a href="#" class="gap-2.5 px-9 py-4 bg-blue-700 rounded-[40px] hover:bg-white hover:text-blue-700 ease-in-out duration-300 border border-blue-700 max-md:px-5">Get Started</a>
      </div>
    </div>
  </div>
  <div class="self-center w-full max-w-[1296px] max-md:max-w-full">
    <div class="flex gap-5 max-md:flex-col">
      <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
        <div class="flex shrink-0 mx-auto mt-11 max-w-full rounded-3xl bg-zinc-300 h-[328px] w-[293px] max-md:mt-10"></div>
      </div>
      <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
        <div class="flex shrink-0 mx-auto mt-36 max-w-full rounded-3xl bg-zinc-300 h-[226px] w-[293px] max-md:mt-10"></div>
      </div>
      <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
        <div class="flex shrink-0 mx-auto mt-28 max-w-full rounded-3xl bg-zinc-300 h-[263px] w-[293px] max-md:mt-10"></div>
      </div>
      <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
        <div class="flex shrink-0 mx-auto max-w-full rounded-3xl bg-zinc-300 h-[370px] w-[293px] max-md:mt-10"></div>
      </div>
    </div>
  </div>
  <!-- End Content -->
   <!-- Layanan Kami -->
  <section id="services" class="flex flex-col justify-center items-center px-20 py-24 mt-16 w-full bg-blue-700 max-md:px-5 max-md:mt-10 max-md:max-w-full">
    <div class="flex flex-col w-full max-w-[1144px] max-md:max-w-full">
      <div class="flex flex-col justify-center items-center self-center max-w-full text-center w-[627px]">
        <div class="flex flex-col justify-center items-center w-full">
          <h2 class="text-3xl font-semibold text-white max-md:max-w-full">Layanan Kami</h2>
          <p class="mt-4 text-base font-medium text-gray-200 max-md:max-w-full">
            Lorem ipsum dolor sit amet consectetur. Luctus iaculis risus arcu duis blandit
          </p>
        </div>
      </div>
      <div class="mt-16 max-md:mt-10 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col">
          <article class="flex flex-col bg-blue-600 rounded-xl w-[33%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow px-6 py-6 font-medium rounded-xl max-md:px-5 max-md:mt-6">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/50610ed4e1bdd30216d9ff300e62adf20e99b5481ef18a68bec67645653e915d?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-contain self-end aspect-square w-[11px]" alt="" />
              <div class="flex flex-col justify-center self-start mt-16 max-md:mt-10">
                <h3 class="text-2xl text-white">Tentang Product Kami</h3>
                <p class="mt-1 text-sm text-neutral-200">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
            </div>
          </article>
          <article class="flex flex-col bg-blue-600 rounded-xl ml-5 w-[33%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow px-6 py-6 font-medium rounded-xl max-md:px-5 max-md:mt-6">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/50610ed4e1bdd30216d9ff300e62adf20e99b5481ef18a68bec67645653e915d?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-contain self-end aspect-square w-[11px]" alt="" />
              <div class="flex flex-col justify-center self-start mt-16 max-md:mt-10">
                <h3 class="text-2xl text-white">Tentang Product Kami</h3>
                <p class="mt-1 text-sm text-neutral-200">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
            </div>
          </article>
          <article class="flex flex-col bg-blue-600 rounded-xl ml-5 w-[33%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow px-6 py-6 font-medium rounded-xl max-md:px-5 max-md:mt-6">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/50610ed4e1bdd30216d9ff300e62adf20e99b5481ef18a68bec67645653e915d?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-contain self-end aspect-square w-[11px]" alt="" />
              <div class="flex flex-col justify-center self-start mt-16 max-md:mt-10">
                <h3 class="text-2xl text-white">Tentang Product Kami</h3>
                <p class="mt-1 text-sm text-neutral-200">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="mt-6 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col">
          <article class="flex flex-col bg-blue-600 rounded-xl w-[33%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow p-6 rounded-xl max-md:px-5 max-md:mt-6">
              <div class="flex relative flex-col self-end aspect-square w-[11px]">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/50610ed4e1bdd30216d9ff300e62adf20e99b5481ef18a68bec67645653e915d?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-cover absolute inset-0 size-full" alt="" />
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/50610ed4e1bdd30216d9ff300e62adf20e99b5481ef18a68bec67645653e915d?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-contain w-full aspect-square" alt="" />
              </div>
              <div class="flex flex-col justify-center self-start mt-16 font-medium max-md:mt-10">
                <h3 class="text-2xl text-white">Tentang Product Kami</h3>
                <p class="mt-1 text-sm text-neutral-200">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
            </div>
          </article>
          <article class="flex flex-col bg-blue-600 rounded-xl ml-5 w-[33%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow p-6 font-medium rounded-xl max-md:px-5 max-md:mt-6">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/50610ed4e1bdd30216d9ff300e62adf20e99b5481ef18a68bec67645653e915d?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-contain self-end aspect-square w-[11px]" alt="" />
              <div class="flex flex-col justify-center self-start mt-16 max-md:mt-10">
                <h3 class="text-2xl text-white">Tentang Product Kami</h3>
                <p class="mt-1 text-sm text-neutral-200">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
            </div>
          </article>
          <article class="flex flex-col bg-blue-600 rounded-xl ml-5 w-[33%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow px-6 py-6 font-medium rounded-xl max-md:px-5 max-md:mt-6">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/50610ed4e1bdd30216d9ff300e62adf20e99b5481ef18a68bec67645653e915d?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-contain self-end aspect-square w-[11px]" alt="" />
              <div class="flex flex-col justify-center self-start mt-16 max-md:mt-10">
                <h3 class="text-2xl text-white">Tentang Product Kami</h3>
                <p class="mt-1 text-sm text-neutral-200">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- End Layanan Kami -->
   <!-- Tentang Kami -->
  <section id="about" class="self-center mt-24 w-full p-8 max-w-[1296px] max-md:mt-10 max-md:max-w-full">
    <div class="flex gap-5 max-md:flex-col">
      <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
        <div class="flex flex-col justify-center w-full text-base font-medium max-md:mt-5 max-md:max-w-full">
          <span class="gap-2.5 self-start px-3.5 py-2 text-blue-800 border-2 border-blue-800 border-solid rounded-[30px]">Tentang Kami</span>
          <h2 class="mt-4 text-5xl font-light leading-none text-neutral-800 max-md:max-w-full max-md:text-4xl">Apa itu Gelar Product?</h2>
          <p class="mt-4 text-neutral-400 max-md:max-w-full">Lorem ipsum dolor sit amet consectetur. Luctus iaculis risus arcu</p>
        </div>
      </div>
      <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
        <p class="text-base font-medium leading-5 text-zinc-600 max-md:mt-5 max-md:max-w-full">
          Gelar Product merupakan sebuah website promosi, Gelar Produk akan menyediakan platform khusus bagi UMKM untuk menampilkan produk mereka secara profesional, terstruktur, dan mudah diakses oleh calon konsumen. Melalui berbagai fitur yang dihadirkan, seperti pencarian produk, kategori usaha, profil usaha, dan integrasi media sosial, Gelar Produk bertujuan untuk menjadi sarana efektif dalam memperkenalkan produk-produk UMKM lokal kepada masyarakat luas.
          <br /><br />
          Dengan adanya Gelar Produk, diharapkan UMKM dapat memperoleh visibilitas yang lebih baik, meningkatkan penjualan, dan pada akhirnya turut berkontribusi dalam pengembangan ekonomi digital di Indonesia. Inisiatif ini tidak hanya membantu UMKM berkembang, tetapi juga memperkuat ekosistem bisnis lokal yang mampu bersaing di era global.
        </p>
      </div>
    </div>
  </section>
  <!-- End Tentang Kami -->
   <!-- Footer -->
  <div id="contact" class="flex mt-24 w-full bg-blue-700 min-h-[24px] max-md:mt-10 max-md:max-w-full"></div>
  <footer class="flex flex-col px-20 pt-24 pb-8 w-full bg-neutral-950 max-md:px-5 max-md:max-w-full">
  <div class="max-w-full w-[913px]">
    <div class="flex gap-5 max-md:flex-col">
      <div class="flex flex-col w-[83%] max-md:ml-0 max-md:w-full">
        <div class="flex flex-col max-md:mt-10 max-md:max-w-full">
          <h2 class="text-3xl font-bold text-white">
            Gelar <span class="text-white">Product</span>
          </h2>
          <p class="mt-12 text-base font-medium leading-5 text-neutral-200 max-md:mt-10 max-md:max-w-full">
            Gelar Product merupakan sebuah website promosi, Gelar Produk akan menyediakan platform khusus bagi UMKM untuk menampilkan produk mereka secara profesional, terstruktur, dan mudah diakses oleh calon konsumen. Melalui berbagai fitur yang dihadirkan, seperti pencarian produk, kategori usaha, profil usaha, dan integrasi media sosial, Gelar Produk bertujuan untuk menjadi sarana efektif dalam memperkenalkan produk-produk UMKM lokal kepada masyarakat luas.
          </p>
        </div>
      </div>
      <nav class="flex flex-col ml-5 w-[17%] max-md:ml-0 max-md:w-full">
        <div class="flex flex-col max-md:mt-10">
          <h3 class="text-4xl font-semibold text-white">Tautan</h3>
          <ul class="flex flex-col justify-between self-start mt-9 text-base leading-8 min-h-[188px] text-neutral-200">
            <li><a href="#" class="hover:text-white focus:outline-none focus:ring-2 focus:ring-white">Beranda</a></li>
            <li><a href="#" class="mt-5 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">Layanan</a></li>
            <li><a href="#" class="mt-5 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">Tentang Kita</a></li>
            <li><a href="#" class="mt-5 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">Contact</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <div class="flex shrink-0 mt-20 h-0.5 bg-white bg-opacity-10 max-md:mt-10 max-md:max-w-full"></div>
  <div class="flex flex-wrap gap-10 justify-between items-end mt-8 w-full max-md:max-w-full">
    <p class="text-base leading-8 text-gray-200">
      Copyright © 2024 | Gelar Product
    </p>
    <div class="flex gap-4 items-start">
      <a href="#" aria-label="Facebook" class="focus:outline-none focus:ring-2 focus:ring-white rounded-full">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a33c54eeaed5faf51ac5fa9b1c45991dee5e27fef98504e6e1419ccfd1da31bc?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-contain shrink-0 aspect-square w-[33px]" alt="Facebook icon" />
      </a>
      <a href="#" aria-label="Twitter" class="focus:outline-none focus:ring-2 focus:ring-white rounded-full">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2a34b170592baba4f93bcad5850fcf7b4cc0b2fa0c5d9c4011851c6f59f9a6d7?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-contain shrink-0 aspect-square w-[33px]" alt="Twitter icon" />
      </a>
      <a href="#" aria-label="Instagram" class="focus:outline-none focus:ring-2 focus:ring-white rounded-full">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9aea0eb4db8b1dda6a602044a9928349c54207a415c611fe317011ebce054db1?placeholderIfAbsent=true&apiKey=c90ca05477c14d23b4c3977b0c29e623" class="object-contain shrink-0 aspect-square w-[33px]" alt="Instagram icon" />
      </a>
    </div>
  </div>
</footer>
</section>
<!-- End Footer -->

</body>
</html>