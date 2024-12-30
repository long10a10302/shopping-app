@extends('layouts.app')

@section('title', 'Đăng nhập')

@section('content')
<section class="section-breadcrumb mb-[50px] max-[1199px]:mb-[35px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">Register</h2>
                    </div>
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                            <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="index.html" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                            <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                            <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Register -->
<section class="section-register py-[50px] max-[1199px]:py-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full">
                <div class="bb-register border-[1px] border-solid p-[30px] rounded-[20px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="flex flex-wrap">
                        <div class="w-full px-[12px]">
                            <div class="section-title mb-[20px] pb-[20px] z-[5] relative flex flex-col items-center text-center max-[991px]:pb-[0]">
                                <div class="section-detail max-[991px]:mb-[12px]">
                                    <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Register</h2>
                                    <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Best place to buy and sell digital products</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-[12px]">
                            <form method="post" class="flex flex-col mx-[-12px]" action="{{route('user.signup')}}">
                                @csrf
                                <!-- Username Field -->
                               
                                <!-- Name Field -->
                                <div class="bb-register-wrap w-full px-[12px] mb-[24px]">
                                    <label class="inline-block mb-[6px] text-[14px] leading-[18px] font-medium text-[#3d4750]">Name*</label>
                                    <input type="text" name="name" placeholder="Enter your full name" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" >
                                    @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Email Field -->
                                <div class="bb-register-wrap w-full px-[12px] mb-[24px]">
                                    <label class="inline-block mb-[6px] text-[14px] leading-[18px] font-medium text-[#3d4750]">Email*</label>
                                    <input type="email" name="email" placeholder="Enter your email" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" >
                                    @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Phone Field -->
                                <div class="bb-register-wrap w-full px-[12px] mb-[24px]">
                                    <label class="inline-block mb-[6px] text-[14px] leading-[18px] font-medium text-[#3d4750]">Phone Number*</label>
                                    <input type="text" name="phone_number" placeholder="Enter your phone number" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" >
                                    @error('phone_number')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Address Field -->
                                <div class="bb-register-wrap w-full px-[12px] mb-[24px]">
                                    <label class="inline-block mb-[6px] text-[14px] leading-[18px] font-medium text-[#3d4750]">Address*</label>
                                    <input type="text" name="address" placeholder="Enter your address" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" >
                                    @error('address')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Password Field -->
                                <div class="bb-register-wrap w-full px-[12px] mb-[24px]">
                                    <label class="inline-block mb-[6px] text-[14px] leading-[18px] font-medium text-[#3d4750]">Password*</label>
                                    <input type="password" name="password" placeholder="Enter your password" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" >
                                    @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="bb-register-wrap w-full px-[12px] mb-[24px]">
                                    <label class="inline-block mb-[6px] text-[14px] leading-[18px] font-medium text-[#3d4750]">Confirm Password*</label>
                                    <input type="password" name="password_confirmation" placeholder="Confirm your password" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" >
                                    @error('password_confirmation')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="bb-register-button w-full flex justify-center">
                                    <button type="submit" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[20px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">Register</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/aos.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/smoothscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-range-ui.min.js') }}"></script>


<!-- main-js -->
<script src="{{asset('assets/js/main.js')}}"></script>
@endsection