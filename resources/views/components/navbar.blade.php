<header class="p-5 flex items-center justify-between gap-5">
    <a href="{{ url()->previous() }}">
        <div class="p-4 bg-blue-500 w-10 h-10 rounded-full flex items-center justify-center shadow-sm text-white transition-all duration-150 hover:bg-blue-600 hover:scale-[1.02] active:scale-95">
            <iconify-icon icon="lineicons:chevron-left" width="25" height="24"></iconify-icon>
        </div>
    </a>
    <div class="bg-blue-500 shadow-sm rounded-full min-w-52 py-2 px-4 flex items-center justify-center gap-2 text-xl text-white font-semibold capitalize">
        <iconify-icon icon="lineicons:cart-1" width="24" height="24"></iconify-icon>
        {{ str_replace('-', ' ', Route::currentRouteName()) }}
    </div>
    <div></div>
</header>