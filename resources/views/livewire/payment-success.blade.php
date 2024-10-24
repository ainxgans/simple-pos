<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-center">
        <!-- Icon Success -->
        <div class="flex justify-center mb-4">
            <div class="bg-green-500 rounded-full p-4">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                </svg>
            </div>
        </div>

        <h2 class="text-lg font-semibold text-gray-800 mb-2">Payment Successful</h2>

        <p class="text-2xl font-bold text-gray-800 mb-4">RP {{number_format($total,0,',','.')}}</p>

        <a href="{{route('home')}}" wire:navigate wire:click.prevent="payment" class="inline-block px-4 py-2 text-sm font-medium text-blue-600 border border-blue-600 rounded hover:bg-blue-100">
            Back to Home
        </a>
    </div>
</div>
