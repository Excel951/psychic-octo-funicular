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
            <div class="col-span-5 xl:col-span-5">
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                        <h3 class="font-medium text-black dark:text-white">
                            Permissions for {{ $user->name }}
                        </h3>
                    </div>
                    <div class="p-7 flex flex-col gap-5.5 p-6.5">
                        <form action="{{ route('users.permissions', $user) }}" method="post">
                            @csrf
                            @foreach($permissions as $permission)
                                <div x-data="{ checkboxToggle: @php echo $user->hasPermissionTo($permission->name) ?: 0 @endphp }">
                                    <label for="{{ $permission->name }}"
                                        class="flex cursor-pointer select-none items-center text-sm font-medium">
                                        <div class="relative">
                                            <input type="checkbox" id="{{ $permission->name }}" name="permissions[]"
                                                value="{{ $permission->name }}" class="sr-only"
                                                {{ $user->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                @change="checkboxToggle = !checkboxToggle" />
                                            <div :class="checkboxToggle && 'border-primary bg-gray dark:bg-transparent'"
                                                class="mr-4 flex h-5 w-5 items-center justify-center rounded border">
                                                <span :class="checkboxToggle && 'bg-primary'"
                                                    class="h-2.5 w-2.5 rounded-sm"></span>
                                            </div>
                                        </div>
                                        {{ $permission->name }}
                                    </label>
                                </div>
                            @endforeach
                            <div class="flex justify-end gap-4.5">
                                <button
                                    class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white"
                                    type="button"
                                    onclick="location.href='{{ route('users.index') }}'">
                                    Cancel
                                </button>
                                <button
                                    class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90"
                                    type="submit">
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