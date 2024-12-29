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
    @foreach($listpost as $post)
    <div class="w-[600px] h-[899px] left-0 top-[108px] absolute">
      <form method="post" action="{{ route('delete_censor',['post_id' => $post->id] ) }}">
      @csrf
        <button type="sumit" class="w-[180px] h-[45px] left-[376px] top-[854px] absolute bg-[#f91515]/80 rounded-[34.60px] shadow-[0px_6.012422561645508px_6.012422561645508px_0px_rgba(0,0,0,0.25)]  overflow-hidden">
          <div class="left-[75.04px] top-[16.35px] absolute text-center text-white text-[15px] font-bold font-['Inter']">Xóa </div>
        </button>
      </form>
      <form method="post" action="{{ route('censor',['post_id' => $post->id, 'post_status' => 1] ) }}">
      @csrf
        <button type="sumit" class="w-[180px] h-[45px] left-[52px] top-[854px] absolute bg-[#22b80e]/80 rounded-[34.60px] shadow-[0px_6.012422561645508px_6.012422561645508px_0px_rgba(0,0,0,0.25)]  overflow-hidden">
          <div class="left-[67.04px] top-[16.35px] absolute text-center text-white text-[15px] font-bold font-['Inter']">Duyệt </div>
        </button>
      
        <div class="left-[50px] top-[20px] absolute justify-start items-center gap-[7px] inline-flex">
          <div class="w-[47.84px] h-12 relative">
            <img class="w-[47.84px] h-12 left-0 top-0 absolute" src="{{ asset('storage/default_user.png') }}" />
          </div>
          <div class="justify-start items-start gap-2.5 flex">
            <div class="text-black text-[15px] font-bold font-['Inter']">{{$post->name}}</div>
          </div>
          <div class="text-[#161616] text-[15px] font-bold font-['Inter']">.</div>
          <div class="text-[#6e767d] text-[15px] font-light font-['Inter']">{{$post->created_at}}</div>
          
            <div class="w-[103px] h-[27px] left-[420px] top-[10px] absolute rounded-[5px] border ">
              <label for="is_prioritized" class="left-[13px] top-[1px] absolute text-black text-base font-bold font-['Inter'] items_center" >Ưu tiên</label>
              <input type="checkbox" class="w-[13px] h-[13px] left-[80px] top-[5px] absolute rounded text-black focus:ring-white" id="is_prioritized" name="is_prioritized" value='1'>
            </div>  
        </div>
      
      <div class="h-[333px]pt-2.5 left-[50px] top-[68px] absolute flex-col justify-start items-center gap-[34px] inline-flex overflow-hidden">
        <div class="self-stretch h-[628px] pt-2.5 flex-col justify-start items-center gap-[34px] flex overflow-y-auto">
          <div class="self-stretch justify-start items-center gap-[9px]">
            <div class="w-[500px]">
             <span class="text-black text-base font-bold font-['Inter']">TIÊU ĐỀ: </span>
              <span class="text-black text-base font-normal font-['Inter']">{{$post->title}}</span>
            </div>
            <div class="w-[491px]">
              <span class="text-black text-base font-bold font-['Inter']">Tội phạm: </span>
              <span class="text-black text-base font-normal font-['Inter']">{{$post->type_of_crime}}</span>
            </div>
            <div class="w-[500px]">
              <span class="text-black text-base font-bold font-['Inter']">Quận: </span>
              <span class="text-black text-base font-normal font-['Inter']">{{$post->district}}</span>
            </div>
            <div class="w-[500px]">
              <span class="text-black text-base font-bold font-['Inter']">Nội dung:</span>
              <span class="text-black text-base font-normal font-['Inter']">{{$post->content}}</span>
            </div>
          </div>
        </div>
      </div>
        @if($post->image)
         <img class="w-[500px] h-[375px] left-[50px] top-[401px] absolute" src="{{$post->image}}"/>
        @endif
      </form>
    </div>
    @endforeach
</x-admin-layout>