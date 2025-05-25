 <x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>  
  
  {{-- <article class="py-5 max-w-screen-md "> 
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
      
        <p class="my-4 font-light">{{ ($detailkomun['body'])}}</p> 
        <a href="/komunitas" class="font-medium text-blue-500 hover:underline">&laquo; Kembali </a>
      </div>
    </article> --}}

            
      <div >
          <article class="p-8 bg-white rounded-lg border border-gray-200 shadow-md ">
             <div class="flex justify-between items-center">                  
                    <a href="/komunitas" class="font-medium text-blue-500 hover:underline">&laquo; Kembali </a>
                    </a>
                </div>
              <div class="flex justify-between items-center mb-5 text-gray-500">
                  <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded ">                     
                  </span>
                  <span class="text-green-500 text-sm">{{ $detailkomun->is_coworking ? 'Tersedia Coworking Space' : ' ' }}</span>
              </div>
              <div class="text-center">
                  <img class="w-60 h-60 mx-auto" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar">
                  
                  <h2 class="my-8 mb-1 text-3xl tracking-tight font-bold text-gray-900">
                   {{ $detailkomun['title'] }}
                  </h2>
                  <div>
                    Created by 
                    <a href="/created_by/{{ $detailkomun->created_by->username }}" class="hover:underline text-base text-blue-400">
                      {{ $detailkomun->created_by->name }}
                    </a>
                  </div>
                  <p class="my-4 font-light">{{$detailkomun['body']}}</p> </p>

              </div>            
              
              </div>
          </article> 
      </div> 
   
    
</x-layout>