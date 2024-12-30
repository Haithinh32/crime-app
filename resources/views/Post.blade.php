<x-guest-layout>
    <x-slot:header>
        <div class="w-[599px] h-[53px] relative bg-gradient-to-b from-[#b21c1c] via-[#b32121] to-white rounded-[20px]">
            <div class="w-[599px] h-px left-0 top-[52px] absolute bg-white"></div>
            <div class="left-[16px] top-[14px] absolute justify-start items-start gap-2.5 inline-flex">
                <div class="text-[#f5faff] text-xl font-bold font-['Inter']">Bài đăng</div>
            </div>
            <div class="w-[34px] h-[34px] left-[549px] top-[9px] absolute rounded-[34px]">
                <div class="w-5 h-5 left-[7px] top-[7px] absolute"></div>
            </div>
        </div>
    </x-slot:header>
    <form action="{{ route('create_post', ['user_id' => Auth::id()]) }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="w-[475px] h-[717px] left-[60px] absolute">
            <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
        
            @if(Auth::user()->usertype == 'admin')
            <div class="w-[103px] h-[27px] left-[370px] top-[94px] absolute rounded-[5px] border ">
              <label for="is_prioritized" class="left-[13px] top-[1px] absolute text-black text-base font-bold font-['Inter'] items_center" >Ưu tiên</label>
              <input type="checkbox" class="w-[13px] h-[13px] left-[80px] top-[5px] absolute rounded text-black focus:ring-white" id="is_prioritized" name="is_prioritized" value='1'>
            </div>  
            @endif

            <div class="w-[381.99px] h-[65.78px] left-[37.01px] top-[119.72px] absolute">
                <label class="w-[175.71px] h-[19.10px] left-[18.34px] top-0 absolute text-[#161616] text-[15px] font-bold font-['Inter']">Tiêu đề</label>
                <input type="text" name="title" id="title" placeholder="Nhập vào đây" class="form-control w-[381.99px] h-[31.83px] left-0 top-[33.95px] absolute bg-white rounded-[10px] border border-black"required focus>
            </div>

            <div class="w-[381.99px] h-[62.65px] left-[37px] top-[197.18px] absolute">
                <label class="w-[148.21px] h-[15.92px] left-[18.35px] top-0 absolute text-[#161616] text-[15px] font-bold font-['Inter']">Loại tội phạm</label>
                <input type="text" name="type_of_crime" id="type_of_crime" placeholder="Nhập vào đây" class="form-control w-[381.99px] h-[31.83px] left-0 top-[30.82px] absolute bg-white rounded-[10px] border border-black"required focus>
            </div>

            <div class="w-[210px] h-[80px] left-[40px] top-[272px] absolute  overflow-hidden">
                <div class="w-[148.21px] h-[15.92px] left-[18.35px] top-0 absolute text-[#161616] text-[15px] font-bold font-['Inter']">Khu vực</div>
                <div class="w-[210px] h-[40px] left-0 top-[33px] absolute">
                    <div class="form-group row"> 
                            <select class="form-control rounded-xl w-[200px] h-[40px] border-black text-[15px] font-['Inter'] justify-center items-center gap-[50px] inline-flex" id="region" name="region" required focus>
                                    <option value="" disable selected>Chọn khu vực</option>
                                    <option class="text-[15px] font-['Inter']" value="Ba Đình">Ba Đình</option>
                                    <option value="Bắc Từ Liêm">Bắc Từ Liêm</option>
                                    <option value="Cầu Giấy">Cầu Giấy</option>
                                    <option value="Đống Đa">Đống Đa</option>
                                    <option value="Hà Đông">Hà Đông</option>
                                    <option value="Hoàn Kiếm">Hoàn Kiếm</option>
                                    <option value="Long Biên">Long Biên</option>
                                    <option value="Hoàng Mai">Hoàng Mai</option>
                                    <option value="Nam Từ Liêm">Nam Từ Liêm</option>
                                    <option value="Tây Hồ">Tây Hồ</option>
                                    <option value="Thanh Xuân">Thanh Xuân</option>
                            </select>
                    </div>
                </div>
            </div> 

           <div class="w-[382px] h-[200px] left-[36.70px] top-[350px] absolute">
                <label class="w-[119px] h-[19px] left-[19px] top-0 absolute text-[#161616] text-[15px] font-bold font-['Inter']">Nội dung</label>
                <input type="textfield" name="content" id="content" placeholder="Nhập vào đây" class="form-control w-[382px] h-[166px] left-0 top-[34px] absolute bg-white rounded-[10px] border border-black" required focus>
            </div>

            <div class="w-[381.99px] h-[31.83px] left-[37px] top-[560px] absolute">
                <div class="w-[381.99px] h-[31.83px] left-0 top-0 absolute bg-white rounded-[10px] border border-black"></div>
                <button type="submit" class="w-[121px] h-6 left-[228px] top-[4px] absolute">
                    <div class="w-[121px] h-6 left-0 top-0 absolute bg-[#d9d9d9] rounded-[30px]"></div>
                    <div class="left-[28px] top-[3px] absolute text-[#161616] text-sm font-bold font-['Inter']">Đăng bài</div>
                </button>
                <div class="relative">
                    <input type="file" name="image" id="image "class=" form-control w-5 h-5 left-[9px] top-[6px] absolute opacity-0 cursor-pointer z-10">
                    <img src="{{ asset('image\SystemImg\Gallery.jpg') }}" class="w-5 h-5 left-[9px] top-[6px] absolute " alt="Gallery Icon">
                </div>
                <div class="relative">
                    <input type="file" name="video" id="video" class=" form-control w-5 h-5 left-[43px] top-[6px] absolute opacity-0 cursor-pointer z-10">
                    <img src="{{ asset('image\SystemImg\Video Add.jpg') }}" class="w-5 h-5 left-[43px] top-[6px] absolute" alt="Gallery Icon">
                </div>
            </div>

        </div> 
    </form>
</x-guest-layout>