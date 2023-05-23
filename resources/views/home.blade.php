@extends('layout.app')

@section('content')
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 uppercase">{{ auth()->user()->name }} -
                    {{ auth()->user()->role }}
                </h1>
                <form action="/logout" method="GET" class="flex justify-center mt-4">
                    @csrf
                    <button type="submit" class="w-2/12 px-8 py-3 border border-black font-semibold rounded-md">Log
                        out</button>
                </form>
            </div>
        </div>
    </section>
@endsection
