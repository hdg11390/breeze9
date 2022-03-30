<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Girls of Staghorn') }}
        </h2>
    </x-slot>

  
        <div class="max-w-7xl mx-auto">
            <div class="bg-white ">
              <p class="px-20 pt-8 prose-lg">List of Photos in Database</p>
              <hr>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-5 py-10 ">
                        <div class=" flex justify-center flex-wrap ">
                            <x-flash />
                  
                            <form action="" method="GET">
                              <div class="flex justify-end p-4" >
                                <input type="search" id="search" name ="search"
                                placeholder="Search Call Names..."
                                value={{ request('search') }}
                               >
                                <button class="px-6 bg-gray-200 border-2 border-gray-300 hover:bg-gray-400 rounded-md">Search</button>
                              
                            </form>                 
                        </div>

                        <div class="container w-7-xl mx-auto">  
                            <table class="prose:table px-10 w-full mx-auto">
                              <thead class="items-start">
                                <tr class="border-b-2 items-start">
                                  <th>Call Name</th>
                                  <th>Position</th>
                                  <th>Image Location</th>
                                  <th>Photo By</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($imgs as $img )
                                    
                             
                                    <tr class="hover:bg-gray-100">
                                    <td class="border-b pl-4  font-bold">{{ $img->callName }}</td>
                                    <td class="border-b text-center ">{{ $img->img_pos }}</td>
                                    <td class="border-b pl-4 ">{{ $img->pics }}</td>
                                    <td class="border-b pl-4 ">{{ $img->img_by }}</td>
                                    <td class="border-b pl-4 text-center justify-items-center ">
                                  <a href="/photo/edit/{{ $img->id }}">
                                  <button class=" 'inline-flex items-center px-6 py-1 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-800 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    Edit</button></a>
                                </td>
                                <td class="border-b text-center justify-items-center ">
                                  <button class=" 'inline-flex items-center px-2 py-1 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-800 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                   Delete</button>
                                </td>
                                </tr>	
                                @endforeach
                            
                              </tbody>
                            </table>
                            <div class="pt-6">
                              {{ $imgs->links() }}
                            </div>


                        </div>  
                            
                    
                          </div>
                        </div>
                      </div>
                </div>

            </div>
            <x-footer/>
   

</x-app-layout>