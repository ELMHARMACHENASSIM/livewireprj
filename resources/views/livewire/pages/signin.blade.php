<div class="w-[100%] h-[calc(100vh-80px)] bg-black flex">
    <div class=" w-[100%] h-[100%]  bg-black relative">
        <div class="w-[100%] h-[100%]  bg-black opacity-[0.4] absolute z-10 top-0 left-0"></div>
        <img src="{{ asset('images/bg.jpg') }}" alt="" srcset=""
            class="w-[100%] h-[100%] object-cover absolute">
        <div
            class="myContainer absolute z-[99] h-[100%] top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] flex justify-center items-center">
            <div class="w-[40%] h-[50%]  backdrop-blur-[10px] flex justify-center items-center">
                <h1 class="text-white poppins-bold text-[20px]">Signin</h1>
            </div>
            <div class="w-[40%] h-[50%] bg-white flex justify-center items-center ">
                <form action="" class="myContainer">
                    <div class="flex flex-col my-[20px] gap-[10px]">
                        <label for="">Email</label>
                        <input type="email" name="" id="" placeholder="email">
                    </div>
                    <div class="flex flex-col my-[20px] gap-[10px]">
                        <label for="">Password</label>
                        <input type="email" name="" id="" placeholder="password">
                    </div>
                    <div class="flex items-center gap-[10px] my-[20px]">
                        <input type="checkbox" name="" id="" placeholder="password">
                        <label for="">remember me</label>
                    </div>
                    <div class="flex justify-between items-center">
                        <button type="submit" class="bg-black text-white py-[10px]  px-[25px]">Signin</button>
                        <a href="#" class="flex underline">forget your password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
