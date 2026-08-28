<?php

use Livewire\Component;

new class extends Component {
    public $cars;
    public $userCartIds = [];
    public $userFavorites = [];

    public function mount()
    {
        if (auth()->check()) {
            $this->userCartIds = auth()->user()->cars()->pluck('cars.id')->toArray();
        }
    }
    public function addToCart($carId)
    {
        $user = auth()->user();

        if (!$user->cars()->where('car_id', $carId)->exists()) {
            $user->cars()->attach($carId);
            $this->userCartIds[] = $carId;
            $this->dispatch('cartUpdated');
        } else {
            session()->flash('info', 'Товар уже в корзине');
        }
    }
};
?>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    @foreach ($cars as $car)
        <div class="card bg-base-100 w-96 shadow-sm mt-12">
            <button class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-star-icon lucide-star">
                    <path
                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                </svg>
            </button>
            <figure>
                <img class="hover:scale-103 transition-all duration-300" src="{{ asset("/storage/{$car->image}") }}"
                    alt="{{ $car->name }}" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">{{ $car->name }}</h2>
                <p>{{ $car->description }}</p>
                <div class="card-actions justify-between w-full items-center">
                    <span class="text-md font-semibold text-gray-900">{{ number_format($car->price, 2, ',', ' ') }}
                        ₽</span>
                    <button wire:click="addToCart({{ $car->id }})" class="btn bg-violet-700 text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                            <path d="M5 12h14" />
                            <path d="M12 5v14" />
                        </svg>Добавить
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
