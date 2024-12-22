<x-admin-layout>
    <x-slot:header>
        <div class="w-96 h-14 relative bg-gradient-to-b from-[#b21d1d] via-[#b42121] to-white rounded-2xl">
            <div class="w-96 h-px left-0 top-[52px] absolute bg-white"></div>
            <div class="left-[16px] top-[14px] absolute justify-start items-start gap-2.5 inline-flex">
                <div class="text-white text-xl font-bold font-['Inter']">Phân quyền</div>
            </div>
            <div class="w-8 h-8 left-[550px] top-[9px] absolute rounded-3xl">
                <div class="w-5 h-5 left-[7px] top-[7px] absolute"></div>
            </div>
        </div>
    </x-slot:header>
    <div class="w-[600px] h-[1238px] relative">
        <div class="w-[600px] left-0 top-[230px] absolute">
        @foreach ($listuser as $user)
            <div style="width: 600px; height: 72px; padding-top: 12px; padding-bottom: 12px; padding-left: 15px; border-bottom: 1px black solid; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                <div style="width: 48px; height: 48px; position: relative">
                    <img style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute" src="{{ asset('storage/default_user.png') }}"  />
                </div>
                <div style="width: 291px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 9px;">
                    <div style="justify-content: flex-start; align-items: center; gap: 7px;">
                        <div style="width: auto; height: 18px; position: relative">
                            <div style="left: 0px; top: 0px; position: absolute; color: black; font-size: 15px; font-family: Inter; font-weight: 700; word-wrap: break-word">{{ $user->name }}</div>
                        </div>
                    </div>
                </div>
                <div style="width: 191px; height: 33px; position: relative">
                    <div class="relative inline-block text-left">
                        <div>
                            <button type="button" class="dropdown-button inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button"  data-target="#dropdown-menu-{{ $user->id }}" aria-expanded="true" aria-haspopup="true">
                                Người dùng
                                <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div class="dropdown-menu absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none hidden " data-target="#dropdown-menu-{{ $user->id }}" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    
                                    <form method="post" action="{{ route('changeUserType',['user_id' => $user->id,'user_type'=>'admin' ] ) }}" role="none">
                                    @csrf
                                        <button type="submit" class="block w-full px-4 py-2 text-left text-sm font-semibold text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1">Quản trị</button>
                                    </form>
                                    <form method="post" action="{{ route('changeUserType', ['user_id' => $user->id,'user_type'=>'user' ] ) }}" role="none">
                                    @csrf 
                                        <button type="submit" class="block w-full px-4 py-2 text-left text-sm font-semibold text-gray-700" role="menuitem" tabindex="-1" id="menu-item-2">Người dùng</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach   
        </div>
        <div class="left-[27px] top-[173px] absolute text-black text-xl font-bold font-['Inter']">Danh sách người dùng</div>
        <div class="w-[500px] h-11 left-[53px] top-[86px] absolute">
            <div class="w-[440px] h-11 left-[60px] top-0 absolute rounded-[30px]">
                <input name="search" placeholder="Tìm kiếm" class="w-[440px] h-11 left-0 top-0 absolute bg-white rounded-[30px] border border-[#d9cfcf] text-[#292d32] text-base font-normal font-['Inter']"></input>
            </div>
            <div class="w-10 h-10 left-0 top-0 absolute">
                <x-search-button />
            </div>
        </div>
    </div>
</x-admin-layout>