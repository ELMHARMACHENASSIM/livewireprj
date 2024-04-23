<div>
    <section class="w-[100%] h-[70vh] ">
        <div class="w-[100%] h-[100%]">
            <div class="w-[100%] h-[100%] relative">
                <div class="absolute w-[100%] h-[100%] top-[0] left-[0] z-[1] bg-[#0000007a]"></div>
                <img src="{{ asset('images/immo.jpg') }}" alt="" srcset=""
                    class="absolute top-[0] left-[0] w-[100%] h-[100%] object-cover z-[-1]">
                <div class="absolute w-[100%] h-[100%] top-[0] left-[0]  z-[3] ">
                    <div class=" myContainer h-[100%] flex justify-between items-center gap-[10px]">
                        <div
                            class="w-[100%]  flex justify-center items-center flex-col gap-[15px]  p-[10px] text-center">
                            <h1 class="text-white text-[35px] poppins-semibold">Find Your Dream Home with <span
                                    class="text-[40px]">IMMO</span></h1>
                            <p class="text-white text-[20px] w-[50%]">Welcome to IMMO. With our expert local knowledge
                                and
                                personalized
                                service, we
                                make finding your dream home easy and enjoyable. Start your search with us today.</p>
                            <div
                                class="w-[auto] flex justify-center items-start flex-col gap-[25px] bg-white  p-[20px]">

                                <form action="" class="w-[100%] h-[40px] flex  items-center  gap-[15px]">
                                    <input type="text" name="firstname" id="firstname" placeholder="Search"
                                        class="h-[100%]">
                                    <select name="" id="" class="h-[100%]">
                                        <option value="" disabled selected>City</option>
                                        <option value="">Casablanca</option>
                                        <option value="">Rabat</option>
                                        <option value="">Tanger</option>
                                    </select>
                                    <select name="" id="" class="h-[100%]">
                                        <option value="" disabled selected>Type of immo</option>
                                        <option value="">Dar</option>
                                        <option value="">Partma</option>
                                        <option value="">Villa</option>
                                        <option value="">Firma</option>
                                    </select>
                                    <div class="flex items-center gap-[10px] h-[100%]">
                                        <span>price : </span>
                                        <input type="number" name="firstname" id="firstname" placeholder="min"
                                            class="h-[100%] w-[100px]"> - <input type="number" name="firstname"
                                            id="firstname" placeholder="max" class="h-[100%] w-[100px]">

                                    </div>
                                    <div class="h-[100%] ">
                                        <button class="bg-[black] h-[100%] w-[50px]"><i
                                                class="fa-solid fa-magnifying-glass text-white"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="my-[50px] w-[100%] h-[100vh]">
        <div class="myContainer flex justify-center items-start gap-[20px]">
            <div class="myContainer w-[20%] bg-[#f1f0f0] ">
                <form action="" class=" h-[100%] flex  flex-col gap-[25px] my-[30px]">
                    <h1>category</h1>
                    <div class="bg-white flex justify-between items-center h-[40px] w-[100%] relative">
                        <input type="text" placeholder="Location" class="border-none h-[100%] w-[100%] p-[5x] ">
                        <span class="absolute  right-[10px] h-[100%]  flex justify-center items-center"><i
                                class="fa-solid fa-location-crosshairs cursor-pointer"></i></span>
                    </div>
                    <div class="flex flex-col gap-[15px]">
                        <span>Range: <span id="rangeValue">m&#178;</span></span>
                        <input type="range" name="rangeInput" id="rangeInput" min="30" max="800"
                            step="10" oninput="updateRangeValue(this.value)">
                        <script>
                            window.onload = function() {
                                // Set the initial value of the range input
                                document.getElementById("rangeInput").value = 30;
                                // Update the range value display
                                updateRangeValue(30);
                            }

                            function updateRangeValue(value) {
                                document.getElementById("rangeValue").innerText = value + " m²";
                            }
                        </script>
                    </div>
                    <select name="" id="" class="h-[100%] w-[100%]">
                        <option value="" disabled selected>All Statut</option>
                        <option value="">Casablanca</option>
                        <option value="">Rabat</option>
                        <option value="">Tanger</option>
                    </select>
                    <select name="" id="" class="h-[100%] w-[100%]">
                        <option value="" disabled selected>Rooms</option>
                        <option value="">Casablanca</option>
                        <option value="">Rabat</option>
                        <option value="">Tanger</option>
                    </select>
                    <select name="" id="" class="h-[100%] w-[100%]">
                        <option value="" disabled selected>type of home</option>
                        <option value="">Casablanca</option>
                        <option value="">Rabat</option>
                        <option value="">Tanger</option>
                    </select>
                    <select name="" id="" class="h-[100%] w-[100%]">
                        <option value="" disabled selected>beds</option>
                        <option value="">Casablanca</option>
                        <option value="">Rabat</option>
                        <option value="">Tanger</option>
                    </select>
                    <select name="" id="" class="h-[100%] w-[100%]">
                        <option value="" disabled selected>Garage</option>
                        <option value="">Casablanca</option>
                        <option value="">Rabat</option>
                        <option value="">Tanger</option>
                    </select>
                    <div class="flex items-center gap-[10px]">
                        <input type="checkbox" name="" id="" class="text-black focus:hidden">
                        <span>lorem ipsum</span>
                    </div>
                    <div class="flex items-center gap-[10px]">
                        <input type="checkbox" name="" id="" class="text-black focus:hidden">
                        <span>lorem ipsum</span>
                    </div>
                    <div class="flex items-center gap-[10px]">
                        <input type="checkbox" name="" id="" class="text-black focus:hidden">
                        <span>lorem ipsum</span>
                    </div>
                    <div class="flex  items-center gap-[20px]">
                        <button class="bg-black text-white w-[60%] p-[10px]">Apply</button>
                        <span class="underline cursor-pointer">Reset</span>

                    </div>
                </form>

            </div>
            <div class="w-[80%]">
                <div class="grid grid-cols-3 gap-[20px] ">
                    <div id="indicators-carousel" class="relative w-[100%] h-[250px]" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[100%] overflow-hidden  ">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item="active">
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/imghome.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                      
                    </div>
                    <div id="indicators-carousel" class="relative w-[100%] h-[250px]" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[100%] overflow-hidden  ">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item="active">
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/imghome.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                      
                    </div>
                    <div id="indicators-carousel" class="relative w-[100%] h-[250px]" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[100%] overflow-hidden  ">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item="active">
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/imghome.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                      
                    </div>
                    <div id="indicators-carousel" class="relative w-[100%] h-[250px]" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[100%] overflow-hidden  ">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item="active">
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/imghome.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                      
                    </div>
                    <div id="indicators-carousel" class="relative w-[100%] h-[250px]" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[100%] overflow-hidden  ">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item="active">
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/imghome.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                      
                    </div>
                    <div id="indicators-carousel" class="relative w-[100%] h-[250px]" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[100%] overflow-hidden  ">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item="active">
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/imghome.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                      
                    </div>
                    <div id="indicators-carousel" class="relative w-[100%] h-[250px]" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[100%] overflow-hidden  ">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item="active">
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/imghome.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                      
                    </div>
                    <div id="indicators-carousel" class="relative w-[100%] h-[250px]" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[100%] overflow-hidden  ">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item="active">
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/imghome.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out h-[100%]" data-carousel-item>
                                <img src="{{ asset('images/bg.jpg') }}"
                                    class="absolute block w-[100%] h-[100%] object-cover  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
