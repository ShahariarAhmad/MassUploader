<!doctype html>
<html>
{{-- this --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
   <!-- ====== Navbar Section Start -->

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">MassUploader</span>
            </a>
     
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul
                    class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{route('home')}}" 
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{route('show')}}"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Upload CSV</a>
                    </li>
                    <li>
                        <a href="{{route('table')}}"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Records</a>
                    </li>
          
                </ul>
            </div>
        </div>
    </nav>

    <!-- ====== Navbar Section End -->


    <!-- ====== Hero Section Start -->
<div class="relative pt-[120px] lg:pt-[150px] pb-[110px] bg-white">
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="hero-content">
                    <h1
                        class="
                    text-dark
                    font-bold
                    text-4xl
                    sm:text-[42px]
                    lg:text-[40px]
                    xl:text-[42px]
                    leading-snug
                    mb-3
                  ">
                        Job & Job Batching <br />
                      
                    </h1>
                    <ul class="text-base mb-12 text-body-color w-3/4">
                      <li>1.    Run composer & npm update command.</li>
                      <li>2.    Run <strong>'php artisan queue:work'</strong>  command to start batch processing.</li>
                      <li>3.    Upload CSV file from <a href="{{ route('show') }}" class="text-yellow-600 text-bold underline">Upload CSV</a> page.</li>
                      <li>4.    A CSV file already exists in /public directory. Use it for testing.</li>
                    </ul>


                  <p> <strong>Note:</strong> </p>  
                    <ul class="text-base mb-8 text-body-color w-3/4">
                        <li>#    Restart <strong> "php artisan queue:work" </strong> before every test. No automation is implemented.</li>
                        <li>#    Run <strong> "php artisan migrate:fresh"</strong>  after a failed batch job.</li>
                   </ul>
              

                </div>
            </div>


        </div>
    </div>
</div>
<!-- ====== Hero Section End -->
@yield('section')


</body>

</html>