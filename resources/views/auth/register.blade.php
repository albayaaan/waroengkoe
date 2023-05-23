@extends('layout.app')

@section('content')
    <div class="flex justify-center h-screen items-center">
        <div class="flex flex-col max-w-md p-6 rounded-md sm:p-10 border-2 border-black">
            <div class="mb-8 text-center">
                <h1 class="my-3 text-4xl font-bold">Sign up</h1>
                <p class="text-sm">Sign up to create your account</p>
            </div>
            <form action="/register" method="POST" class="space-y-12 ng-untouched ng-pristine ng-valid">
                <div class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Leroy Jenkins"
                            class="w-full px-3 py-2 border rounded-md">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm">Email address</label>
                        <input type="email" name="email" id="email" placeholder="leroy@jenkins.com"
                            class="w-full px-3 py-2 border rounded-md">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm">Password</label>
                        <input type="password" name="password" id="password" placeholder="*****"
                            class="w-full px-3 py-2 border rounded-md">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm">Register as</label>
                        <input type="radio" name="role" value="buyer"> Buyer
                        <input type="radio" name="role" value="seller"> Seller
                    </div>
                </div>
                <div class="space-y-2">
                    <div>
                        <button type="submit" class="w-full px-8 border border-black py-3 font-semibold rounded-md">Sign
                            up</button>
                    </div>
                    <p class="px-6 text-sm text-center">Already have an account yet?
                        <a rel="noopener noreferrer" href="/login" class="hover:underline">Sign in</a>.
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
