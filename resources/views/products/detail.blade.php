<x-app-layout>

    @section('content')
    <div class="mx-auto max-w-270">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Detail Product
            </h2>
            <nav>
                <ol class="flex items-center gap-2">
                    <li class="font-medium text-primary">Products</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->
        <!-- ====== Settings Section Start -->
        <div class="grid grid-cols-5 gap-8 mb-6">
            <div class="col-span-5 xl:col-span-5">
                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                        <h3 class="font-medium text-black dark:text-white">
                            Detail Product
                        </h3>
                    </div>
                    <div class="p-7">
                        <div class="mb-5.5">
                            <div class="w-full">
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="code">Code Product</label>
                                <div class="relative">
                                    <span class="absolute left-4.5 top-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M1 21v-5h2v3h3v2zm17 0v-2h3v-3h2v5zM4 18V6h2v12zm3 0V6h1v12zm3 0V6h2v12zm3 0V6h3v12zm4 0V6h1v12zm2 0V6h1v12zM1 8V3h5v2H3v3zm20 0V5h-3V3h5v5z" />
                                        </svg>
                                    </span>
                                    <div class="w-full rounded border border-stroke py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary">{{ $product->code }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="name">Name Product</label>
                            <div class="relative">
                                <span class="absolute left-4.5 top-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M22 3H2v6h1v11a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9h1zM4 5h16v2H4zm15 15H5V9h14zM9 11h6a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2" />
                                    </svg>
                                </span>
                                <div class="w-full rounded border border-stroke py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary">{{ $product->name }}</div>
                            </div>
                        </div>
                        <div class="mb-5.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="price">Price Product</label>
                            <div class="relative">
                                <span class="absolute left-4.5 top-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M435.25 48h-122.9a14.46 14.46 0 0 0-10.2 4.2L56.45 297.9a28.85 28.85 0 0 0 0 40.7l117 117a28.85 28.85 0 0 0 40.7 0L459.75 210a14.46 14.46 0 0 0 4.2-10.2v-123a28.66 28.66 0 0 0-28.7-28.8" />
                                        <path fill="currentColor" d="M384 160a32 32 0 1 1 32-32a32 32 0 0 1-32 32" />
                                    </svg>
                                </span>
                                <div class="w-full rounded border border-stroke py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                            </div>
                        </div>
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                            <div class="w-full sm:w-1">
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="stock">Stock Product</label>
                                <div class="relative">
                                    <span class="absolute left-4 5 top-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M17 2a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2v8c0 .85-.5 1.57-1.26 1.86L9.5 21.77c-1 .47-2.21.04-2.67-.96L6 19c-.5-1-.05-2.2.95-2.66L10 14.91V9a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm-7 2v3h7V4z" />
                                        </svg>
                                    </span>
                                    <div class="w-full rounded border border-stroke py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary">{{ $product->stock }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="picture">Image Product</label>
                            <div class="relative">
                                <div class="w-full rounded border border-stroke py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"><img src="{{ $product->getFirstMediaUrl('product-img') }}"></div>
                            </div>
                        </div>
                        <div class="flex justify-end gap-4.5">
                            <button class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90 mb-4" onclick="location.href='{{ route('products.index') }}'">
                                Kembali
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Settings Section End -->
        <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
            <div class="max-w-full overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-2 text-left dark:bg-meta-4">
                            <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">
                                Description
                            </th>
                            <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">
                                Price
                            </th>
                            <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">
                                Qty
                            </th>
                            <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">
                                Updated at
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- resources/views/users/index.blade.php --}}
                        @foreach ($stockLog as $log)
                        <tr>
                            <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black dark:text-white">{{ $log->description }}</h5>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">Rp {{ number_format($log->moving_price, 0, ',', '.') }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{ $log->moving_stock }}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="inline-flex rounded-full bg-success bg-opacity-10 px-3 py-1 text-sm font-medium text-success">
                                    {{ $product->updated_at->format('d-m-Y') }}
                                </p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection

</x-app-layout>