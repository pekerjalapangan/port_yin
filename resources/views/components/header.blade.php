<header>
    {{-- Dekstop --}}
    <div class=" flex row max-md:hidden">
        {{-- Judul dan deskripsi header --}}
        <div class=" pt-[8rem] pl-[5rem]">
            <h1 class=" text-4xl leading-snug">
                <span class=" text-pink-600 font-light">MY</span> <span class=" text-white font-bold">PORTFOLIO</span>
                <br><span class=" text-white">JUNIOR</span> <span class=" text-pink-600">WEBSITE</span> <span class=" text-white">DEVELOPMENT</span>
            </h1>
            <p class=" text-[1rem] text-white w-[40rem] text-justify pt-[1.5rem]">
                Perkembangan dunia programmer IT saat ini sangat dinamis, dengan terus berkembangnya bahasa pemrograman, framework, dan alat bantu pengembangan perangkat lunak. Programmer kini memiliki banyak pilihan teknologi untuk membangun aplikasi web, mobile, dan sistem berbasis cloud. Tren terbaru termasuk penggunaan bahasa pemrograman modern seperti Python, JavaScript, dan Go, serta meningkatnya popularitas teknologi seperti DevOps, containerization (misalnya Docker), dan kecerdasan buatan (AI).
            </p>
        </div>
        {{-- gambar --}}
        <div class=" pt-[2rem] pl-[3rem]">
            <img class=" w-[30rem] animate-pulse" src="{{asset('group1.png')}}"/>
        </div>
    </div>
    
    
    {{-- Mobile --}}
    <div class="md:hidden">
        {{-- Judul dan deskripsi header --}}
        <div class=" pt-[8rem] flex flex-col justify-center items-center">
            <h1 class=" text-4xl leading-snug">
                <span class=" text-pink-600 font-light">MY</span> <span class=" text-white font-bold">PORTFOLIO</span>
                <br><span class=" text-white">JUNIOR</span> <span class=" text-pink-600">WEBSITE</span> 
                <br><span class=" text-white">DEVELOPMENT</span>
            </h1>
            {{-- gambar --}}
        <div class=" pt-[2rem]">
            <img class=" w-[20rem] animate-pulse z-20" src="{{asset('group1.png')}}"/>
        </div>
            <p class=" text-[1rem] text-white w-[20rem] text-justify  pt-[1.5rem]">
                Perkembangan dunia programmer IT saat ini sangat dinamis, dengan terus berkembangnya bahasa pemrograman, framework, dan alat bantu pengembangan perangkat lunak. Programmer kini memiliki banyak pilihan teknologi untuk membangun aplikasi web, mobile, dan sistem berbasis cloud. Tren terbaru termasuk penggunaan bahasa pemrograman modern seperti Python, JavaScript, dan Go, serta meningkatnya popularitas teknologi seperti DevOps, containerization (misalnya Docker), dan kecerdasan buatan (AI).
            </p>
        </div>
        
    </div>
</header>