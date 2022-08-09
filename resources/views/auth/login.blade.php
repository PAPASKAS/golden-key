<x-main-layout>
    <div class="container mt-4">
        <form action="{{ route('login') }}" method="POST" class="common-form">
            @csrf
            <label class="w-50">
                Email
                <input type="text" class="form-control form-control-primary" name="email" required />
            </label>
            <label class="w-50">
                Пароль
                <input type="password" class="form-control form-control-primary" name="password" required />
            </label>

            <div class="form-check mt-3">
                <label class="form-check-label">
                    Запомнить меня
                    <input class="form-check-input" type="checkbox" value="" name="remember">
                </label>
            </div>

            {{--        <div class="flex items-center justify-end mt-4">--}}
            {{--            @if (Route::has('password.request'))--}}
            {{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
            {{--                    {{ __('Забыли пароль?') }}--}}
            {{--                </a>--}}
            {{--            @endif--}}
            {{--        </div>--}}

            <div class="mt-3">
                <x-button type="submit" :outline="false">Зарегистрироваться</x-button>
            </div>
        </form>
    </div>
</x-main-layout>
