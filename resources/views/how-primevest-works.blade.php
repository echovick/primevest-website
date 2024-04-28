@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <form action="{{ url('join-wait-list') }}" action="get">
        <div class="hero-section bg-white">
            <div class="max-w-6xl mx-auto px-4 py-16">
                <div class="flex flex-col text-center mx-auto pb-10">
                    <p class="text-gray-500 text-xs text-center mx-auto">HOW IT WORKS</p>
                    <p class="text-black text-4xl leading-10 py-5 md:w-3/5 mx-auto">Quality assets. Low fees. Smart technology.
                    </p>
                    <p class="text-gray-500 text-sm font-light py-3 mx-auto md:w-3/5">We blend our investment expertise with
                        smart technology to provide our investors with the buying power and investment opportunities
                        traditionally reserved for billion dollar institutions</p>
                    <div class="flex flex-row space-x-5 mx-auto">
                        <input type="text" placeholder="Enter email address"
                            class="border outline-none px-4 border-gray-500 bg-white py-2 rounded-sm w-60" name="email">
                        <button type="submit" class="py-3 px-6 bg-primary text-white text-sm rounded-sm">Get Started</button>
                    </div>
                    <p class="text-gray-500 text-xs font-light py-3 mx-auto md:w-3/5">Start investing in less than 5 minutes and
                        with as little as N50,000.</p>
                </div>
            </div>
        </div>
    </form>

    {{-- Out platform --}}
    <div class="hero-section" style="background:#EBF5F5;">
        <div class="max-w-6xl mx-auto px-4 py-10">
            <div class="flex flex-col md:flex-row md:justify-between-auto">
                <div class="basis md:basis-1/2">
                    <p class="text-gray-500 text-xs">OUR PLATFORM</p>
                    <p class="text-black text-4xl leading-10 py-5">Your first investment is just the beginning.</p>
                    <p class="text-gray-500 text-sm font-light py-2">In less than 5 minutes, you can create an account,
                        select an asset, and complete your first investment.</p>
                    <p class="text-gray-500 text-sm font-light py-2">After you place your initial investment, we'll keep
                        working to add new assets to your portfolio over time — with no additional investment required on
                        your end. This means your already-diversified portfolio can become stronger year after year. You can
                        then continue making contributions manually or set up recurring investments.</p>
                </div>
                <div class="basis md:basis-1/2 pt-10 md:pt-0 md:self-end">
                    <img src="{{ asset('assets/imgs/how-it-works.svg') }}" alt="hero image" class="w-auto md:h-80 ml-auto">
                </div>
            </div>
        </div>
    </div>

    {{-- Our assets --}}
    <div class="hero-section bg-white">
        <div class="max-w-6xl mx-auto px-4 py-10">
            <div class="flex flex-col md:flex-row md:justify-between-auto md:space-x-5">
                <div class="basis md:basis-1/2 pt-10 md:pt-0 md:self-end">
                    <img src="{{ asset('assets/imgs/our-assets.svg') }}" alt="hero image" class="w-auto md:h-80 ml-auto">
                </div>
                <div class="basis md:basis-1/2">
                    <p class="text-gray-500 text-xs">OUR ASSETS</p>
                    <p class="text-black text-4xl leading-10 py-5">Your portfolio is powered by high-quality, expert curated
                        assets.</p>
                    <p class="text-gray-500 text-sm font-light py-2">Primevest presents a range of exclusive real estate
                        investment opportunities, catering to discerning investors seeking to diversify their portfolios.
                        Traditionally limited to institutional investors, these opportunities are now accessible to
                        individuals through Primevest.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- How to invest --}}
    <div class="hero-section bg-lightCyan py-10">
        <div class="max-w-6xl mx-auto px-4 py-10">
            <p class="text-black text-4xl leading-10 py-5 text-center mx-auto mb-5">How to invest</p>
            <div class="flex flex-col space-y-5 md:flex-row md:space-x-10">
                <div class="basis-1/3 bg-white shadow-sm p-7">
                    <p class="text-black text-md font-medium mb-3">Create Your Account</p>
                    <p class="text-gray-500 text-sm">Begin your journey by creating a Primevest account. It's quick and easy
                        – simply provide your details, set up your preferences, and you're ready to go!</p>
                </div>
                <div class="basis-1/3 bg-white shadow-sm p-7">
                    <p class="text-black text-md font-medium mb-3">Explore Properties</p>
                    <p class="text-gray-500 text-sm">Dive into our curated selection of premium real estate properties.
                        Explore detailed descriptions, images, and financial projections to find the perfect investment
                        opportunity.</p>
                </div>
                <div class="basis-1/3 bg-white shadow-sm p-7">
                    <p class="text-black text-md font-medium mb-3">Select and Invest</p>
                    <p class="text-gray-500 text-sm">Once you've found a property that aligns with your investment goals,
                        Choose your desired investment amount, review the terms, and securely invest with just a few clicks.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    <div class="hero-section bg-white py-10">
        <div class="max-w-6xl mx-auto px-4 py-10">
            <p class="text-black text-4xl leading-10 py-5 text-center mx-auto mb-5">Frequently Asked Questions</p>
            <div class="border border-gray-200 rounded-lg md:w-2/3 mx-auto">
                <!-- Accordion Item 1 -->
                <div class="border-b border-gray-200">
                    <button class="w-full text-left p-4 bg-gray-100 hover:bg-gray-200 focus:outline-none"
                        onclick="toggleAccordion('accordion1')">
                        Who can invest with primevest?
                    </button>
                    <div id="accordion1" class="p-4 hidden">
                        <p>Any Nigerian citizen (or permanent resident) currently residing in Nigeria. who is over the age of 18. No accreditation required.</p>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="border-b border-gray-200">
                    <button class="w-full text-left p-4 bg-gray-100 hover:bg-gray-200 focus:outline-none"
                        onclick="toggleAccordion('accordion2')">
                        How does pricing work?
                    </button>
                    <div id="accordion2" class="p-4 hidden">
                        <p>At Primevest, our revenue model revolves around ensuring fairness, transparency, and a shared journey with our investors, where we generate revenue through transaction fees of 2% for payment processing, monthly management fees of 1% per property for ongoing oversight, and performance fees of 2.5% of profits generated from property appreciation or successful sales, all designed to align with investor success, maintain transparency, and uphold affordability while fostering a mutually beneficial relationship and making real estate ownership accessible and rewarding for all participants.</p>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="border-b border-gray-200">
                    <button class="w-full text-left p-4 bg-gray-100 hover:bg-gray-200 focus:outline-none"
                        onclick="toggleAccordion('accordion3')">
                        Is primevest a long term investment?
                    </button>
                    <div id="accordion3" class="p-4 hidden">
                        <p>Absolutely. Like all investments, investments in Primevest should be viewed as long-term (1+ years). This is because we specifically select strategies based on their long-term return potential for our investors, not short-term optics. If you anticipate needing your investment back in the near-term, we don't recommend investing with us.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200">
                    <button class="w-full text-left p-4 bg-gray-100 hover:bg-gray-200 focus:outline-none"
                        onclick="toggleAccordion('accordion4')">
                        How does liquidity work at primevest?
                    </button>
                    <div id="accordion4" class="p-4 hidden">
                        <p>Liquidity in our platform operates by allowing investors to liquidate their investments before a property is sold. If an investor wishes to liquidate, they can create an offer and sell it to another investor. It's important to note that there is no liquidation penalty associated with this process. This flexibility enables investors to manage their investments according to their needs and circumstances.</p>
                    </div>
                </div>

                <div class="border-b border-gray-200">
                    <button class="w-full text-left p-4 bg-gray-100 hover:bg-gray-200 focus:outline-none"
                        onclick="toggleAccordion('accordion5')">
                        How do i get my returns?
                    </button>
                    <div id="accordion5" class="p-4 hidden">
                        <p>Returns at Primewest are generated through a potential appreciation in the value of your investment shares over time. Your investment shares have the potential to appreciate in value as the underlying properties and assets increase in worth. These returns are calculated and distributed to investors according to the terms outlined in their investment agreements.</p>
                    </div>
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
