<!-- resources/views/home.blade.php -->
@extends('layout.main')

@section('content')

<div class="bg-gray-100">
    <div class="relative w-full h-64 md:h-150 lg:h-[550px]">
      <div 
          class="absolute inset-0 bg-center bg-cover bg-no-repeat rounded-lg shadow-lg mx-5"
          style="background-image: url('/background1.png');"
      ></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center">
            <h1 class="text-white font-bold text-5xl mb-6 text-center">
                <div class="block mb-4">CIPTA</div>
                <div class="block">PRIMA ENGINEERING</div>
            </h1>
            <div class="flex space-x-4">
                <button class="px-6 py-3 bg-yellow-600 text-white font-regular rounded-lg hover:bg-yellow-800 transition">
                    TENTANG CPE
                </button>
                <button class="px-6 py-3 border-white border-2 text-white bg-transparent font-regular rounded-lg hover:bg-white hover:text-yellow-400 transition">
                    HUBUNGI
                </button>
            </div>
        </div>
    </div>

    <div class="mt-12 p-6 max-w-4xl mx-auto">
        <!-- ABOUT US Section -->
        <div class="flex">
            <h2 class="text-2xl font-bold mb-4 text-black">ABOUT</h2>
            <h2 class="text-2xl font-bold mb-4 text-purple-700 ml-1">US</h2>
        </div>
        <div class="flex">
            <p class="text-lg text-black">
                Cipta  Prima  Engineering  atau yang  biasa disingkat dengan CPE merupakan  perusahaan yang bergerak  pada bidang konsultan lingkungan  hidup, dengan fokus utama pada strategi dan perencanaan ruang tata  kelola lingkungan. 
                Dalam  hal  ini, kami  menawarkan beberapa jasa  mulai dari perencanaan, kajian,  pendampingan operasional, hingga jasa pelatihan.
            </p>
            <img src="{{ asset('helmet.png') }}" alt="helmet" class="w-[350px] h-[236px] ml-5" />
        </div>
        <button class="px-6 py-3 bg-yellow-400 text-white font-regular rounded-lg hover:bg-yellow-800 transition mt-4">
            LEARN MORE
        </button>

        <!-- Vision & Mission Section -->
        <div class="flex mt-[250px]">
            <h2 class="text-2xl font-bold mb-4 text-black">Our</h2>
            <h2 class="text-2xl font-bold mb-4 text-purple-700 ml-1">Vision & Mission</h2>
        </div>

        <div class="text-black flex mt-[50px]">
            <p class="text-lg mr-[150px]">
                Menjadi konsultan lingkungan yang terus berinovasi
                terhadap segala kemajuan teknologi rekayasa
                teknik lingkungan
            </p>
            <img src="{{ asset('logo_mission.png') }}" alt="mission" class="w-[150px] h-[90px] mr-[25px]" />
        </div>

        <div class="flex">
            <img src="{{ asset('logo_vision.png') }}" alt="vision" class="w-[150px] h-[90px] mt-[80px]" />
            <p class="text-black text-lg ml-[150px] mt-[50px]">
                Memberikan rasa kepercayaan dan kepuasan
                dalam setiap hasil pekerjaan terhadap setiap klien.
                Bekerja keras, efektif, dan menghasilkan hasil
                terbaik dalam setiap kepercayaan yang telah diberikan.
                Menjunjung tinggi profesionalitas, integritas,
                dan etika profesi.
            </p>
        </div>

        <!-- Services Section -->
        <div class="flex mt-[250px] justify-center">
            <h2 class="text-2xl font-bold mb-4 text-black">Our</h2>
            <h2 class="text-2xl font-bold mb-4 text-purple-700 ml-1">Services</h2>
        </div>

        
    </div>
    <!-- Services Cards -->
        <div class="flex flex-wrap justify-center space-x-4 mt-10">
            <div class="bg-white shadow-lg rounded-lg p-6 text-center w-[251px] h-[289px] flex flex-col items-center">
                <div class="flex justify-center items-center w-16 h-16 mx-auto bg-gray-100 rounded-full -mt-14">
                    <img src="{{ asset('doc_icon.png') }}" alt="Icon" class="w-16 h-16" />
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 mt-16">
                    Dokumen <span class="text-purple-600">Perencanaan</span>
                </h3>
                <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="text-gray-600 hover:text-purple-600 transition flex items-center justify-center mt-auto -mb-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 4v16m8-8H4" />
                    </svg>
                </a>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 text-center w-[251px] h-[289px] flex flex-col items-center">
                <div class="flex justify-center items-center w-16 h-16 mx-auto bg-gray-100 rounded-full -mt-14">
                    <img src="{{ asset('leaf_icon.png') }}" alt="Icon" class="w-16 h-16" />
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 mt-16">
                    Kajian <span class="text-purple-600">Lingkungan</span>
                </h3>
                <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="text-gray-600 hover:text-purple-600 transition flex items-center justify-center mt-auto -mb-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 4v16m8-8H4" />
                    </svg>
                </a>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 text-center w-[251px] h-[289px] flex flex-col items-center">
                <div class="flex justify-center items-center w-16 h-16 mx-auto bg-gray-100 rounded-full -mt-14">
                    <img src="{{ asset('group_icon.png') }}" alt="Icon" class="w-16 h-16" />
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 mt-16">
                    Pendampingan <span class="text-purple-600">Oprasional</span>
                </h3>
                <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="text-gray-600 hover:text-purple-600 transition flex items-center justify-center mt-auto -mb-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 4v16m8-8H4" />
                    </svg>
                </a>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 text-center w-[251px] h-[289px] flex flex-col items-center">
                <div class="flex justify-center items-center w-16 h-16 mx-auto bg-gray-100 rounded-full -mt-14">
                    <img src="{{ asset('learn_icon.png') }}" alt="Icon" class="w-16 h-16" />
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 mt-16">
                    <span class="text-purple-600">Pelatihan</span>
                </h3>
                <p class="text-gray-500 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="text-gray-600 hover:text-purple-600 transition flex items-center justify-center mt-auto -mb-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 4v16m8-8H4" />
                    </svg>
                </a>
            </div>
        </div>

</div>
@endsection
