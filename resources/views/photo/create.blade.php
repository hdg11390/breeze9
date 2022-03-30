<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Dogs To The Database') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  Enter Photo Credentials
                </div>
                <x-flash />
<x-panel>
                <form action="/photo/store" method="POST" enctype="multipart/form-data">
                    @csrf

                    <x-form.input name="callName"/>
        
                    <x-form.input name="img_pos"/>

                    <x-form.input name="pics"/>   

                    <x-form.input name="img_by" value="Harold de Groot" />   

                    
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                 <x-form.button>Add Picture</x-form.button>
                 </form>
                 
            </x-panel>
            </div>
        </div>
    </div>
<x-footer/>
    
</x-app-layout>