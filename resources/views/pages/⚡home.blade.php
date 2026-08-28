<?php

use App\Models\Car;
use Livewire\Component;

new class extends Component {
    public $cars = [];

    public function mount()
    {
        $this->cars = Car::all();
    }
};
?>

<div>
    @if (auth()->check())
        <livewire:product.card :cars="$cars" />
    @else
        <p class="text-xl mt-16 flex items-center text-center justify-center">Для просмотра контента необходимо
            авторизоваться</p>
    @endif
</div>
