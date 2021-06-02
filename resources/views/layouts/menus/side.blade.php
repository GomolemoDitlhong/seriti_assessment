
<!-- mobile menu bar -->
<div class=" min-h-screen fixed  md:flex z-20">
    <!-- sidebar -->
    <nav
        class="sidebar bg-gray-700 text-blue-100 w-56 space-y-6 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
        <div class="bg-green-700 text-transparent w-100 h-12.5 block"></div>
        <div class="container p-0 pt-5">
            <ul class="nav flex-column">
                 <menu-link :menu-label="'Dashboard'" :menu-icon="'fa-tachometer'"></menu-link>
                 <menu-link :menu-label="'UI Elements'" :menu-icon="'fa-laptop'" :has-sub-menu="true"></menu-link>
                 <menu-link :menu-label="'Charts'" :menu-icon="'fa-pie-chart'"></menu-link>
                 <menu-link :menu-label="'Forms'" :menu-icon="'fa-pencil-square-o'" :has-sub-menu="true"></menu-link>
                 <menu-link :menu-label="'Tables'" :menu-icon="'fa-th-list'" :has-sub-menu="true"></menu-link>
                 <menu-link :menu-label="'Pages'" :menu-icon="'fa-file-text-o'" :has-sub-menu="true"></menu-link>
                 <menu-link :menu-label="'Docs'" :menu-icon="'fa-file-code-o'"></menu-link>
            </ul>
        </div>
    </nav>
</div>
