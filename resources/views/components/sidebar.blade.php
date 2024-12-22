<div class="w-[276px] h-[1080px] relative">
  <div class="w-[276px] h-[1080px] left-0 top-0 absolute bg-gradient-to-t from-[#f9b115] via-[#d15519] to-red-700">
    <div class="w-[251px] h-[114.64px] left-[12px] top-[63px] absolute">
      <a href="{{ route('homepage') }}" class="w-[251px] h-[50px] left-0 top-0 absolute bg-white rounded-[50px] border border-black  overflow-hidden">
        <div class="left-[57px] top-[14px] absolute text-[#161616] text-[19px] font-bold font-['Inter']">Trang chủ</div>
        <img class="w-6 h-6 left-[13px] top-[13px] absolute" src = "{{asset('storage/homebutton.png')}}"/>
      </a>
      <a href="{{ route('post') }}" class="w-[251px] h-[48.64px] left-0 top-[66px] absolute">
        <div class="w-[251px] h-[50px] left-0 top-0 absolute bg-white rounded-[26.06px] border border-black"></div>
        <div class="w-[144.19px] h-[26.93px] left-[57px] top-[14px] absolute text-[#161616] text-xl font-bold font-['Inter']">Tạo bài đăng</div>
        <img class="w-6 h-6 left-[13px] top-[13px] absolute" src = "{{asset('storage/create_post_button.png')}}"/>
      </a>
    </div>
  </div>

  <a href="{{ route('profile') }}" class="w-[276px] h-auto left-0 top-[800px] absolute">
      <div class="w-[122px] h-[37px] left-[64px] top-[14px] absolute">
        <div class="left-0 top-0 absolute justify-start items-start gap-0.5 inline-flex">
          <div class="text-[#161616] text-[15px] font-bold font-['Inter']">{{ Auth::user()->name }}</div>
        </div>
        <div class="left-0 top-[19px] absolute justify-start items-start gap-2.5 inline-flex">
          <div class="text-[#6e767d] text-[15px] font-bold font-['Inter']">{{ Auth::user()->fullname }}</div>
        </div>
      </div>
      <img class="w-10 h-10 left-[12px] top-[10px] absolute  overflow-hidden" src = "{{asset('storage/default_user.png')}}"/>
  </a>
  <img class="w-[50px] h-[46.30px] left-[6px] top-[4px] absolute" src="{{asset('image\SystemImg\logo.png')}}" />
</div>
