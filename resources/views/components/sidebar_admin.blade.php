
<div class="w-[276px] h-[1080px] absolute bg-gradient-to-t from-[#f9b115] via-[#d15519] to-red-700">
      <img class="w-[50px] h-[46.30px] left-[6px] top-[4px] absolute" src="{{asset('storage/logo.png')}}" />
      <div class="w-[251px] h-[312.64px] left-[12px] top-[63px] absolute">
        <a href = "{{route('post')}}" class="w-[251px] h-[48.64px] left-0 top-[264px] absolute">
          <div class="w-[251px] h-[50px] left-0 top-0 absolute bg-white rounded-[26.06px] border border-black"></div>
          <div class="w-[144.19px] h-[26.93px] left-[57px] top-[14px] absolute text-[#161616] text-xl font-bold font-['Inter']">Tạo bài đăng</div>
          <img class="w-6 h-6 left-[13px] top-[13px] absolute" src = "{{asset('storage/create_post_button.png')}}"/>
        </a>
        <a href = "{{route('index_admin')}}" class="w-[251px] h-[50px] left-0 top-[198px] absolute bg-white rounded-[50px] border border-black  overflow-hidden">
          <div class="left-[57px] top-[14px] absolute text-[#161616] text-[19px] font-bold font-['Inter']">Phân quyền</div>
          <img class="w-[31px] h-[31px] left-[15px] top-[10px] absolute" src = "{{asset('storage/authorize_user_button.png')}}"/>
        </a>
        <div class="w-[251px] h-[50px] left-0 top-[132px] absolute bg-white rounded-[50px] border border-black  overflow-hidden">
          <div class="left-[57px] top-[14px] absolute text-[#161616] text-[19px] font-bold font-['Inter']">Kiểm duyệt hồ sơ</div>
          <img class="w-6 h-6 left-[13px] top-[13px] absolute" src = "{{asset('storage/censor_profile_button.png')}}"/>
        </div>
        <a href = "{{route('index_censor')}}" class="w-[251px] h-[50px] left-0 top-[66px] absolute bg-white rounded-[50px] border border-black  overflow-hidden">
          <div class="left-[57px] top-[14px] absolute text-[#161616] text-[19px] font-bold font-['Inter']">Kiểm duyệt bài </div>
          <img class="w-6 h-6 left-[13px] top-[13px] absolute" src = "{{asset('storage/censor_post_button.png')}}"/>
        </a>
        <a href="{{route('homepage')}}" class="w-[251px] h-[50px] left-0 top-0 absolute bg-white rounded-[50px] border border-black  overflow-hidden">
          <div class="left-[57px] top-[14px] absolute text-[#161616] text-[19px] font-bold font-['Inter']">Trang chủ</div>
          <img class="w-6 h-6 left-[13px] top-[13px] absolute" src = "{{asset('storage/homebutton.png')}}"/>
        </a>
      </div>
      
      <a href="{{ route('profile') }}" class="w-[276px] h-auto left-0 top-[800px] absolute">
        <div class="w-[122px] h-[37px] left-[64px] top-[14px] absolute">
          <div class="left-0 top-0 absolute justify-start items-start gap-0.5 inline-flex">
            <div class="text-[#161616] text-[15px] font-bold font-['Inter']">{{ Auth::user()->name }}</div>
          </div>
          <div class="left-0 top-[19px] absolute justify-start items-start gap-2.5 inline-flex">
            <div class="text-[#6e767d] text-[15px] font-bold font-['Inter']">{{ Auth::user()->full_name }}</div>
          </div>
        </div>
        <img class="w-10 h-10 left-[12px] top-[10px] absolute  overflow-hidden" src = "{{asset('storage/default_user.png')}}"/>
      </a>
  </div>