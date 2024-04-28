@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <form action="{{ url('join-wait-list') }}" action="get">
        <div class="hero-section" style="background:#EBF5F5;">
            <div class="max-w-6xl mx-auto px-4 py-16">
                <div class="flex flex-col md:flex-row md:justify-between-auto">
                    <div class="basis md:basis-1/2">
                        <p class="text-gray-500 text-xs">INVEST IN PRIME REAL ESTATE!</p>
                        <p class="text-black text-4xl leading-10 py-5">Join Primevest to Co-Own Prime Properties with Ease</p>
                        <p class="text-gray-500 text-sm font-light py-5">Our expert curated real estate portfolio* is designed to harness the macroeconomic drivers of the real estate market and position our clients for long-term growth.</p>
                        <div class="flex flex-row space-x-5">
                            <input type="text" name="email" placeholder="Enter email address" class="border outline-none px-4 border-gray-500 bg-white py-2 rounded-sm w-60">
                            <button type="submit" class="py-3 px-6 bg-primary text-white text-sm rounded-sm">Get Started</button>
                        </div>
                    </div>
                    <div class="basis md:basis-1/2 pt-10 md:pt-0 md:self-end">
                        <img src="{{ asset('assets/imgs/home-hero.svg') }}" alt="hero image" class="w-auto md:h-80 ml-auto">
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- Why Primevest --}}
    <div class="why-primevest" style="background: #C3DDDD">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <div class="flex flex-col md:flex-row">
                <div class="md:basis-1/2 md:py-20">
                    <p class="text-black-500 text-5xl">Why Primevest</p>
                    <p class="text-gray-500 text-md font-light py-5 pr-8">Primevest unlocks the doors to real estate investment for all. With investments starting at just ₦50,000, we democratize property ownership, offering access to lucrative opportunities previously out of reach. Backed by industry expertise, our platform ensures transparency, security, and maximum returns. Join Primevest for a seamless path to financial growth through fractional real estate ownership.</p>
                </div>
                <div class="md:basis-1/2">
                    <div class="flex flex-col space-y-5">
                        <div class="p-4 shadow" style="background:#EBF5F5;">
                            <div class="md:flex md:flex-row">
                                <div>
                                    <p class="text-md text-black">Accessible Real Estate Investment</p>
                                    <p class="text-gray-500 text-sm font-light py-3">Primevest offers the opportunity to invest in high-value real estate properties with minimal capital, starting from as low as ₦50,000, making property ownership accessible to a wider audience.</p>
                                </div>
                                <img src="{{ asset('assets/imgs/analyze-data.svg') }}" alt="" class="hidden md:block">
                            </div>
                        </div>
                        <div class="p-4 shadow" style="background:#EBF5F5;">
                            <div class="md:flex md:flex-row">
                                <div>
                                    <p class="text-md text-black">Diversification Made Easy</p>
                                    <p class="text-gray-500 text-sm font-light py-3">With Primevest, investors can diversify their portfolios effortlessly by spreading their investments across multiple properties, mitigating risks and maximizing potential returns.</p>
                                </div>
                                <img src="{{ asset('assets/imgs/analyze-data.svg') }}" alt="" class="hidden md:block">
                            </div>
                        </div>
                        <div class="p-4 shadow" style="background:#EBF5F5;">
                            <div class="md:flex md:flex-row">
                                <div>
                                    <p class="text-md text-black">Expert Curation</p>
                                    <p class="text-gray-500 text-sm font-light py-3">Primevest's team of real estate experts meticulously selects properties with growth potential, ensuring that investments are made in assets that offer promising returns over time.</p>
                                </div>
                                <img src="{{ asset('assets/imgs/analyze-data.svg') }}" alt="" class="hidden md:block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Why Real Estate --}}
    <div class="why-real-estate bg-gradient-to-b from-lightGreen to-darkGreen">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <div class="flex flex-row">
                <div class="md:basis-2/3 text-white">
                    <p class="text-xs">REAL ESTATE IS THE DEAL!</p>
                    <p class="text-4xl leading-10 py-5">Why Real Estate?</p>
                    <p class="text-md font-extralight py-5">Real estate investment stands as a pillar of wealth accumulation and financial stability, offering unparalleled opportunities for individuals seeking to build long-term prosperity. The allure of real estate lies in its ability to generate substantial returns, shield against economic uncertainties, and provide a reliable income stream.</p>
                    <div class="flex flex-row place-content-evenly space-x-6">
                        <div class="basis-1/3 bg-greenishGray rounded-0 p-3 md:p-6 text-white">
                            <p class="text-white text-3xl md:text-5xl text-left mb-3">8%</p>
                            <p class="text-white text-sm md:text-md"><u>Average Annual Return</u></p>
                        </div>
                        <div class="basis-1/3 bg-greenishGray rounded-0 p-3 md:p-6 text-white">
                            <p class="text-white text-3xl md:text-5xl text-left mb-3">9.2%</p>
                            <p class="text-white text-sm md:text-md"><u>Annual gross rental yield</u></p>
                        </div>
                        <div class="basis-1/3 bg-greenishGray rounded-0 p-3 md:p-6 text-white">
                            <p class="text-white text-3xl md:text-5xl text-left mb-3">3.8%</p>
                            <p class="text-white text-sm md:text-md"><u>Average Housing price increase</u></p>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/imgs/asking-question.svg') }}" alt="" class="h-auto w-auto hidden md:block md:basis-1/3">
            </div>
        </div>
    </div>

    {{-- Explore Porfolio --}}
    <form action="{{ url('join-wait-list') }}" action="get">
        <div class="why-real-estate bg-lightCyan">
            <div class="max-w-6xl mx-auto px-4 py-16">
                <div class="flex flex-col text-center mx-auto">
                    <p class="text-black text-3xl">Explore all projects in our portfolio</p>
                    <p class="text-gray-500 font-light text-sm py-4 w-96 mx-auto">We’re working with top real estate partners to bring to you high valued, well curated opportunities, be the first to be notified</p>
                    <div class="flex flex-row space-x-5 mx-auto py-3">
                        <input type="text" placeholder="Enter email address" class="border outline-none px-4 bg-white py-1 rounded-sm w-64 md:w-80" name="email">
                        <button type="submit" class="py-3 px-6 bg-primary text-white text-sm rounded-sm">Notify Me</button>
                    </div>
                    <img src="{{ asset('assets/imgs/megaphone-voice-being-heard.svg') }}" alt="" class="mx-auto h-auto">
                </div>
            </div>
        </div>
    </form>
@endsection
