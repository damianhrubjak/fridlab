 <div class="relative z-10 flex even:flex-row-reverse">
     <div class="w-1/2 pb-24">
         <img src="{{ $milestone['image'] }}" alt="" class="pixel-border h-full w-full object-cover object-bottom">
     </div>
     <div class="roadmap-line">
         <img src="{{ asset('images/coin.svg') }}" alt="" class="bg-pallette-black absolute left-0 top-0 w-full">
     </div>
     <div class="flex w-1/2 items-center pb-24">
         <div class="">
             <h2
                 class="text-pallette-yellow font-heading border-pallette-yellow w-max max-w-full border-2 bg-[#f5ed10] bg-opacity-10 px-4 py-2 text-2xl">
                 {{ $milestone['heading'] }}
             </h2>
             <p class="mt-8">{!! $milestone['text'] !!}</p>
         </div>
     </div>
 </div>
