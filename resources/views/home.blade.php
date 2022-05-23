<x-staghrn>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container max-w-7xl  mx-auto pt-8 bg-white">
      

        <div class="flex justify-center items-center py-6  mx-auto">
            <img src="{{ asset('images/welcome.jpg') }}" alt="">
        </div>
            <div class="flex border-b-4 border-black border-double">
            <div class=" flex-1 text-left text-lg font-semibold pl-10 ml-4 pb-2">  {{ \Carbon\Carbon::now()->format('F j, Y ') }} </div>
            <div class="flex   text-right text-lg font-semibold pr-10 mr-4 pb-2">Napanee ON</div>
            </div>
            <div class="mt-4">
            <x-carousel/>
            </div>
            <div class="flex py-8">
                <div class="w-8/12">
                <p class="prose-p prose-xl px-10 mx-auto">We are Staghorn Reg`d Labradors. In the 25+ years since Staghorn was registered, we have produced several top winning Champions, including Best in Specialty Show winning adults and puppies as well as several obedience and working certificate titled dogs. Many of our dogs have gone on to become definite assets in other breeding programs, both across Canada and the USA. We maintain a small breeding program of select Labrador Retrievers in S.E. Ontario, Canada. We are located 2 hours from Toronto and 2- 1/2 hours from Ottawa.</p>
                </div>
                <div class="w-4/12 ">
                    <div class="md:w-80">
                        <div class="text-center mx-auto border-2 border-gray-200 shadow-md shadow-staghorn-500 border-opacity-60 rounded-lg overflow-hidden max-w-xs">
                           <p class="bg-staghorn-400 text-white text-2xl"> Upcoming Litters and Availablity</p>
                          <div class="p-6">
                             <h1 class="title-font text-lg font-semibold text-gray-900 mb-3 text-center ">Visit our Upcoming Litters page for information about our 2022 puppies.</h1>
                       
                            <div class="flex items-center flex-wrap ">
                              <button class="flex mx-auto mt-2 text-white bg-staghorn-400 border-0 py-2 px-5 focus:outline-none hover:bg-staghorn-500 rounded">Upcoming Page</button>
                           </div>
                          </div>
                        </div>
                      </div>
                </div>
               
              </div>   
    </div>


</x-staghrn>