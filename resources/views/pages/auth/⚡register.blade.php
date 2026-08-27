<?php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        return $this->view()->layout('layouts.clear');
    }
};
?>

<div class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-sm">

        <form action="{{ route('register.store') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <div class="flex justify-between items-center">
                <h1 class="text-md font-semibold">Регистрация</h1>
                <a wire:navigate href="{{ route('home.index') }}" class="text-sm link link-hover">На главную</a>
            </div>
            <fieldset class="fieldset w-full flex flex-col gap-4">
                <label class="label" for="email">Электронная почта</label>
                <input name="email" type="email" id="email" class="input w-full" placeholder="Электронная почта"
                    value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500 font-semibold">{{ $message }}</p>
                @enderror

                <label class="label" for="name">Имя</label>
                <input name="name" type="text" id="name" class="input w-full" placeholder="Имя"
                    value="{{ old('name') }}" />
                @error('name')
                    <p class="text-red-500 font-semibold">{{ $message }}</p>
                @enderror

                <label class="label" for="password">Пароль</label>
                <input name="password" type="password" id="password" class="input w-full" placeholder="Пароль" />
                @error('password')
                    <p class="text-red-500 font-semibold">{{ $message }}</p>
                @enderror

                <label class="label" for="password_confirmation">Подтверждение пароля</label>
                <input name="password_confirmation" type="password" id="password_confirmation" class="input w-full"
                    placeholder="Подтверждение пароля" />
            </fieldset>

            <button type="submit" class="btn btn-neutral btn-md w-full mt-3">Зарегистрироваться</button>
            <a wire:navigate href="{{ route('auth.login') }}" class="link w-full text-center mt-2">Уже
                зарегистрированы?</a>
        </form>
    </div>
</div>
