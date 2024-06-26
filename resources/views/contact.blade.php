<x-guest-layout title="Contact Us">

   <!-- Contact Us Section -->
    <section class="relative bg-white text-white mt-20 md:mt-24">
         <!-- heading -->
         <h2 class="text-center text-16A4E1 text-4xl font-bold font-burbank2 hidden md:block md:mt-14">CONTACT US</h2>
        <!-- Images Container -->
        <div class="flex justify-center max-w-full">
            <!-- Boy Image -->
            <img src="{{asset('img/features/boy-with-phone.png')}}" alt="Boy Image" class="h-auto md:h-96 md:w-60 hidden -mt-10 ml-20 -mr-20 md:block">
        
            <!-- Dotted Image in the Center -->
            <img src="{{asset('img/shapes/wave-dot.png')}}" alt="Dotted Image" class="h-auto md:h-40 ml-10 mb-40 hidden md:block md:mt-10 ">
        
            <!-- Girl Image -->
            <img src="{{asset('img/features/girl-with-phone.png')}}" alt="Girl Image" class="h-auto md:h-100 md:w-60 mr-32 hidden -mt-10 md:block">
        </div>

        <!--For mobile -->
        <div class="flex justify-start md:hidden">
            <div class="w-[55%] -ml-11">
                <!-- Boy Image -->
                <img src="{{asset('img/features/boy-with-phone.png')}}" alt="Boy Image" class="h-96 w-auto">
            </div>
            <div class="mt-16 w-[48%] mr-2">
                <h2 class="text-left text-16A4E1 text-4xl font-bold font-burbank2">CONTACT US</h2>
                <p class="font-arlon text-left text-black text-base">For enquires, complaints and special requests, please fill the contact form below and send a message. We are always ready to assist you.</p>
            </div>
        </div>
        
        

            <!-- Blue Background Flexed Div -->
            <div class="relative bg-16A4E1 w-full p-8 flex flex-col items-center justify-center space-y-4 -mt-24 md:-mt-[170px] md:z-20">
                <!-- Text Section -->
                <div class="text-left">
                    <h2 class="text-4xl font-bold font-burbank2">Get in Touch</h2>
                
                    <form class="w-full text-xl font-burbank2 font-bold"  method="POST" action="">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <input required type="text" placeholder="Name" name="name" class="placeholder-white appearance-none block w-full bg-transparent text-white border-2 border-white py-3 px-4 mb-3 leading-tight focus:outline-none ">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <input required type="email" placeholder="Email" name="email" class="placeholder-white appearance-none block w-full bg-transparent text-white border-2 border-white py-3 px-4 mb-3 leading-tight focus:outline-none ">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                            <input required type="text" placeholder="Subject" name="subject" class="placeholder-white appearance-none block w-full bg-transparent text-white border-2 border-white py-3 px-4 mb-3 leading-tight focus:outline-none">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                            <textarea required id="message" name="message" class="placeholder-white appearance-none block w-full bg-transparent text-white border-2 border-white py-3 px-4 mb-3  focus:outline-none" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <button type="submit" class="bg-white text-16A4E1 py-1 px-3 transform skew-y-10 flex items-center border-solid border-16A4E1 border-4">
                                Send Message
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ml-2 transform -skew-y-10 h-6 w-6 fill-current">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"/>
                                        <path d="M3 13h6v-2H3V1.846a.5.5 0 0 1 .741-.438l18.462 10.154a.5.5 0 0 1 0 .876L3.741 22.592A.5.5 0 0 1 3 22.154V13z"/>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="flex items-center justify-center mb-16 px-10">
                <div class="border-4 border-black p-2 max-w-sm flex items-center mt-16">
                    <!-- Image -->
                    <img src="{{ asset('img/redesign/blue-envelope.png') }}" alt="Your Image" class="w-1/3 h-auto mr-4">
            
                    <!-- Text -->
                    <div>
                        <h2 class="text-2xl font-bold text-black font-burbank2">Contact Mail</h2>
                        <p class="text-sm text-black font-arlon">helpdesk@forislabs.com</p>
                    </div>
                </div>
            </div>
            
            
    </section>
  

    
<script>
    // In your contact page JavaScript file or script tag
document.addEventListener('DOMContentLoaded', function() {
    // Wait for the DOM content to be loaded
    
    // Remove the md:bg-transparent class from elements with the nav-bar class
    var elements = document.querySelectorAll('.nav-bar.md\\:bg-transparent');
    elements.forEach(function(element) {
        element.classList.remove('md:bg-transparent');
    });
});
</script>        
</x-guest-layout>
