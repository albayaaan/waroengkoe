@extends('layout.app')

@section('content')
    <section class="bg-gray-100 flex justify-center items-center min-h-screen">
        <div class="rounded-lg bg-white p-8 shadow-lg">
            <h1 class="text-center text-3xl font-semibold mb-3">Warung</h1>
            <form action="{{ route('warungs.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label for="name">Name Warung</label>
                        <input class="w-full rounded-lg border-gray-200 border p-3 text-sm" placeholder="Name of warung ..."
                            type="text" id="name" name="name" />
                    </div>
                    <div>
                        <label for="location">Location</label>
                        <input class="w-full rounded-lg border-gray-200 border p-3 text-sm"
                            placeholder="Location of warung ..." type="text" id="location" name="location" />
                    </div>

                </div>
                <div>
                    <label for="description">Description</label>

                    <textarea class="w-full rounded-lg border border-gray-200 p-3 text-sm" placeholder="Description of warung ..."
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
