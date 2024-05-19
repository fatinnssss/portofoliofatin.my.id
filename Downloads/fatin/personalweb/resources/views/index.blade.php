<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatin Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#343131]">
    <nav class="flex mx-auto max-w-full py-5 justify-between fixed text-center items-center">
        <div class="ml-[450px] space-x-5">
            <a href="#home" class="text-white font-extrabold text-sm">HOME</a>
            <a href="" class="text-orange-600 font-extrabold text-sm">ABOUT ME</a>
            <a href="" class="text-white font-extrabold text-sm">SKILL</a>
            <a href="" class="text-white font-extrabold text-sm">PORTFOLIO</a>
            <a href="" class="text-white font-extrabold text-sm">SERVICES</a>
            <a href="" class="text-white font-extrabold text-sm">CONTACT</a>
            <a href="{{ url('/panel') }}" class="text-white font-extrabold text-sm">LOGIN</a>
        </div>
    </nav>

    <section name="home" id="home" class="max-w-full mx-auto block py-48 px-0 justify-between">
        <div class="ml-28">
            <h1 class="text-5xl text-[#7B7272]">I'm a</h1>
            <h1 class="text-7xl text-white">GRAPHIC</h1>
            <H1 class="text-7xl text-white">DESIGNER<span class="text-orange-600">.</span></H1>
            <div class="bg-orange-600 w-[100px] mt-5">
                <a href="" class="text-white py-3 px-2">Contact Me</a>
            </div>
        </div>
    </section>

    <section name="about" id="about" class="max-w-full mx-auto flex py-32 px-0 justify-between">
        <div class="ml-28">
            <img src="img/fatin.png" alt="">
        </div>

        <div class="text-center mx-auto">
            <h1 class="text-orange-600 text-5xl font-bold italic">About Me</h1>
            <p class="px-7 pt-5 text-white text-xl">Hallo, My name is fatin sidqiyyah. Usually called Fatin. polytechnic</p>
            <p class="text-white text-xl">with tegal and majoring in computer engineering in the 4th semester</p>
             </div>
    </section>

    <section name="skill " id="skill" class="max-w-full mx-auto block py-48 px-0 justify-between">
            <div class="text-white flex flex-wrap ml-44 mt-12">
                <div class="ml-20 mr-40 mb-10">
                    <h2 class="text-center text-orange-600 text-xl font-bold italic">Name</h2>
                    <div class="bg-[#343131] text-white w-[300px] mt-3 rounded-full text-center text-xl italic">Fatin Sidqiyyah</div>
                </div>

                <div>
                    <h2 class="text-center text-orange-600 text-xl font-bold italic">Phone</h2>
                    <div class="bg-[#343131] text-white w-[300px] mt-3 rounded-full text-center text-xl italic">0857022922253</div>
                </div>

                <div class="ml-20 mr-40">
                    <h2 class="text-center text-orange-600 text-xl font-bold italic">Country</h2>
                    <div class="bg-[#343131] text-white w-[300px] mt-3 rounded-full text-center text-xl italic">Indonesian</div>
                </div>

                <div>
                    <h2 class="text-center text-orange-600 text-xl font-bold italic">Email</h2>
                    <div class="bg-[#343131] text-white w-[300px] mt-3 rounded-full text-center text-xl italic">fatinsidqiyyah4@gmail.com</div>
                </div>
            </div>
        </div>
        </section>

        <section name="portfolio" id="portfolio" class="max-w-full mx-auto block py-48 px-0 justify-between">
            <h1 class="text-orange-600 text-5xl font-bold italic text-center">PORTFOLIO</h1>
            <div class="ml-20 mt-20 text-xl font-bold italic">
            <div class="grid grid-cols-5 grid-rows-5 gap-4">
                <div class="text-orange-600">LOGO</div>
                <div class="text-white">BRANDING</div>
                <div class="text-white">3D MODELING</div>
                <div class="text-white">MOTION</div>
                <div class="text-white">VIDEO EDITING</div>
            </div>
            <div class="ml-60 -mt-32">
                <img src="img/portfolio.png" alt="">
            </div>
        </div>
        </section>

        <section name="services" id="services" class="max-w-full mx-auto block py-48 px-0 justify-between">
                <div class=" text-center space-y-2">
                    <h1 class="text-orange-600 text-5xl font-bold italic">EDUCATION</h1>
                    <h3 class="text-white text-3xl pt-5">Ra Bustanul huda</h3>
                    <h3 class="text-white text-3xl">Mi Bustanul huda 01</h3>
                    <h3 class="text-white text-3xl">Smp Negeri 1 Talang</h3>
                    <h3 class="text-white text-3xl">Smk Islamiyah Adiwerna</h3>
                    <h3 class="text-white text-3xl">Politeknik Harapan Bersama Tegal</h3>
                </div>
            </section>

        <footer class="bg-orange-600 py-10">
            <div class="text-center text-xl">
                <h1 class="text-white">Contact me</h1>
                <h3 class="text-black">0857-0229-2253</h3>

                <form method="POST">
                    @csrf
                    <div class="text-white text-xl my-5 space-x-2">
                        <label for="nama" class="text-black">Nama </label>
                        <input type="text" name="nama" id="nama" class="w-[500px] rounded-md px-2 text-black">
                    </div>
        
                    <div class="text-white text-xl my-5 space-x-2">
                        <label for="email" class="text-black">Email </label>
                        <input type="email" name="email" id="email" class="w-[503px] rounded-md px-2 text-black">
                    </div>
        
                    <div class="text-white text-xl my-5 space-x-2">
                        <textarea name="pesan" id="pesan" cols="58" rows="3" class="text-black rounded-md px-2" placeholder="Masukkan..."></textarea>
                    </div>
        
                    <button type="submit" class="bg-[#E2B71D] text-center py-1 px-10 rounded-md text-black mx-auto">Kirim</button>
                </form>
            </div>
        </footer>
</body>
</html>