 <x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

{{-- @foreach ($freelance as $detailfree)
  <article class="py-5 max-w-screen-md border-b border-gray-300"> 
    <img src="" alt="foto freelance">
    <a href="/freelance/{{ $detailfree['slug'] }}" class="hover:underline">
      <h2 class="mb-1 text-3xl tracking tight font-bold text-gray-900"  > {{ $detailfree ['name'] }}
      </h2>
      
    </a>
      <div>
        <p class="my-2 text-sm font-light">{{ Str::limit($detailfree['bio'], 50)}}</p> 
        <p class="my-4 text-xl font-light">{{ Str::limit($detailfree['desc'], 150)}}</p> 
      </div>
    <a href="/freelance/{{ $detailfree['slug'] }}" class="font-medium text-blue-500 hover:underline">Details &raquo;</a>
    </article>
@endforeach  --}}

<section>
  <div class="w-full px-4 py-6">
    <div class="w-full mx-auto">
      <form action="" method="GET" class="flex flex-row items-center w-full gap-2">
        <div class="relative flex-grow min-w-0">
          <label for="search" class="sr-only">Search</label>
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 11-14 0 7 7 0 0114 0Z"/>
            </svg>
          </div>
          <input
            type="search"
            name="search"
            id="search"
            autocomplete="off"
            class="block w-full pl-10 pr-4 py-3 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
            placeholder="Cari yang ingin kamu cari ..."
          />
        </div>
        <button
          type="submit"
          class="px-5 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-all"
        >
          Cari
        </button>
      </form>
    </div>
  </div>
</section>

      <section class="">         
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-2 lg:px-0">
            <div class="grid gap-8 lg:grid-cols-2">
                @foreach ($freelance as $detailfree)
                <article class="p-4 bg-white rounded-lg border border-gray-200 shadow-md ">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded ">                     
                        </span>                       
                    </div>
                    <div class="flex items-center space-x-4">
                            <img class="w-50 h-50 " src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                            
                            <span>
                                <a href="/freelance/{{ $detailfree['slug'] }}" class="hover:underline">
                                  <h2 class="mb-1 text-2xl tracking tight font-bold text-gray-900"  > {{ $detailfree ['name'] }}
                                  </h2>
                                  </a>  
                                  <div>
                                    <a href="" 
                                      class="hover:underline text-base text-gray-400">{{ $detailfree ['username'] }}</a> 
                             </span>
                            
                             <p class="my-4 text-sm font-light">"{{ Str::limit($detailfree['bio'], 100)}}"</p>
                            </div>
                                               
                        </div>
                                        
                </article> 
                @endforeach       
            </div>  
      </section>

</x-layout>