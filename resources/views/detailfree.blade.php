 <x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>  

                    
      <div >
          <article class="p-8 bg-white rounded-lg border border-gray-200 shadow-md ">
             <div class="flex justify-between items-center">                  
                    <a href="/komunitas" class="font-medium text-blue-500 hover:underline">&laquo; Kembali </a>
                    </a>
                </div>
              <div class="flex justify-between items-center mb-5 text-gray-500">
                  <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded ">                     
                  </span>
                  
              </div>
              <div class="text-center">
                  <img class="w-60 h-60 mx-auto" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar">
                  <h2 class="my-8 mb-1 text-3xl tracking-tight font-bold text-gray-900">
                   {{ $detailfree['name'] }}
                  </h2>
                  <div class="text-gray-600">
                    {{ $detailfree['username']}}
                    </a>
                  </div>
                  <p class="my-4 text-sm font-light">"{{ Str::limit($detailfree['bio'], 100)}}"</p>
                  <div  class="place-items-center my-2" >
                    <svg class="w-[31px] h-[31px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2ZM7 12.5a.5.5 0 0 1 .495.43.762.762 0 0 0 .157.096c.213.106.553.208 1.005.295.896.173 2.111.262 3.343.262 1.232 0 2.447-.09 3.343-.262.452-.087.792-.19 1.006-.295a.764.764 0 0 0 .156-.096.5.5 0 0 1 .995.07c0 1.19-.644 2.438-1.618 3.375C14.9 17.319 13.531 18 12 18c-1.531 0-2.9-.681-3.882-1.625C7.144 15.438 6.5 14.19 6.5 13a.5.5 0 0 1 .5-.5Zm9.519.417.003-.004-.003.004Zm-9.038 0a.017.017 0 0 1-.003-.004l.003.004Zm.901-4.853L9 6.81l.619 1.253 1.381.2-1 .976.236 1.376-1.237-.65-1.235.65L8 9.239l-1-.975 1.382-.2Zm6 0L15 6.81l.619 1.253 1.381.2-1 .976.236 1.376-1.237-.65-1.235.65L14 9.239l-1-.975 1.382-.2Z" clip-rule="evenodd"/>
                    </svg>
                  </div>
                  <p class="my-4 font-light">{{$detailfree['desc']}}</p> </p>

              </div>            
              
              </div>
          </article> 
      </div> 
   
</x-layout>