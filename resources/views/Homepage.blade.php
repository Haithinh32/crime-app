<x-guest-layout>
    <x-slot:header>
        <div class="w-[599px] h-[53px] relative bg-gradient-to-b from-[#b21c1c] via-[#b32121] to-white rounded-[20px]">
            <div class="w-[599px] h-px left-0 top-[52px] absolute bg-white"></div>
            <div class="left-[16px] top-[14px] absolute justify-start items-start gap-2.5 inline-flex">
                <div class="text-[#f5faff] text-xl font-bold font-['Inter']">Trang chủ</div>
            </div>
            <div class="w-[34px] h-[34px] left-[549px] top-[9px] absolute rounded-[34px]">
                <div class="w-5 h-5 left-[7px] top-[7px] absolute"></div>
            </div>
        </div>
        </x-slot>
        @foreach ($listpost as $post)
        <div class="w-[600px] h-[716px] px-[50px] py-5 border-b border-black flex-col justify-start items-start inline-flex">
            <div class="justify-start items-center gap-[7px] inline-flex">
                <div class="w-[47.84px] h-12 relative">
                    <img class="w-[47.84px] h-12 left-0 top-0 absolute" src="{{ asset('storage/default_user.png') }}" />
                </div>
                <div class="justify-start items-start gap-2.5 flex">
                    <div class="text-black text-[15px] font-bold font-['Inter']">{{$post->name}}</div>
                </div>
                <div class="text-[#161616] text-[15px] font-bold font-['Inter']">.</div>
                <div class="text-[#6e767d] text-[15px] font-light font-['Inter']">{{$post->created_at}}</div>
            </div>
            <div class="self-stretch h-[628px] pt-2.5 flex-col justify-start items-center gap-[34px] flex overflow-hidden">
                <div class="self-stretch h-[628px] pt-2.5 flex-col justify-start items-center gap-[34px] flex overflow-y-auto">
                    <div class="self-stretch justify-start items-center gap-[9px]">
                        <div class="w-[500px]">
                            <span class="text-black text-base font-bold font-['Inter']">TIÊU ĐỀ: </span>
                            <span class="text-black text-base font-normal font-['Inter']">{{$post->title}}</span>
                        </div>
                        <div class="w-[500px]">
                            <span class="text-black text-base font-bold font-['Inter']">Tội phạm: </span>
                            <span class="text-black text-base font-normal font-['Inter']">{{$post->type_of_crime}}</span>
                        </div>
                        <div class="w-[500px]">
                            <span class="text-black text-base font-bold font-['Inter']">Quận: </span>
                            <span class="text-black text-base font-normal font-['Inter']">{{$post->district}}</span>
                        </div>
                        <div class="w-[500px]">
                            <span class="text-black text-base font-bold font-['Inter']">Nội dung: </span>
                            <span class="text-black text-base font-normal font-['Inter']">{{$post->content}}</span>
                        </div>
                    </div>
                </div>
                <img class="self-stretch h-[375px]" src="{{$post->image}}" />
            </div>
        </div>
        @endforeach
</x-guest-layout>