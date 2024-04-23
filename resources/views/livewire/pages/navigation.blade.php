<header class="h-[60px] w-[100%] flex justify-center items-center fixed top-[20px] left-0 z-[999] drop-shadow-xl" >
    <div class="myContainer flex justify-between items-center h-[100%] bg-white ">
        <div class="flex gap-[50px]">
               <div class="logo h-[100%] flex justify-center items-center">
            <h1 class="text-[20px] poppins-black">immo</h1>
        </div>
        <ul class="flex gap-[20px] h-[100%] justify-center items-center">
            <li class="py-[5px] px-[10px]"><a href="/" wire:navigate>Home</a></li>

            <li class="py-[5px] px-[10px]"><a href="/dashboard" wire:navigate>Dashboard</a></li>
            <li class="py-[5px] px-[10px]"><a href="/">Users</a></li>
            <li class="py-[5px] px-[10px]"><a href="/chat" wire:navigate>Chat</a></li>
            <li class="py-[5px] px-[10px]"><a href="/calendar" wire:navigate>Calendar</a></li>
            <li class="py-[5px] px-[10px]"><a href="/contact" wire:navigate>Contacts</a></li>
            <li class="py-[5px] px-[10px]"><a href="/parcours" wire:navigate>Parcours</a></li>
        </ul>
        </div>
     @auth
     <div x-data="{open:false}" class="relative w-[65px] h-[100%] flex justify-center items-center"
     id="userOpen">
     <div x-on:click='open = !open' class="cursor-pointer border-[1px] w-[100%]  border-black  py-[10px] px-[10px] flex justify-between"
     id="userOpen">
          <i class="fa-regular fa-user"></i>
     <i class="fa-solid fa-bars"></i>
     </div>
    
     <ul x-show.important='open' class=" shadow-sm  absolute right-[0] z-[999] top-[100%] w-[200px] flex flex-col gap-[10px] bg-white"
         id="userMenu">
         <li class="w-[100%] p-[10px]"><a href="/signup" wire:navigate></a></li>
         <li class="w-[100%] p-[10px]"><a href="/signin" wire:navigate></a></li>
         <hr>
         <li class="w-[100%] p-[10px]"><a href="" wire:navigate></a></li>
         <li class="w-[100%] p-[10px]"><a href="" wire:navigate></a></li>
      
     </ul>
 </div>
     @endauth
        <div x-data="{open:false}" class="relative w-[65px] h-[100%] flex justify-center items-center"
            id="userOpen">
            <div x-on:click='open = !open' class="cursor-pointer border-[1px] w-[100%]  border-black  py-[10px] px-[10px] flex justify-between"
            id="userOpen">
                 <i class="fa-regular fa-user"></i>
            <i class="fa-solid fa-bars"></i>
            </div>
           
            <ul x-show.important='open' class=" shadow-sm  absolute right-[0] z-[999] top-[100%] w-[200px] flex flex-col gap-[10px] bg-white"
                id="userMenu">
                <li class="w-[100%] p-[10px]"><a href="/signup" wire:navigate>Signup</a></li>
                <li class="w-[100%] p-[10px]"><a href="/signin" wire:navigate>Signin</a></li>
                <hr>
                <li class="w-[100%] p-[10px]"><a href="" wire:navigate>Help Center</a></li>
                <li class="w-[100%] p-[10px]"><a href="" wire:navigate>About</a></li>
             
            </ul>
        </div>
    </div>

</header>
