<div>
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow-lg p-12 md:mt-0 sm:max-w-md xl:p-16">
                <h1 class="text-2xl font-semibold leading-tight tracking-tight text-gray-900 sm:text-2xl text-center">Add Product</h1>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                <form class="mt-4" wire:submit="save">
                    <div class="flex flex-col mb-2">
                        <div class="flex flex-col mb-2">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="" wire:model="image">
                            @error('image')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="flex flex-col mb-2">
                            <label for="category-name" class="mb-1 text-xs font-medium text-gray-900">Product name</label>
                            <input type="text" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter category name">
                            @error('name')
                            <p class="text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-2">
                            <label for="category-name" class="mb-1 text-xs font-medium text-gray-900">Price</label>
                            <input type="text" wire:model="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter category name">
                            @error('price')
                            <p class="text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-2">
                            <label for="category_id" class="mb-1 text-xs font-medium text-gray-900">Category</label>
                            <select name="category_id" wire:model="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="null" hidden>Select category</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="{{route('home')}}" wire:navigate type="button" class="text-blue-700 hover:text-blue-800 font-semibold bg-white border-blue-700 border-2 hover:border-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center">Cancel</a>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @session('success')
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">Add product successfully</span>
    </div>
    @endsession
    @session('failed')
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">Add product failed</span>
    </div>
    @endsession
</div>

