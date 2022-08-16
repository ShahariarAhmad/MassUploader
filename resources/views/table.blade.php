@extends('layout')

@section('section')
    <style>
        p.leading-5 {
            display: none
        }
    </style>
    <!-- ====== Contact Section Start -->
    <section class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10">

        <div class="w-3/4 mx-auto">

            <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg" style="border-top: 8px solid rgb(0, 0, 0)">
                {{ $emails->onEachSide(1)->links() }}
                @if (!$bool)
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Database is empty !</strong>
                        <span class="block sm:inline"> Upload CSV from <a href="{{ route('show') }}"
                                class="text-black underline ">Upload CSV</a> page first... <br> <br>
                            A CSV file already exists in /public directory. Use it for testing.
                        </span>

                    </div>
                @endif
                @if ($bool)
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap w-1/2">
                                    <div class="font-semibold text-left">ID</div>
                                </th>



                                <th class="p-2 whitespace-nowrap w-1/2">
                                    <div class="font-semibold text-left">Email</div>
                                </th>

                            </tr>

                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100 w-3/4">


                            @foreach ($emails as $data)
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left"> {{ $data->id + 1 }} </div>
                                    </td>



                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-indigo-500">{{ $data->emails }}
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            <br>



                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </section>
@endsection



</body>

</html>
