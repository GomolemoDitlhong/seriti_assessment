<!-- side menu bar -->
<div class="sidebar bg-green-900 text-blue-100 w-56 space-y-6 absolute inset-y-0 left-0 top-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out overflow-y-auto h-screen z-20">
    <!-- sidebar -->
    <nav>
        <div class="bg-green-700 text-transparent w-100 h-12.5 block sticky top-0 z-30"></div>
        <div class="mt-5">
            <ul>
                <link-component title="Dashboard" link="h-16" icon="fa-tachometer"></link-component>
                <link-dropdown-component title="UI Elements" link="h-24" icon="fa-laptop">
                  <sub-menu-component title="Sub menu 1"></sub-menu-component>
                  <sub-menu-component title="Sub menu 2"></sub-menu-component>
                  <sub-menu-component title="Sub menu 3"></sub-menu-component>
                  <sub-menu-component title="Sub menu 4"></sub-menu-component>
                  <sub-menu-component title="Sub menu 5"></sub-menu-component>
                  <sub-menu-component title="Sub menu 6"></sub-menu-component>
                  <sub-menu-component title="Sub menu 7"></sub-menu-component>
                  <sub-menu-component title="Sub menu 8"></sub-menu-component>
                  <sub-menu-component title="Sub menu 9"></sub-menu-component>
                  <sub-menu-component title="Sub menu 10"></sub-menu-component>
                  <sub-menu-component title="Sub menu 11"></sub-menu-component>
                  <sub-menu-component title="Sub menu 12"></sub-menu-component>
                  <sub-menu-component title="Sub menu 13"></sub-menu-component>
                </link-dropdown-component>
                <link-component title="Charts" link="h-16" :icon="'fa-pie-chart'"></link-component>
                <link-dropdown-component title="Forms" link="h-20" icon="fa-pencil-square-o">
                    <sub-menu-component title="Sub menu 1"></sub-menu-component>
                    <sub-menu-component title="Sub menu 2"></sub-menu-component>
                </link-dropdown-component>
                <link-dropdown-component title="Tables" link="h-16" icon="fa-th-list">
                    <sub-menu-component title="Sub menu 1"></sub-menu-component>
                    <sub-menu-component title="Sub menu 2"></sub-menu-component>
                </link-dropdown-component>
                <link-dropdown-component title="Pages" link="h-16" icon="fa-file-text-o">
                    <sub-menu-component title="Sub menu 1"></sub-menu-component>
                    <sub-menu-component title="Sub menu 2"></sub-menu-component>
                </link-dropdown-component>
                <link-component title="Docs" height="h-16" :icon="'fa-file-code-o'"></link-component>
              </ul>

        </div>
    </nav>
</div>
