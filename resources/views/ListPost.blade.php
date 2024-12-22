<x-admin-layout>
    <x-slot:header>
      <div class="w-[600px] h-[53px] relative bg-gradient-to-b from-[#b21d1d] via-[#b42121] to-white rounded-[20px]">
        <div class="w-[600px] h-px left-0 top-[52px] absolute bg-white"></div>
        <div class="left-[16px] top-[14px] absolute justify-start items-start gap-2.5 inline-flex">
          <div class="text-white text-xl font-bold font-['Inter']">Kiểm duyệt bài</div>
        </div>
        <div class="w-[34px] h-[34px] left-[550px] top-[9px] absolute rounded-[34px]">
          <div class="w-5 h-5 left-[7px] top-[7px] absolute"></div>
        </div>
      </div>
    </x-slot:header>
    <div class="w-[600px] h-[1238px] relative">
        <div class="w-[600px] left-0 top-[105px] absolute">
        @foreach ($listpost as $post)
            <button style="width: 600px; height: 72px; padding-top: 12px; padding-bottom: 12px; padding-left: 15px; border-bottom: 1px black solid; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                <div style="width: 48px; height: 48px; position: relative">
                    <img style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute" src="https://via.placeholder.com/48x48" />
                </div>
                <div style="width: auto; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 9px;">
                    <div style="justify-content: flex-start; align-items: center; gap: 7px;">
                        <div class="justify-start items-start gap-2.5 flex">
                            <div class="text-black text-[15px] font-bold font-['Inter']">{{$post->name}}</div>
                            <div class="text-[#161616] text-[15px] font-bold font-['Inter']">.</div>
                            <div class="text-[#6e767d] text-[15px] font-light font-['Inter']">{{ $post->created_at}}</div>
                        </div>
                        <div class="justify-start items-start gap-2.5 flex">
                            <div class="text-black text-[15px] font-normal font-['Inter']">{{$post->title}}</div>
                        </div>
                    </div>
                </div>
            </button>
        @endforeach
</x-admin-layout>