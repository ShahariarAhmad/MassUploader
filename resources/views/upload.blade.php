@extends('layout')

@section('section')
    <!-- ====== Contact Section Start -->
    <section class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10">
        <div class="container mx-auto">
            <div class="flex flex-wrap lg:justify-between -mx-4">
                <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
                    <div class="max-w-[570px] mb-12 lg:mb-0">

                        <h2
                            class="
                   text-dark
                   mb-6
                   uppercase
                   font-bold
                   text-[32px]
                   sm:text-[40px]
                   lg:text-[36px]
                   xl:text-[40px]
                   ">
                   Upload the File from here... 
                </h2>
                <p class="text-base text-body-color leading-relaxed mb-9">
                    <strong> The progress bar will appear above the Upload Button after a few moments. </strong> How long it will take to appear always depends on your computer CPU. <br> <br>
                    The progress bar won't disappear if you don't empty the "job batches" table.
                    <br>
                    <br>
                    Note: This is just a dummy project.
                </p>

                    </div>
                </div>



                <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                    <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg" style="border-top: 8px solid blueviolet">

                        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <div class="flex justify-center items-center w-full">
                                    <label for="dropzone-file"
                                        class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                </path>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                                800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" name="file" class="hidden">
                                    </label>
                                </div>

                            </div>
                            <div class="h-2 bg-green-300 mb-5" id="progressBar"></div>

                            <div>
                                <button type="submit"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Upload
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        document.getElementById("progressBar").style.width = `0%`;
        // const data = axios.get('/batch').then(req => {
        //     // console.log(req.data);
        //     const progressBar = document.getElementById("progressBar").style.width = `${data.progress}%`;

        // });

        setInterval(() => {
            axios.get('/batch').then(req => {
                const progressBar = document.getElementById("progressBar").style.width =
                `${req.data.progress}%`;

            });
        }, 1000);
    </script>
@endsection
