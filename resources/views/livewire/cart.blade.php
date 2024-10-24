<div class="mt-5">
    <table class="w-full table-auto">
        <thead>
        <tr class="text-left justify-between">
            <th class="text-2xl font-semibold">#</th>
            <th class="text-2xl font-semibold">Product</th>
            <th class="text-2xl font-semibold">Qty</th>
            <th class="text-2xl font-semibold">Sub Total</th>
            <th class="text-2xl font-semibold">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($carts as $index => $cart)
        <tr class="text-left justify-between">
            <td>{{ $index + 1 }}</td>
            <td class="flex gap-4 flex-row items-center "><img src="{{Storage::url($cart->product->image)}}" alt="" class="h-44 w-44 object-cover rounded-xl">
                <span class="font-semibold text-2xl">{{ $cart->product->name }}</span>
            </td>
            <td class="font-semibold text-2xl">
                <button class="bg-blue-800 text-white inline-flex items-center justify-center w-8 h-8 rounded-lg" wire:click="reduceQty({{$cart->id}})"> - </button>
                {{ $cart->qty }}
                <button class="bg-blue-800 text-white inline-flex items-center justify-center w-8 h-8 rounded-lg" wire:click="addQty({{$cart->id}})"> + </button>
            </td>
            <td class="font-semibold text-2xl">Rp {{ number_format($cart->qty * $cart->product->price, 0, ',', '.') }}</td>
            <td>
                <a wire:click.prevent="deleteFromCart({{ $cart->id }})" class="px-4 py-2 bg-red-700 text-white rounded cursor-pointer">
                    Remove item
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
