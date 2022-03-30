<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Girls of Staghorn') }}
        </h2>
    </x-slot>

   
        <div class="max-w-7xl mx-auto">
            <div class="bg-white ">
              <p class="px-20 pt-8 font-semibold">I'd like to introduce my current female Labs to you. Our girls are all well socialized, friendly, sound bitches, who love to take turns coming inside for a frolic, a snooze on the couch, an extra treat and lots of lovin's from us. Usually as they balance themselves on my lap in the lazy boy (girl) chair! I am very proud of their temperament, their kind ways and winning expressions. Most visitors to our home are impressed with their looks, brains and spirit.</p>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-5 py-10 ">
                        <div class=" flex justify-center flex-wrap -m-4 ">

                         @foreach (\App\Models\Dog::where('dogstat', '=', 'A')
                                                    ->where('sex','like','M%')
                                                    ->orderBy('birthday')->get() as $dog)
                           
                          
                          
                          <div class="p-4 md:w-80">
                            <div class="h-full border-2 border-gray-200 shadow-md shadow-staghorn-500 border-opacity-60 rounded-lg overflow-hidden max-w-xs">
                              <img class="lg:h-48 w-80 object-cover object-center" src="{{ asset( $dog->pic) }}" alt="blog">
                              <div class="p-6">
                                 <h1 class="title-font text-lg font-semibold text-gray-900 mb-3 text-center h-14">{{ $dog->regName }}</h1>
                                <p class="leading-relaxed mb-3 text-center">D.O.B. {{ \Carbon\Carbon::parse($dog->birthday)->format('F j, Y ') }}</p>
                                <div class="flex items-center flex-wrap ">
                                  <button class="flex mx-auto mt-2 text-white bg-staghorn-400 border-0 py-2 px-5 focus:outline-none hover:bg-staghorn-500 rounded">{{ $dog->callName }}'s Page</button>
                               </div>
                              </div>
                            </div>
                          </div>
                          @endforeach 
                          
                            
                    
                          </div>
                        </div>
                      </div>
                </div>

            </div>
            <x-footer/> 
    </div>
  
</x-app-layout>
