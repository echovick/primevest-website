@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <div class="hero-section bg-white">
        <div class="max-w-6xl mx-auto px-4 pt-16 pb-5">
            <div class="flex flex-col text-center mx-auto pb-10">
                <p class="text-gray-500 text-xs text-center mx-auto">WHY PRIMEVEST</p>
                <p class="text-black text-4xl leading-10 py-5 md:w-3/5 mx-auto">We built the first fully integrated, end-to-end technology platform for alternative assets in Nigeria</p>
                <p class="text-gray-500 text-sm font-light py-3 mx-auto md:w-3/5">Our technology enables us to streamline operations, consolidating every aspect of the value chain into a unified end-to-end platform. This approach enhances efficiency and ultimately leads to improved performance for our investors</p>
            </div>
        </div>
    </div>

    {{-- Features Section --}}
    <div class="features-section pb-10">
        <div class="max-w-6xl mx-auto px-10">
            <div class="flex flex-col md:flex-row md:space-x-10">
                <div class="border-t border-gray-500 py-5 md:basis-1/3">
                    <p class="text-black text-md font-bold mb-2">Accessible Direct-to-Consumer Interface</p>
                    <p class="text-black text-sm font-light text-gray-500">Our web and mobile platforms provide individuals with the opportunity to explore institutional-grade alternative investments, free from the exorbitant fees and mark-ups typically associated with traditional channels.</p>
                </div>
                <div class="border-t border-gray-500 py-5 md:basis-1/3">
                    <p class="text-black text-md font-bold mb-2">Efficient Investor Servicing and Fund Management</p>
                    <p class="text-black text-sm font-light text-gray-500">Utilizing our proprietary software systems, we efficiently manage a multitude of individual investor accounts, encompassing tax reporting, fund administration, transaction management, all while significantly reducing costs.</p>
                </div>
                <div class="border-t border-gray-500 py-5 md:basis-1/3">
                    <p class="text-black text-md font-bold mb-2">Innovative Technology-Driven Asset Management</p>
                    <p class="text-black text-sm font-light text-gray-500">We've redefined the asset management landscape through the utilization of cutting-edge data infrastructure tools, facilitating real-time information access, automated reporting, and enhanced decision-making capabilities.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Out Tech Section --}}
    <div class="out-tech bg-greenishCyan py-10">
        <div class="max-w-6xl mx-auto px-10">
            <div class="flex flex-col text-center mx-auto pb-10">
                <p class="text-white text-xs text-center mx-auto">OUR TECHNOLOGY</p>
                <p class="text-white text-4xl leading-10 py-5 md:w-3/5 mx-auto">Unlocking better, smother and optimized performance with automation & technology</p>
                <p class="text-white font-thin text-sm py-3 mx-auto md:w-3/5">We've redesigned each step of the investment management process, replacing high-cost manual work flows with software enabled automated systems. The result is a single integrated platform, providing an entirely unique investment offering to our customers.</p>
                <div class="flex flex-col md:flex-row md:space-x-8">
                    <img src="{{ asset('assets/imgs/our-tech.svg') }}" alt="" class="w-auto mt-8 shadow">
                    <div class="text-left py-20">
                        <p class="text-white text-lg mb-5">INVESTOR SERVICING AND FUND OPERATIONS</p>
                        <p class="text-white text-sm font-thin">Our proprietary investor servicing and fund management software system simplifies the management of 500,000 investors to the level of managing just one.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Value propostion --}}
    <div class="value-proposition bg-white py-10">
        <div class="max-w-6xl mx-auto px-10">
            <div class="flex flex-col text-center mx-auto pb-10">
                <p class="text-gray-500 text-xs text-center mx-auto">INVESTOR FIRST VALUE PROPOSITION</p>
                <p class="text-black text-4xl leading-10 py-5 md:w-3/5 mx-auto">We’ve aligned our long-term interests with the interests of our investors</p>
            </div>
            <div class="flex flex-col md:flex-row md:space-x-10 mb-5">
                <div class="border-t border-gray-500 py-5 md:basis-1/3">
                    <p class="text-black text-md font-bold mb-2">Accessible Real Estate Ownership</p>
                    <p class="text-black text-sm font-light text-gray-500">Co-own prime properties with minimal investment.</p>
                </div>
                <div class="border-t border-gray-500 py-5 md:basis-1/3">
                    <p class="text-black text-md font-bold mb-2">Expertly Curated Opportunities</p>
                    <p class="text-black text-sm font-light text-gray-500">Access carefully selected properties with growth potential.</p>
                </div>
                <div class="border-t border-gray-500 py-5 md:basis-1/3">
                    <p class="text-black text-md font-bold mb-2">Transparent Investment Experience</p>
                    <p class="text-black text-sm font-light text-gray-500">Enjoy a transparent and user-friendly platform for informed decision-making.</p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:space-x-10">
                <div class="border-t border-gray-500 py-5 md:basis-1/3 md:mx-auto">
                    <p class="text-black text-md font-bold mb-2">Community Engagement</p>
                    <p class="text-black text-sm font-light text-gray-500">Join a vibrant community of co-owners, sharing in the success of real estate investments.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Call to action --}}
    <div class="value-proposition bg-dimGray py-10">
        <div class="max-w-6xl mx-auto px-10 py-10">
            <p class="text-white text-4xl">Start building a better portfolio</p>
            <div class="flex flex-row space-x-5 py-10">
                <p class="text-white text-sm font-thin">Low Fees</p>
                <div class="rounded-full bg-secondary h-3 w-3 mt-1"></div>
                <p class="text-white text-sm font-thin">Flexible minimums</p>
                <div class="rounded-full bg-secondary h-3 w-3 mt-1"></div>
                <p class="text-white text-sm font-thin">Flexible liquidation</p>
            </div>
            <a href="" class="py-3 px-6 bg-secondary text-white text-sm rounded-sm">Get Started</a>
        </div>
    </div>
@endsection
