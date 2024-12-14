<x-guest-layout>
  <x-slot:header>
    <div class="w-[600px] h-[53px] left-[-0px] top-0 absolute bg-gradient-to-b from-[#b21d1d] via-[#b42121] to-white rounded-[20px]">
      <div class="w-[600px] h-px left-0 top-[52px] absolute bg-white"></div>
      <div class="left-[16px] top-[14px] absolute justify-start items-start gap-2.5 inline-flex">
        <div class="text-white text-xl font-bold font-['Inter']">Hồ sơ</div>
      </div>
      <div class="w-[34px] h-[34px] left-[550px] top-[9px] absolute rounded-[34px]">
        <div class="w-5 h-5 left-[7px] top-[7px] absolute"></div>
      </div>
    </div>
    </x-slot>
    <form action="{{ route('create_post') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow-lg w-full max-w-md">
      <div class="w-[482px] h-[632.01px] left-[44px] top-[112px] absolute">
        <div class="w-[221.55px] h-[22.28px] left-0 top-[79.40px] absolute text-[#161616] text-[17px] font-bold font-['Inter']">Thông tin tài khoản</div>
        <div class="w-[482px] h-[340.41px] left-0 top-0 absolute">
          <button type="submit" class="absolute top-4 right-4 bg-yellow-400 text-white px-4 py-2 rounded-full hover:bg-yellow-500 focus:outline-none">Lưu</button>
          <div>
            <label class="w-[175.71px] h-[19.10px] left-[62.65px] top-[119.72px] absolute text-[#161616] text-[15px] font-bold font-['Inter']">Tên người dùng </label>
            <input name="content" rows="2" placeholder="Chuyện gì đang xảy ra?" class="w-[381.99px] h-[31.83px] left-[44.31px] top-[153.67px] absolute bg-white rounded-[10px] border border-black"></input>
          </div>

          <div>
            <label class="w-[148.21px] h-[15.92px] left-[62.65px] top-[197.18px] absolute text-[#161616] text-[15px] font-bold font-['Inter']">Họ tên </label>
            <input name="content" rows="2" placeholder="Chuyện gì đang xảy ra?" class="w-[381.99px] h-[31.83px] left-[44.31px] top-[227.94px] absolute bg-white rounded-[10px] border border-black"></input>
          </div>

          <div>
            <label class="w-[61.12px] h-[19.10px] left-[62.65px] top-[274.63px] absolute text-[#161616] text-[15px] font-bold font-['Inter']">Họ tên </label>
            <input name="content" rows="2" placeholder="Chuyện gì đang xảy ra?" class="w-[381.99px] h-[31.83px] left-[44.31px] top-[308.58px] absolute bg-white rounded-[10px] border border-black"></input>
          </div>
        </div>

        <div class="w-[426.30px] h-[261.01px] left-[7px] top-[371px] absolute">
          <div class="w-[166.55px] h-[22.28px] left-0 top-0 absolute text-[#161616] text-[17px] font-bold font-['Inter']">Đổi mật khẩu </div>

          <div>
            <label class="w-[192.52px] h-[19.10px] left-[62.65px] top-[40.32px] absolute text-[#161616] text-[15px] font-bold font-['Inter']">Mật khẩu hiện tại</label>
            <input name="content" rows="2" placeholder="Chuyện gì đang xảy ra?" class="w-[381.99px] h-[31.83px] left-[44.31px] top-[74.27px] absolute bg-white rounded-[10px] border border-black"></input>
          </div>
          <div>
            <label class="w-[190.99px] h-[19.10px] left-[62.65px] top-[117.77px] absolute text-[#161616] text-[15px] font-bold font-['Inter']">Mật khẩu mới</label>
            <input name="content" rows="2" placeholder="Chuyện gì đang xảy ra?" class="w-[381.99px] h-[31.83px] left-[44.31px] top-[148.54px] absolute bg-white rounded-[10px] border border-black"></input>
          </div>
          <div>
            <label class="w-[261.28px] h-[19.10px] left-[62.65px] top-[195.22px] absolute text-[#161616] text-[15px] font-bold font-['Inter']">Xác nhận mật khẩu mới</label>
            <input name="content" rows="2" placeholder="Chuyện gì đang xảy ra?" class="w-[381.99px] h-[31.83px] left-[44.31px] top-[229.18px] absolute bg-white rounded-[10px] border border-black"></input>
          </div>
        </div>
      </div>
    </form>
</x-guest-layout>