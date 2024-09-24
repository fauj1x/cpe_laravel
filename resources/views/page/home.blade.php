@extends('layout.main')

@section('content')

<div class="bg-white">

<div class="relative w-full h-screen"> <!-- Mengubah h-64/md:h-[500px]/lg:h-[750px] menjadi h-screen -->
        <div 
            data-aos="fade-in" data-aos-duration="2000"
            class="absolute inset-0 bg-no-repeat bg-center bg-cover -mt-28"
            style="background-image: url('background1.png');"
        >
            <div class="flex flex-col justify-center items-center h-full">
                <h1 class="text-white font-bold text-3xl md:text-5xl mb-6 text-center" >
                    <div class="block mb-2 md:mb-4" data-aos="fade-down" data-aos-duration="3000">CIPTA</div>
                    <div class="block" data-aos="fade-down" data-aos-duration="3000" data-aos-delay="100">
                        <span class="text-green-500">PRIMA</span> ENGINEERING
                    </div>
                    <p class="font-medium text-sm md:text-base mt-5 text-center" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="100">“Strategic Inovation for Best Environtment”</p>
                </h1>
                
                <div class="flex space-x-4 mt-4">
                    <button class="px-4 py-2 bg-yellow-600 text-white font-regular rounded-lg hover:bg-yellow-800 transition md:px-6 md:py-3" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="100">
                        TENTANG CPE
                    </button>
                    <button class="px-4 py-2 border-green-600 border-2 text-green-600 bg-transparent font-regular rounded-lg hover:bg-green-500 hover:text-green-200 transition md:px-6 md:py-3" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="100">
                        HUBUNGI
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="relative mt-16 p-6 max-w-7xl mx-auto fade-in"> 
        <!-- ABOUT US Section -->
        <div class="flex">
            <h2 class="text-2xl font-bold mb-4 text-black">ABOUT</h2>
            <h2 class="text-2xl font-bold mb-4 text-green-600 ml-1">US</h2>
        </div>

        <section class="text-black body-font">
            <div class="container mx-auto flex flex-col md:flex-row items-center px-8 py-10">
                <div class="lg:flex-grow md:w-2/3 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-gray-900" data-aos="fade-right" data-aos-duration="1000"
                    >CV.Cipta Prima Engineering</h1>
                    <p class="mb-8 leading-relaxed" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-delay="100">
                        <strong>Cipta Prima Engineering</strong> atau yang biasa disingkat dengan CPE merupakan perusahaan yang bergerak pada bidang konsultan lingkungan hidup, dengan fokus utama pada strategi dan perencanaan ruang tata kelola lingkungan. Dalam hal ini, kami menawarkan beberapa jasa mulai dari perencanaan, kajian, pendampingan operasional, hingga jasa pelatihan.
                    </p>
                    <div class="flex justify-center">
                        <button class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Learn More</button>
                    </div>
                </div>
                <div class="lg:max-w-lg md:w-1/3 lg:w-full flex justify-center ml-4">
                    <img class="object-cover object-center rounded w-full h-auto" data-aos="zoom-out" data-aos-duration="1000"
                    data-aos-delay="100" alt="hero" src="{{ asset('logogreen.jpg') }}">
                </div>
            </div>
        </section>

        <!-- Vision & Mission Section -->
        <div class="flex mt-[250px]">
            <h2 class="text-2xl font-bold mb-4 text-black">Our</h2>
            <h2 class="text-2xl font-bold mb-4 text-green-600 ml-1">Vision & Mission</h2>
        </div>

        <div class="text-black flex flex-col md:flex-row md:items-center mt-[50px]">
            <p class="text-lg md:mr-[25px] mb-4" data-aos="fade-right" data-aos-duration="1000"
            data-aos-delay="100">
                Menjadi konsultan lingkungan yang terus berinovasi terhadap segala kemajuan teknologi rekayasa teknik lingkungan.
            </p>
            <img src="{{ asset('logo_mission.png') }}" alt="mission" class="w-[150px] h-[90px] mb-4 md:mb-0" data-aos="fade-left" data-aos-duration="1000"
            data-aos-delay="200"/>
        </div>

        <div class="flex flex-col md:flex-row md:items-center">
            <img src="{{ asset('logo_vision.png') }}" alt="vision" class="w-[150px] h-[90px] mt-[65px] mb-4 md:mb-0 md:mr-[25px] " data-aos="fade-right" data-aos-duration="2000"
            data-aos-delay="300"/>
            <p class="text-black text-lg mt-[50px]" data-aos="fade-left" data-aos-duration="2000"
            data-aos-delay="400">
                Memberikan rasa kepercayaan dan kepuasan dalam setiap hasil pekerjaan terhadap setiap klien. Bekerja keras, efektif, dan menghasilkan hasil terbaik dalam setiap kepercayaan yang telah diberikan. Menjunjung tinggi profesionalitas, integritas, dan etika profesi.
            </p>
        </div>
    </div>

    <img src="{{ asset('logomark.png') }}" alt="logomark" 
    class="absolute top-[1500px] right-0 w-[200px] opacity-40" 
    style="z-index: 0;" />

    <img src="{{ asset('forestelement.png') }}" alt="forestelement" 
    class="absolute top-[2320px] left-0 w-[120px] hidden md:block" 
    style="z-index: 0;" />



