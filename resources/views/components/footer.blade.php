<footer class="text-white from-black via-gray-950 bg-gradient-to-r  to-gray-900 h-[80vh] mt-20 p-16">
    <div class="container flex flex-col justify-between h-full p-6 mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full p-4 md:w-1/2">
                <h2 class="mb-2 text-lg font-bold">About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="grid grid-cols-3 gap-5">
                <div class="w-full p-4">
                    <h2 class="mb-2 text-lg font-bold">Socials</h2>
                    <ul>
                        <li><a href="#" class="text-gray-400 hover:text-gray-200">Twitter</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gray-200">LinkedIn</a></li>
                        {{-- <li><a href="#" class="text-gray-400 hover:text-gray-200">Pinterest</a></li> --}}
                        <li><a href="#" class="text-gray-400 hover:text-gray-200">Facebook</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gray-200">Instagram</a></li>
                    </ul>
                </div>
                <div class="w-full p-4">
                    <h2 class="mb-2 text-lg font-bold">Quick Links</h2>
                    <ul>
                        <li><a wire:navigate href="{{ route('blog.index') }}" class="text-gray-400 hover:text-gray-200">Blog</a></li>
                        <li><a wire:navigate href="{{ route('about') }}" class="text-gray-400 hover:text-gray-200">About</a></li>
                        <li><a wire:navigate href="{{ route('welcome') }}" class="text-gray-400 hover:text-gray-200">Home</a></li>
                        <li><a wire:navigate href="{{ route('contact') }}" class="text-gray-400 hover:text-gray-200">Contact</a></li>
                        <li><a wire:navigate href="{{ route('newsletter') }}" class="text-gray-400 hover:text-gray-200">Newsletter</a></li>
                    </ul>
                </div>
                <div class="w-full p-4">
                    <h2 class="mb-2 text-lg font-bold">Legal</h2>
                    <ul>
                        <li><a href="#" class="text-gray-400 hover:text-gray-200">Terms</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gray-200">Cookies</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gray-200">Sitemap</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gray-200">Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gray-200">Contracts</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gray-200">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex justify-start w-full mt-auto">
            <h1 class="font-bold text-8xl">{{env('APP_NAME')}}</h1>
        </div>    
    </div>
</footer>