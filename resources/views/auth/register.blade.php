<x-main-layout>
    <div class="register-page mt-4">
        <div class="container">
            <h2>Регистрация</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <label class="w-50">
                    Логин
                    <input type="text" class="form-control" name="login" required />
                </label>
                <label class="w-50">
                    Email
                    <input type="email" class="form-control" name="email" required />
                </label>
                <label class="w-50">
                    Пароль
                    <input type="password" class="form-control" name="password" required />
                </label>
                <label class="w-50">
                    Повторите пароль
                    <input type="password" class="form-control" name="password_confirmation" required />
                </label>

                <div class="mt-3">
                    <button type="submit" class="btn btn-dark">Зарегстрироваться</button>
                </div>
            </form>
        </div>
    </div>

{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-label for="name" :value="__('Name')" />--}}
{{----}}
{{--            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--        </div>--}}
{{----}}
{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-label for="email" :value="__('Email')" />--}}
{{----}}
{{--            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--        </div>--}}
{{----}}
{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-label for="password" :value="__('Password')" />--}}
{{----}}
{{--            <x-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}
{{--        </div>--}}
{{----}}
{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}
{{----}}
{{--            <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required />--}}
{{--        </div>--}}
{{----}}
{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}
{{----}}
{{--            <x-button class="ml-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-button>--}}
{{--        </div>--}}
{{--    </form>--}}
</x-main-layout>