<!-- Services Section -->
<div class="flex mt-[250px] justify-center">
    <h2 class="text-2xl font-bold mb-4 text-black">Our</h2>
    <h2 class="text-2xl font-bold mb-4 text-green-600 ml-1">Services</h2>
</div>

<div class="flex flex-wrap justify-center mt-10 space-y-4 sm:space-y-0 sm:space-x-4">
    <!-- Services Card 1 -->
    <div class="flex flex-col items-center"data-aos="fade-right" data-aos-duration="2000"
    data-aos-delay="100">
        <div class="bg-white shadow-lg rounded-lg p-6 text-center w-full sm:w-[251px] h-[289px] flex flex-col items-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto bg-gray-100 rounded-full -mt-14">
                <img src="{{ asset('doc_icon.png') }}" alt="Icon" class="w-16 h-16" />
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2 mt-16">
                Dokumen <span class="text-green-600">Perencanaan</span>
            </h3>
            <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="text-gray-600 hover:text-purple-600 transition flex items-center justify-center mt-auto -mb-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Services Card 2 -->
    <div class="flex flex-col items-center" data-aos="fade-right" data-aos-duration="2000"
    data-aos-delay="200">
        <div class="bg-white shadow-lg rounded-lg p-6 text-center w-full sm:w-[251px] h-[289px] flex flex-col items-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto bg-gray-100 rounded-full -mt-14">
                <img src="{{ asset('leaf_icon.png') }}" alt="Icon" class="w-16 h-16" />
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2 mt-16">
                Kajian <span class="text-green-600">Lingkungan</span>
            </h3>
            <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="text-gray-600 hover:text-purple-600 transition flex items-center justify-center mt-auto -mb-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Services Card 3 -->
    <div class="flex flex-col items-center" data-aos="fade-right" data-aos-duration="2000"
    data-aos-delay="300">
        <div class="bg-white shadow-lg rounded-lg p-6 text-center w-full sm:w-[251px] h-[289px] flex flex-col items-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto bg-gray-100 rounded-full -mt-14">
                <img src="{{ asset('group_icon.png') }}" alt="Icon" class="w-16 h-16" />
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2 mt-16">
                Pendampingan <span class="text-green-600">Operasional</span>
            </h3>
            <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="text-gray-600 hover:text-purple-600 transition flex items-center justify-center mt-auto -mb-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Services Card 4 -->
    <div class="flex flex-col items-center" data-aos="fade-right" data-aos-duration="2000"
    data-aos-delay="400">
        <div class="bg-white shadow-lg rounded-lg p-6 text-center w-full sm:w-[251px] h-[289px] flex flex-col items-center">
            <div class="flex justify-center items-center w-16 h-16 mx-auto bg-gray-100 rounded-full -mt-14">
                <img src="{{ asset('learn_icon.png') }}" alt="Icon" class="w-16 h-16" />
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2 mt-16">
                <span class="text-green-600">Pelatihan</span>
            </h3>
            <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="text-gray-600 hover:text-purple-600 transition flex items-center justify-center mt-auto -mb-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</div>


    <img src="{{ asset('forestelement.png') }}" alt="forestelement" 
        class="absolute top-[2320px] left-0 w-[120px] " 
        style="z-index: -1;" />

        <section class="text-black body-font">
    <div class="container mt-32 px-5 py-24 mx-auto flex flex-wrap">
        <div class="flex w-full mb-20 flex-wrap">
            <h1 class="text-center sm:text-2xl text-2xl font-bold title-font text-black w-full mb-4">
                Our <span class="text-green-500">Experience</span>
            </h1>
        </div>
        <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-1/2">
                    <img src="{{ asset('cpe.jpg') }}" alt="gallery" class="w-full object-cover h-full object-center block rounded-lg" />
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <img src="{{ asset('cpe3.jpg') }}" alt="gallery" class="w-full object-cover h-full object-center block rounded-lg" />
                </div>
                <div class="md:p-2 p-1 w-full">
                    <img src="{{ asset('cpe2bawah.jpg') }}" alt="gallery" class="w-full h-full object-cover object-center block rounded-lg" />
                </div>
            </div>
            <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-full">
                    <img src="{{ asset('cpe4.jpg') }}" alt="gallery" class="w-full h-full object-cover object-center block rounded-lg" />
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <img src="{{ asset('cpe5.jpg') }}" alt="gallery" class="w-full object-cover h-full object-center block rounded-lg" />
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <img src="{{ asset('cpe6.jpg') }}" alt="gallery" class="w-full object-cover h-full object-center block rounded-lg" />
                </div>
            </div>
        </div>
    </div>
</section>



</div>
@endsection
