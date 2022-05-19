 <div
     class="group xs:pb-16 relative z-10 flex shrink-0 flex-col-reverse justify-center pb-8 last:pb-0 md:flex-row md:pb-0 md:even:flex-row-reverse">
     <div class="roadmap-item-content-wrapper">
         <img src="{{ $milestone['image'] }}" alt=""
             class="pixel-border max-w-screen-xs mx-auto h-full w-full object-cover md:max-w-none">
     </div>
     <div class="roadmap-line">
         <img src="{{ asset('images/coin.svg') }}" alt="" class="bg-pallette-black xs:w-14 absolute top-0 w-10">
     </div>
     <div class="roadmap-item-content-wrapper">
         <div class="w-full">
             <h2
                 class="text-pallette-yellow font-heading border-pallette-yellow w-max max-w-full break-words border-2 bg-[#f5ed10] bg-opacity-10 px-4 py-2 text-xl lg:text-2xl">
                 {{ $milestone['heading'] }}
             </h2>
             <p class="mt-8">{!! $milestone['text'] !!}</p>
         </div>
     </div>
 </div>
