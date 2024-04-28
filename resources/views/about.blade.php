@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <div class="hero-section bg-white">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <div class="flex flex-col text-center mx-auto pb-10">
                <p class="text-gray-500 text-xs text-center mx-auto">ABOUT US</p>
                <p class="text-black text-4xl leading-10 py-5 md:w-3/5 mx-auto">We're on a mission to Empower individuals to achieve financial growth and property ownership </p>
                <p class="text-gray-500 text-sm font-light py-3 mx-auto md:w-3/5">We want to be the leading catalyst for democratizing real estate investments, and fostering a community of empowered property owners in nigeria</p>
            </div>

            {{-- <video autoplay controls class="border border-gray-500 rounded-sm md:w-3/4 mx-auto shadow-md"> --}}
            <video controls class="border border-gray-500 rounded-sm md:w-3/4 mx-auto shadow-md">
                <source src="{{ asset('assets/videos/about.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="main-about md:px-36 py-10">
                <p class="text-black text-lg font-bold text-left">Revolutionizing Real Estate Investment in Nigeria</p>
                <p class="text-md font-light text-gray-600 py-3">In a world of ever-evolving investment opportunities, Primevest emerges as a beacon of innovation, reshaping the landscape of real estate investment in Nigeria. Our mission is clear: to empower individuals to achieve financial growth and property ownership through an inclusive and transparent platform.</p>
                <p class="text-md font-light text-gray-600 py-3">At Primevest, we believe in democratizing real estate ownership, making it accessible to everyone regardless of their financial status. Gone are the days of hefty capital requirements; with Primevest, you can start investing in premier real estate properties with as little as 50,000 naira. Through our fractional ownership model, investors can collectively own shares in properties, sharing in returns as they appreciate in value or generate rental income.</p>
                <p class="text-md font-light text-gray-600 py-3">Our approach is built on transparency, trust, and community. We meticulously select properties with growth potential, ensuring our investors have access to the best opportunities. Moreover, our platform fosters a vibrant community where investors can engage, share insights, and celebrate collective success.</p>
                <p class="text-md font-light text-gray-600 py-3">But our vision extends beyond just providing a platform; we're committed to creating a financial revolution where every individual has the opportunity to build wealth through real estate investment. By leveraging technology and innovation, we aim to simplify the investment process, making it seamless and accessible to all.</p>
                <p class="text-md font-light text-gray-600 py-3">Join us on this journey towards financial freedom and property ownership. Together, we can redefine the future of real estate investment in Nigeria.</p>
                <p class="text-center mx-auto text-gray-600 py-10"><i><b>Primevest</b>, Empowering Investors, Building Communities.</i></p>
            </div>
        </div>
    </div>
@endsection
