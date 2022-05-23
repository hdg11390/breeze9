 <div class="container">
 <div x-data="carousel()" class="relative">
    <img 
    class="w-full object-cover object-center"
        :src="images[selected]"
         alt="mountains"
    />
        
    <button
        class="absolute inset-y-0 left-0 px-2 py-[25%] h-64 w-8 group hover:bg-gray-500 hover:bg-opacity-75 cursor-pointer">
        <span class="hidden group-hover:block text-gray-50">
            &larr;
        </span>
    </button>
    <button
        class="absolute inset-y-0 right-0 px-2 py-[25%] h-64 w-8 group hover:bg-gray-500 hover:bg-opacity-75 cursor-pointer">
        <span class="hidden group-hover:block text-gray-50">
            &rarr;
        </span>
    </button>
    <div class="absolute bottom-0 w-full p-4 flex justify-center space-x-2">
        <button class="h-2 w-2 rounded-full bg-gray-300 hover:bg-gray-300 ring-2 ring-gray-300"></button>
        <button class="h-2 w-2 rounded-full bg-gray-500 hover:bg-gray-300 ring-2 ring-gray-300"></button>
        <button class="h-2 w-2 rounded-full bg-gray-500 hover:bg-gray-300 ring-2 ring-gray-300"></button>
    </div>
</div>
</div>