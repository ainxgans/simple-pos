<div>

    <div class="container mx-auto p-4">
        <div class="relative h-screen md:place-content-center grid">
            <form wire:submit.prevent="login" method="POST"
                  class="w-full absolute rounded-t-lg bottom-0 md:relative md:min-w-[500px] flex flex-col gap-6 px-5 md:px-16 py-8 shadow-lg  md:rounded z-[50] bg-white">
                <h1 class="font-semibold text-xl md:text-center">Login</h1>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-1">
                        <label for="" class="hidden md:flex" >name</label>
                        <input type="text" name="name" placeholder="name" class="border-gray-400 rounded" wire:model="name"/>
                        @error('name')
                        <p class="text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="" class="hidden md:flex">password</label>
                        <input type="password" name="password" placeholder="password" class="border-gray-400 rounded" wire:model="password" />
                        @error('password')
                        <p class="text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                    <button class="bg-blue-700 text-white rounded-lg px-4 py-2" type="submit">Login</button>

            </form>
        </div>
    </div>
</div>