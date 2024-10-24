<div>

    <div class="flex justify-end gap-4 mt-4">
        <a href="{{route('category')}}" wire:navigate class="text-blue-800 font-semibold bg-blue-300  rounded-sm text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">+ Category</a>
        <a href="{{route('product')}}" wire:navigate class="text-blue-800 font-semibold bg-blue-300  rounded-sm text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">+ Product</a>
        <a href="{{route('cart')}}" wire:navigate class="text-white bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-semibold rounded-sm text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cart</a>
    </div>
    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px">
            @if($categories !== null)
            @forelse($categories as $cat)
                <li class="me-2 cursor-pointer">
                    <a wire:click.prevent="setCategory({{ $cat->id }})" class="inline-block p-4   {{ $selectedCategory == $cat->id ? 'text-blue-600 active border-b-2 border-blue-600 dark:text-blue-500 dark:border-blue-500 font-semibold' : 'hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'}}" aria-current="page">{{$cat->name}}</a>
                </li>
            @empty
                <p>Categories empty</p>
            @endforelse
            @endif
        </ul>
    </div>

    <div class="grid grid-cols-5 gap-4">
        @if($products !== null)
                @forelse($products as $product)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ Storage::url($product->image) }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$product->name}}</h5>
                    </a>
                    <p class="font-medium">RP {{number_format($product->price,0,',','.')}}</p>
                    <div class="flex flex-row w-full justify-between ">
                        <a wire:click.prevent="deleteProduct({{$product->id}})" class="cursor-pointer "><svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="#" wire:click.prevent="addToCart({{$product->id}})" class=" shrink px-5 inline-flex items-center  py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>

        @empty
            <p>Product empty</p>
        @endforelse
        @endif
    </div>
    <div class="flex justify-end mt-6">
        <a href="{{ route('cart') }}" wire:navigate.hover class="px-6 py-4 bg-blue-700 text-white rounded-lg">Total Bill : Rp {{ number_format($total, 0, ',', '.') }}</a>
    </div>
</div>