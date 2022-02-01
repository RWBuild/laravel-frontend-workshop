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

                <x-input.text-box type="text" name="first_name" placeholder="Your firstname goes here..."
                    label="Firstname" />
                <x-input.text-box type="text" name="last_name" placeholder="Your lastname goes here..." label="Lastname" />

                <x-input.text-box type="text" name="email" placeholder="Your email goes here..." label="Email" />
                <x-input.text-box type="date" name="dob" placeholder="Your dob goes here..." label="Date of Birth" />

                <div>
                    <button class="bg-primary px-6 py-2 text-white rounded ">
                        Submit
                    </button>
                </div>
            </form>

            <div>
            </div>

        @endsection
