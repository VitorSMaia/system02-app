@extends('layout.app')
@section('title', 'VitoriaEstalendo')
@section('content')
    <div>
        <!-- page -->
        <main
            class="mx-auto flex min-h-screen w-full items-center justify-center bg-gray-900 text-white"
        >
            <!-- component -->
            <form action="{{ route('login') }}" method="POST" class="flex w-[30rem] flex-col space-y-10">
                @csrf
                <div class="text-center text-4xl font-medium">Log In</div>

                <div
                    class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500"
                >
                    <input
                        type="text"
                        placeholder="Email or Username"
                        name="email"
                        class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"
                    />
                </div>

                <div
                    class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500"
                >
                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"
                    />
                </div>

                <button
                    class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400"
                >
                    LOG IN
                </button>

                <a
                    href="#"
                    class="transform text-center font-semibold text-gray-500 duration-300 hover:text-gray-300"
                >FORGOT PASSWORD?</a
                >

                <p class="text-center text-lg">
                    No account?
                    <a
                        href="#"
                        class="font-medium text-indigo-500 underline-offset-4 hover:underline"
                    >Create One</a
                    >
                </p>
            </form>
        </main>
    </div>

@endsection
