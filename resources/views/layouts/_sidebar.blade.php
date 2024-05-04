<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'" class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0" @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('src/images/logo/logo.svg') }}" alt="Logo" />
        </a>

        <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z" fill="" />
            </svg>
        </button>
    </div>
    <!-- SIDEBAR HEADER -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <!-- Sidebar Menu -->
        <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6" x-data="{selected: $persist('Dashboard')}">
            <!-- Menu Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Dashboard -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4" href="#" @click.prevent="selected = (selected === 'Dashboard' ? '':'Dashboard')" :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Dashboard') || (page === 'ecommerce' || page === 'analytics' || page === 'stocks') }">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z" fill="" />
                                <path d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z" fill="" />
                                <path d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z" fill="" />
                                <path d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z" fill="" />
                            </svg>

                            Dashboard

                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Dashboard') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                            </svg>
                        </a>

                    </li>
                    <!-- Menu Item Dashboard -->

                    <!-- Menu Item Users -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4" href="{{ route('users.index') }}" @click="selected = (selected === 'Users' ? '':'Users')" :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Users') && (page === 'users') }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" width="18" height="18" viewBox="0 0 256 256" fill="none">
                                <g fill="currentColor">
                                    <path d="M136 108a52 52 0 1 1-52-52a52 52 0 0 1 52 52" opacity=".2" />
                                    <path d="M117.25 157.92a60 60 0 1 0-66.5 0a95.83 95.83 0 0 0-47.22 37.71a8 8 0 1 0 13.4 8.74a80 80 0 0 1 134.14 0a8 8 0 0 0 13.4-8.74a95.83 95.83 0 0 0-47.22-37.71M40 108a44 44 0 1 1 44 44a44.05 44.05 0 0 1-44-44m210.14 98.7a8 8 0 0 1-11.07-2.33A79.83 79.83 0 0 0 172 168a8 8 0 0 1 0-16a44 44 0 1 0-16.34-84.87a8 8 0 1 1-5.94-14.85a60 60 0 0 1 55.53 105.64a95.83 95.83 0 0 1 47.22 37.71a8 8 0 0 1-2.33 11.07" />
                                </g>
                            </svg>

                            Users & Permissions
                        </a>
                    </li>
                    <!-- Menu Item Users -->
                </ul>
            </div>

            <!-- Menu Group Master -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MASTER</h3>

                <ul class="mb-6 flex flex-col gap-1.5">

                    <!-- Menu Item Users -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4" href="{{ route('products.index') }}" @click="selected = (selected === 'Products' ? '':'Products')" :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Products') && (page === 'products') }">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M22 3H2v6h1v11a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9h1zM4 5h16v2H4zm15 15H5V9h14zM9 11h6a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2" />
                            </svg>

                            Products
                        </a>
                    </li>
                    <!-- Menu Item Users -->
                </ul>
            </div>
            <!--Menu Grup Master-->

            <!-- Menu Group Point Of Sales -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">POINT OF SALES</h3>

                <ul class="mb-6 flex flex-col gap-1.5">

                    <!-- Menu Item Users -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="{{ route('pos-session.index') }}"
                            @click="selected = (selected === 'Point Of Sales' ? '':'Point Of Sales')"
                            :class="{
                                'bg-graydark dark:bg-meta-4': (selected === 'Point Of Sales') && (
                                    page === 'Point Of Sales')
                            }">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 17 17">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M13.641 4.012h-1.656V2.957h1.352c.346 0 .625-.346.625-.771V.772c0-.427-.279-.771-.625-.771H9.646c-.346 0-.624.345-.624.771v1.414c0 .426.278.771.624.771h1.378v1.055H4.353c-.37 0-.67.3-.67.668l-1.67 8.631V16h13.998v-2.689L14.312 4.68a.67.67 0 0 0-.671-.668m-7.625 8.004H4.985v-1.047h1.031zm-1.032-2V8.969h1.031v1.047zm3.032 2.015H6.985v-1.062h1.031zm0-2.031H6.969V8.984h1.047zm2 2.029H8.969v-1.061h1.047zM8.969 10V8.969h1.047V10zm1.047-2H4.985V6h5.031zM13 8h-2.018V6.98H13z" />
                            </svg>
                            Point Of Sales
                        </a>
                    </li>
                    <!-- Menu Item Users -->
                </ul>
            </div>
            <!--Menu Grup Point Of Sales-->

            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">REPORTS</h3>

                <ul class="mb-6 flex flex-col gap-1.5">

                    <!-- Menu Item Periode -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="{{ route('reports.periode.index') }}"
                            @click="selected = (selected === 'Periode' ? '':'Periode')"
                            :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Periode') && (page === 'Periode') }">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m16 11.78l4.24-7.33l1.73 1l-5.23 9.05l-6.51-3.75L5.46 19H22v2H2V3h2v14.54L9.5 8z" />
                            </svg>
                            Periode
                        </a>
                    </li>
                    <!-- Menu Item Periode -->

                    <!-- Menu Item Product -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="{{ route('reports.product.index') }}"
                            @click="selected = (selected === 'Product' ? '':'Product')"
                            :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Product') && (page === 'Product') }">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m16 11.78l4.24-7.33l1.73 1l-5.23 9.05l-6.51-3.75L5.46 19H22v2H2V3h2v14.54L9.5 8z" />
                            </svg>
                            Product
                        </a>
                    </li>
                    <!-- Menu Item Product -->
                </ul>
            </div>
            <!--Menu Grup Reports-->
        </nav>
        <!-- Sidebar Menu -->

    </div>
</aside>