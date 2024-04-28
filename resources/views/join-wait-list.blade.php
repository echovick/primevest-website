@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <form action="{{ route('joinWaitlist') }}" method="POST">
        @csrf
        <div class="hero-section bg-white">
            <div class="max-w-6xl mx-auto px-4 py-16">
                <div class="flex flex-col text-center mx-auto pb-10">
                    <p class="text-gray-500 text-xs text-center mx-auto">COMING SOON</p>
                    @if(session('success'))
                        <div class="px-5 py-2 bg-primary text-white text-md w-80 my-3 mx-auto text-center shadow-sm rounded-sm">
                            {{ session('success') }}
                        </div>
                    @endif
                    <p class="text-black text-4xl leading-10 py-5 md:w-3/5 mx-auto">Exciting Innovations are coming soon</p>
                    <p class="text-gray-500 text-sm font-light py-3 mx-auto md:w-3/5">Please provide your details to get
                        notified once we launch and also earn discounts and coupons as our pre-launch benefits</p>
                    <div class="flex flex-col mx-auto md:flex-row md:space-x-5">
                        <input type="text" placeholder="Enter Email" name="email"
                            class="border outline-none px-4 border-gray-500 bg-white py-2 rounded-sm w-60" value="{{ $_GET['email'] ?? '' }}" required>
                            <input type="text" placeholder="Enter full name" name="full_name"
                            class="border outline-none px-4 border-gray-500 bg-white py-2 rounded-sm w-60" required>
                    </div>
                    <div class="flex flex-row space-x-5 mx-auto mt-5">
                        <button type="submit" class="py-3 px-6 bg-primary text-white text-sm rounded-sm">Join
                            Waitlist</button>
                    </div>
                    <p class="text-gray-500 text-xs font-light py-3 mx-auto md:w-3/5"><i><b>Primevest</b>, Empowering
                            Investors, Building Communities.</i></p>
                </div>
            </div>
        </div>
    </form>
@endsection
