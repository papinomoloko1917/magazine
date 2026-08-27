<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <div class="navbar bg-base-100 shadow-sm">
        <div class="flex-1">
            <a href="{{ route('home.index') }}" class="text-2xl select-none font-bold">
                {{ config('app.name') }}
            </a>
        </div>
        <div class="flex-none">
            @if (auth()->check())
                <livewire:nav.auth />
            @else
                <a wire:navigate href="{{ route('auth.register') }}" class="btn btn-neutral btn-sm">Регистрация</a>
                <a wire:navigate href="{{ route('auth.login') }}" class="btn btn-neutral btn-sm">Вход</a>
            @endif
        </div>
    </div>
</div>
