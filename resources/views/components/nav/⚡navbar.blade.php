<?php

use Livewire\Component;

new class extends Component {
    public $count;
    public $totalSum;

    public function mount()
    {
        $this->updateCart();
    }

    #[On('cartUpdated')]
    public function updateCart()
    {
        if (auth()->check()) {
            $this->count = auth()->user()->cars()->count() ?? 0;
            if ($this->count > 0) {
                $this->totalSum = auth()->user()->cars()->sum('price');
            }
        }
    }
};
?>

<div>
    <div class="navbar bg-base-100 shadow-sm">
        <div class="flex-1">
            <a wire:navigate href="{{ route('home.index') }}" class="text-2xl select-none font-bold">
                {{ config('app.name') }}
            </a>
        </div>
        <div class="flex-none">
            @if (auth()->check())
                <livewire:nav.auth :count="$count" :totalSum="$totalSum" />
            @else
                <a wire:navigate href="{{ route('register') }}" class="btn btn-neutral btn-sm">Регистрация</a>
                <a wire:navigate href="{{ route('login') }}" class="btn btn-neutral btn-sm">Вход</a>
            @endif
        </div>
    </div>
</div>
