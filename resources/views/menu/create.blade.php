@extends('layout.app')

@section('content')
    <section class="bg-gray-100 flex justify-center items-center min-h-screen">
        <div class="rounded-lg bg-white p-8 shadow-lg">
            <h1 class="text-center text-3xl font-semibold mb-3">Menu</h1>
            <form action="{{ route('menus.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label for="name">Name Menu</label>
                        <input class="w-full rounded-lg border-gray-200 border p-3 text-sm" placeholder="Name of menu ..."
                            type="text" id="name" name="name" />
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input class="w-full rounded-lg border-gray-200 border p-3 text-sm" placeholder="Price of menu ..."
                            type="number" id="price" name="price" />
                    </div>

                </div>
                <div>
                    <label for="description">Description</label>

                    <textarea class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Description of menu ..."
                        rows="8" id="description" name="description"></textarea>
                </div>

                <div class="mt-4">
                    <button type="submit"
                        class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
