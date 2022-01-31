@extends('layouts.default')

@section('content')

    <div class="bg-gray-100 min-h-screen px-10 py-5">

        {{-- Top cards --}}
        <div class="w-full">
            <h1 class="mb-3 font-bold text-primary text-heading">Top cards</h1>
            {{-- flex justify-center flex-wrap --}}
            <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-4 ">
                <div class=" bg-white rounded-md p-4 text-center leading-6 border">
                        <div class="font-bold">
                            230
                        </div>
                        <div class="font-semibold">
                            Badges
                        </div>
                    </div>
                    <div class="bg-white rounded-md p-4 text-center leading-6 border ">
                        <div class="font-bold">
                            230
                        </div>
                        <div class="font-semibold">
                            Badges
                        </div>
                    </div>

                <div class=" bg-white rounded-md p-4 text-center leading-6 border">
                        <div class="font-bold">
                            230
                        </div>
                        <div class="font-semibold">
                            Badges
                        </div>
                    </div>

                    <div class=" bg-white rounded-md p-4 text-center leading-6 border">
                        <div class="font-bold">
                            230
                        </div>
                        <div class="font-semibold">
                            Badges
                        </div>
                    </div>

                <div class=" bg-white rounded-md p-4 text-center leading-6 border">
                        <div class="font-bold">
                            230
                        </div>
                        <div class="font-semibold">
                            Badges
                        </div>
                    </div>

                    <div class=" bg-white rounded-md p-4 text-center leading-6  border">
                        <div class="font-bold">
                            230
                        </div>
                        <div class="font-semibold">
                            Badges
                        </div>
                    </div>








            </div>


        </div>

        {{-- Another section --}}
        <div class="mt-10">
            <h1 class="card-section">Another section</h1>
        </div>
    </div>

@endsection
