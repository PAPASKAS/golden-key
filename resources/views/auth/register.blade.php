<x-main-layout>
    <div class="register-page mt-4">
        <div class="container">
            <h2>Регистрация</h2>
            <form action="{{ route('register') }}" method="POST" class="common-form">
                @csrf
                <label class="w-50">
                    Логин
                    <input type="text" class="form-control form-control-primary" name="login" required />
                </label>
                <label class="w-50">
                    Email
                    <input type="email" class="form-control form-control-primary" name="email" required />
                </label>
                <label class="w-50">
                    Пароль
                    <input type="password" class="form-control form-control-primary" name="password" required />
                </label>
                <label class="w-50">
                    Повторите пароль
                    <input type="password" class="form-control form-control-primary" name="password_confirmation" required />
                </label>

                <div class="mt-3">
                    <x-button type="submit" :outline="false">Зарегистрироваться</x-button>
                </div>
            </form>
        </div>
    </div>
</x-main-layout>
