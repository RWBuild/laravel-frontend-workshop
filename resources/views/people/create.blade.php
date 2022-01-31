@extends('layouts.default')

@section('content')

    <div class="flex justify-center items-center">
        <div class="bg-white border border-gray-100 p-5 w-96 mt-12">

            {{-- Form fields --}}
            <form action="{{ route('people.store') }}" method="POST">

                @csrf
                {{-- Text field --}}
                <div class="text-center my-5">
                    <h1 class="font-bold text-primary">Add Person;</h1>
                </div>

                <div class="mb-3">
                    <label for="first_name" class="font-bold leading-9">Firstname</label>
                    <input type="text" name="first_name" id="first_name"
                        class="block border border-gray-200 rounded-md w-full py-2 px-2 focus:outline-none"
                        placeholder="Your firstname goes here..." />
                    @error('first_name')
                        <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="last_name" class="font-bold leading-9">Lastname</label>
                    <input type="text" name="last_name" id="last_name"
                        class="block border border-gray-200 rounded-md w-full py-2 px-2 focus:outline-none"
                        placeholder="Your lastname goes here..." />

                         @error('last_name')
                        <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="font-bold leading-9">Email</label>
                    <input type="text" name="email" id="email"
                        class="block border border-gray-200 rounded-md w-full py-2 px-2 focus:outline-none"
                        placeholder="Your lastname goes here..." />
                        @error('email')
                        <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="dob" class="font-bold leading-9">Date of Birth</label>
                    <input type="date" name="dob" id="dob"
                        class="block border border-gray-200 rounded-md w-full py-2 px-2 focus:outline-none"
                        placeholder="Your lastname goes here..." />
                        @error('dob')
                        <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button class="bg-primary px-6 py-2 text-white rounded ">
                        Submit
                    </button>
                </div>
            </form>

            <div>
            </div>

        @endsection
