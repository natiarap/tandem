      <x-layout>
        <x-slot:title>{{ $title }}</x-slot:title>  
        
            
        {{-- <article class="py-5 max-w-screen-md border-b border-gray-300"> 
          <img src="" alt="foto komunitas">
          <a href="/komunitas/{{ $detailkomun['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking tight font-bold text-gray-900"  > {{ $detailkomun ['title'] }}
            </h2>
            <div>
              Created by 
              <a href="/created_by/{{ $detailkomun->created_by->username }}" 
                class="hover:underline text-base text-blue-400">{{ $detailkomun->created_by->name }}</a> 
              {{ $detailkomun->is_coworking ? '| Tersedia Coworking Space' : ' ' }}</a> 
            </div>
          </a>
            <div>
              <p class="my-4 font-light">{{ Str::limit($detailkomun['body'], 150)}}</p> 
            </div>
          <a href="/komunitas/{{ $detailkomun['slug'] }}" class="font-medium text-blue-500 hover:underline">Details &raquo;</a>
          </article> --}}
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
                @foreach ($komunitas as $detailkomun)
                <article class="p-4 bg-white rounded-lg border border-gray-200 shadow-md ">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded ">                     
                        </span>
                        @if ($detailkomun->is_coworking)
                                    <span class="text-green-500 text-sm flex items-center gap-1">
                                      <svg class="w-4 h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M18 18V6h-5v12h5Zm0 0h2M4 18h2.5m3.5-5.5V12M6 6l7-2v16l-7-2V6Z" />
                                      </svg>
                                      co-working
                                    </span>
                                  @endif
                    </div>
                    <div class="flex items-center space-x-4">
                            <img class="w-50 h-50 " src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                            
                            <span>
                                <a href="/komunitas/{{ $detailkomun['slug'] }}" class="hover:underline">
                                  <h2 class="mb-1 text-2xl tracking tight font-bold text-gray-900"  > {{ $detailkomun ['title'] }}
                                  </h2>
                                  </a>  
                                  <div>
                                    Created by 
                                    <a href="/created_by/{{ $detailkomun->created_by->username }}" 
                                      class="hover:underline text-base text-blue-400 my-">{{ $detailkomun->created_by->name }}</a> 
                             </span>
                            
                             <p class="my-4 text-sm font-light">{{ Str::limit($detailkomun['body'], 100)}}</p>
                            </div>
                                               
                        </div>
                                        
                </article> 
                @endforeach       
            </div>  
      </section>
{{-- 
<section>
  <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
    @foreach ($komunitas as $detailkomun)
      <div class="bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md overflow-hidden flex flex-col sm:flex-row h-auto">
        <a href="#" class="sm:w-1/3 w-full h-48 sm:h-auto">
          <img class="w-full h-full object-cover sm:rounded-l-lg" 
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" 
            alt="Bonnie Avatar">
        </a>

        <div class="p-4 flex flex-col justify-between sm:w-2/3 w-full">
          <div>
            <div class="flex items-start justify-between mb-1">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white hover:underline">
                <a href="/komunitas/{{ $detailkomun['slug'] }}">{{ $detailkomun['title'] }}</a>
              </h3>
              @if ($detailkomun->is_coworking)
                <span class="text-green-500 text-sm flex items-center gap-1">
                  <svg class="w-4 h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M18 18V6h-5v12h5Zm0 0h2M4 18h2.5m3.5-5.5V12M6 6l7-2v16l-7-2V6Z" />
                  </svg>
                  co-working
                </span>
              @endif
            </div>

            <p class="text-sm text-gray-500 dark:text-gray-300 mb-1">
              Created by
              <a href="/created_by/{{ $detailkomun->created_by->username }}"
                class="text-blue-500 hover:underline">{{ $detailkomun->created_by->name }}</a>
            </p>

            <p class="text-sm text-gray-600 dark:text-gray-400">
              {{ Str::limit($detailkomun['body'], 100) }}
            </p>
          </div>

        </div>
      </div>
    @endforeach
  </div>
</section> --}}

          
      </x-layout>