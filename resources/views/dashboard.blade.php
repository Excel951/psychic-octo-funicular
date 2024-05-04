<x-app-layout>

    @section('content')
        <div class="mx-auto max-w-270">
            <!-- Breadcrumb Start -->
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Dashboard
                </h2>
                <nav>
                    <ol class="flex items-center gap-2">
                        <li class="font-medium text-primary">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <!-- Breadcrumb End -->
            <!-- ====== Settings Section Start -->
            <div class="grid grid-cols-5 gap-8">
            </div>
            <!-- ====== Settings Section End -->
        </div>
    @endsection

</x-app-layout>
