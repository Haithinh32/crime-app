<div class="w-[276px] h-auto relative">
  <div class="w-[276px] h-auto left-0 top-0 absolute">
    <div class="w-[276px] h-auto left-0 top-0 absolute bg-gradient-to-t from-[#f9b115] via-[#d15519] to-red-700">
      <div class="left-[12px] top-[4px] absolute flex-col justify-start items-start gap-2 inline-flex">
        <div class="w-[50px] h-[50px] relative rounded-[50px]"></div>
        <div class="w-[251px] h-[50px] relative bg-white rounded-[50px] border border-black">
          <div class="w-6 h-6 left-[13px] top-[13px] absolute"></div>
          <div class="left-[57px] top-[13px] absolute text-[#161616] text-[19px] font-bold font-['Inter']">Trang chủ</div>
        </div>
      </div>
    </div>
    <div class="w-10 h-10 left-[12px] top-[900px] absolute"></div>
    <a href="{{ route('profile') }}" class="w-[276px] h-auto left-0 top-[900px] absolute">
      <div class="w-[122px] h-[37px] left-[64px] top-[14px] absolute">
        <div class="left-0 top-0 absolute justify-start items-start gap-0.5 inline-flex">
          <div class="text-[#161616] text-[15px] font-bold font-['Inter']">{{ Auth::user()->name }}</div>
        </div>
        <div class="left-0 top-[19px] absolute justify-start items-start gap-2.5 inline-flex">
          <div class="text-[#6e767d] text-[15px] font-bold font-['Inter']">{{ Auth::user()->full_name }}</div>
        </div>
      </div>
    </a>
    <img class="w-[50px] h-[46.30px] left-[6px] top-[4px] absolute" src="{{asset('storage/logo.png')}}" />
    <div class="w-[205px] h-auto left-[35px] top-[516px] absolute">
      <div class="w-[205px] h-[48.64px] left-0 top-0 absolute bg-white rounded-[26.06px] border border-black"></div>
      <div class="w-[144.19px] h-[26.93px] left-[33.01px] top-[11.29px] absolute text-center text-[#161616] text-xl font-bold font-['Inter']">Tạo bài đăng</div>
    </div>
  </div>
  <div class="w-[251px] h-auto left-[12px] top-[70px] absolute">
    <div class="w-[251px] h-[50px] left-0 top-[54px] absolute bg-white rounded-[50px] border border-black">
      <div class="left-[57px] top-[13px] absolute text-[#161616] text-[19px] font-bold font-['Inter']">Kiểm duyệt bài</div>
    </div>
    <div class="w-[251px] h-[50px] left-0 top-[117px] absolute bg-white rounded-[50px] border border-black">
      <div class="left-[57px] top-[13px] absolute text-[#161616] text-[19px] font-bold font-['Inter']">Kiểm duyệt hồ sơ</div>
    </div>
    <div class="w-[251px] h-[50px] left-0 top-[181px] absolute bg-white rounded-[50px] border border-black">
      <div class="left-[57px] top-[13px] absolute text-[#161616] text-[19px] font-bold font-['Inter']">Phân quyền</div>
    </div>
    <div class="w-[31px] h-[31px] left-[13px] top-[190px] absolute"></div>
    <div class="w-6 h-6 left-[13px] top-0 absolute"></div>
    <div class="w-6 h-6 left-[13px] top-[67px] absolute"></div>
    <div class="w-6 h-6 left-[13px] top-[129px] absolute"></div>
  </div>
</div>