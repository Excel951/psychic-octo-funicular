<x-app-layout>

    @section('content')
    <div class="mx-auto max-w-270">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Create Product
            </h2>
            <nav>
                <ol class="flex items-center gap-2">
                    <li class="font-medium text-primary">Products</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->
        <!-- ====== Settings Section Start -->
        <div class="grid grid-cols-5 gap-8">
            <div class="col-span-5 xl:col-span-5">
                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                        <h3 class="font-medium text-black dark:text-white">
                            Create New Product
                        </h3>
                    </div>
                    <div class="p-7">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5.5">
                                <div class="w-full">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="code">Code Product</label>
                                    <div class="relative">
                                        <span class="absolute left-4.5 top-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M1 21v-5h2v3h3v2zm17 0v-2h3v-3h2v5zM4 18V6h2v12zm3 0V6h1v12zm3 0V6h2v12zm3 0V6h3v12zm4 0V6h1v12zm2 0V6h1v12zM1 8V3h5v2H3v3zm20 0V5h-3V3h5v5z" />
                                            </svg>
                                        </span>
                                        <input class="w-full rounded border border-stroke py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary" type="text" name="code" id="code" value="{{ @old('code') }}" />
                                    </div>
                                    @error('code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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
                                    <input class="w-full rounded border border-stroke py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary" type="text" name="name" id="name" value="{{ @old('name') }}" />
                                </div>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
                                    <input class="w-full rounded border border-stroke py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary" type="number" name="price" id="price" value="{{ @old('price') }}" />
                                </div>
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                                <div class="w-full sm:w-1/2">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="is_having_stock">Declare Stock</label>
                                    <div class="relative">
                                        <span class="absolute left-4 5 top-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M17 2a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2v8c0 .85-.5 1.57-1.26 1.86L9.5 21.77c-1 .47-2.21.04-2.67-.96L6 19c-.5-1-.05-2.2.95-2.66L10 14.91V9a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm-7 2v3h7V4z" />
                                            </svg>
                                        </span>
                                        <select class="w-full rounded border border-stroke px-4.5 pl-11.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary" name="is_having_stock" id="is_having_stock" />
                                        <option value="">Choose Stock Declaration</option>
                                        <option value="1">With Stock</option>
                                        <option value="0">Without Stock</option>
                                        </select>
                                    </div>
                                    @error('is_having_stock')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="w-full sm:w-1/2">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="stock">Stock Product</label>
                                    <div class="relative">
                                        <span class="absolute left-4 5 top-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M17 2a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2v8c0 .85-.5 1.57-1.26 1.86L9.5 21.77c-1 .47-2.21.04-2.67-.96L6 19c-.5-1-.05-2.2.95-2.66L10 14.91V9a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm-7 2v3h7V4z" />
                                            </svg>
                                        </span>
                                        <input class="w-full rounded border border-stroke px-4.5 pl-11.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary" type="number" name="stock" id="stock" />
                                    </div>
                                    @error('stock')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-5.5">
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="picture">Image Product</label>
                                <div class="relative">
                                    <input class="w-full rounded border border-stroke py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary" type="file" name="picture" id="picture" value="{{ @old('picture') }}" />
                                </div>
                                @error('picture')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex justify-end gap-4.5">
                                <button class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white" type="button" onclick="location.href='{{ route('products.index') }}'">
                                    Cancel
                                </button>
                                <button class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90" type="submit">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Settings Section End -->
    </div>
    @endsection

</x-app-layout>