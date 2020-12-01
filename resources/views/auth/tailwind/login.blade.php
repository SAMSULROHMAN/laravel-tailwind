@extends('auth.global.main')
@section('main')
<form action="{{ route('login') }}" method="post">
    {{ csrf_field() }}
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        @include('components.alert')

        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                Email 
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" 
            name="email"
            type="email" 
            placeholder="Email"
            value="{{ old('email')}}"
            required
            autofocus
            >

            @if ($errors->has('email'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}.</p>
            @endif
        </div>
        {{-- Error Signal --}}
        <div class="mb-6">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-grey-darker mb-3" 
            id="password" type="password" placeholder="******************">
            <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="button">
                Sign In
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-darker" href="#">
                Forgot Password?
            </a>
        </div>
    </div>
</form>
@endsection