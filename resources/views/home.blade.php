@extends('layouts.auth')

@section('content')
    <div class="relative mx-auto overflow-y-auto h-screen">
         <!-- Page Header Section  -->
        <page-header-component title="Dashboard" sub-title="Let's see if you can build this"></page-header-component>

        <!-- Summary Section  -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 p-7 lg:gap-8 gap-4">
            <summary-component title="Users" color="green" icon="fa-users" link="dummy-data-users"></summary-component>
            <summary-component title="Likes" color="blue" icon="fa-thumbs-o-up" link="dummy-data-likes"></summary-component>
            <summary-component title="uploads" color="yellow" icon="fa-files-o" link="dummy-data-uploads"></summary-component>
            <summary-component title="stars" color="red" icon="fa-star" link="dummy-data-stars"></summary-component>
        </div>

        <!-- Charts Section  -->
        <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 p-7 lg:gap-8 gap-4">
            <line-chart title="Monthly Sales" link="dummy-data-curvedchart"></line-chart>
            <pie-chart title="Support Requests" link="dummy-data-piechart"></pie-chart>
        </div>
    </div>
    </div>
@endsection
