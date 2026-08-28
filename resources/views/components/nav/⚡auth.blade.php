<?php

use Livewire\Component;

new class extends Component {
    public $count;
    public $totalSum;
};
?>

<div>
    <div class="dropdown dropdown-end space-x-3">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
            <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-square-parking-icon lucide-square-parking">
                    <rect width="18" height="18" x="3" y="3" rx="2" />
                    <path d="M9 17V7h4a3 3 0 0 1 0 6H9" />
                </svg>
                <span class="badge badge-xs indicator-item bg-gray-300">{{ $count }}</span>
            </div>
        </div>
        <div tabindex="0" class="card card-sm dropdown-content bg-base-100 z-1 mt-3 w-52 shadow">
            <div class="card-body">
                <span class="text-lg font-bold">Машин: {{ $count }}</span>
                <span class="text-gray-800 font-semibold">Общая сумма: {{ number_format($totalSum, 2, ',', ' ') }}
                    ₽</span>
                <div class="card-actions">
                    <button class="btn bg-violet-700 text-white btn-block">Посмотреть гараж</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Аватар с меню -->
    <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="bg-base-200 flex w-10 items-center justify-center rounded-full border text-lg">
                <span>{{ str(auth()->user()->name)->substr(0, 1) }}</span>
            </div>
        </div>
        <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
            <li>
                <a class="justify-between">
                    Profile
                    <span class="badge">New</span>
                </a>
            </li>
            <li><a>Settings</a></li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <li><button type="submit">Выйти</button></li>
            </form>
        </ul>
    </div>
</div>
