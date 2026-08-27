<?php

use App\Models\Car;
use Livewire\Component;

new class extends Component
{
    public $cars = [];

    public function mount()
    {
        $this->cars = Car::all();
    }
};
?>

<div>
    <h1>Домашняя страница</h1>
    @foreach ($cars as $car)
        <h1 class="text-2xl">{{ $car->name }}</h1>
    @endforeach
</div>
