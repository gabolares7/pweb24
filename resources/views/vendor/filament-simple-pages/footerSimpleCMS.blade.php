@aware(['page'])
<footer class="text-gray-600 bg-gray-200 body-font">
    <div class="container px-2 py-1 mx-auto flex items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap justify-between ">
        <div class="w-50 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
            <a href="https://ulpgc.es" class="flex title-font font-medium items-center justify-center text-gray-900"">
                <image src="/storage/{{ setting("site_logo") }}" fill="none" stroke="currentColor" stroke-linecap="round"
                       stroke-linejoin="round" stroke-width="2" class="w-20 h-20 text-white  rounded-full viewBox="0 0 24 24"" >
                </image>
            <span class=" text-xl ">{{setting('site_name')}}</span>
            </a>
            <p class=" text-gray-500"> Construyendo un simpleCMS</p>
        </div>
        <!-- Enlaces del footer -->
        <div class="flex justify-end pl-5 mb-5  mt-10  text-center">
            <div class=" w-full px-4">
                <a href="#"> <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">AVISO LEGAL</h2>
            </a>
            </div>
            <div class=" w-full px-4">
                <a href="#" > <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">SOBRE ESTA WEB</h2>
                </a>
            </div>
        </div>
    </div>
    <!-- Enlaces del pie del footer -->

        <div class="container bg-gray-100 mx-auto py-4 px-2 flex flex-wrap flex-col sm:flex-row items-center justify-between">
            <p class="text-gray-500 text-sm text-center sm:text-left ml-1">© 2024 Miguel Angel Quintana</p>
            <span class="inline-flex mt-2 sm:mt-0">
                <?php $vendorLink = collect(setting('site_social'))->firstWhere('vendor', 'facebook')['link'] ?? '#'; ?>
                <a class="text-gray-500" href="{{$vendorLink}}">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <?php $vendorLink = collect(setting('site_social'))->firstWhere('vendor', 'twiter')['link'] ?? '#'; ?>
                <a class="ml-3 text-gray-500" href="{{$vendorLink}}">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <?php $vendorLink = collect(setting('site_social'))->firstWhere('vendor', 'instagram')['link'] ?? '#'; ?>
                <a class="ml-3 text-gray-500" href="{{$vendorLink}}">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <?php $vendorLink = collect(setting('site_social'))->firstWhere('vendor', 'linkedin')['link'] ?? '#'; ?>
                <a class="ml-3 text-gray-500" href="{{$vendorLink}}">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
         </span>
        </div>

</footer>
