@extends('layouts.auth')

@section('content')

<div class="relative mx-auto ">
    <div class="bg-white grid grid-cols-2 p-5">
        <div>
            <div class="text-2xl text-black"><h1><i class="fa fa-tachometer mr-2" aria-hidden="true"></i> Dashboard</h1></div>
            <p class="text-base italic">Let's see if you can build this</p>
        </div>

        <div class="flex items-end my-auto flex-col">
           <div class="text-base"> <i class="fa fa-home mr-1" aria-hidden="true"></i> /
            <a class="text-green-500 hover:text-green-800 ml-1" href="home">Dashboard</a>
        </div>
        </div>
    </div>

    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 p-7 lg:gap-8 gap-4">

        <div class="group flex flex-row bg-white rounded-md shadow-sm">
            <div class="text-xl rounded-l-md bg-green-500 group-hover:bg-green-700 p-5 w-20 "><i class="fa fa-users fa-2x text-white  m-auto" aria-hidden="true"></i></div>
            <div class="p-3 text-lg uppercase">
              <div class="flex flex-col items-center">
                <h2 class="uppercase">users</h2>
                <p>5</p>
              </div>
            </div>
        </div>
        <div class="group flex flex-row bg-white rounded-md shadow-sm">
            <div class="text-xl bg-blue-500 group-hover:bg-blue-700 p-5 w-20 rounded-l-md">
                <i class="fa fa-thumbs-o-up fa-2x text-white  m-auto" aria-hidden="true"></i>
            </div>
            <div class="p-3 text-lg uppercase">
              <div class="flex flex-col items-center">
                <h2 class="uppercase">likes</h2>
                <p>25</p>
              </div>
            </div>
        </div>
        <div class="group flex flex-row bg-white rounded-md shadow-sm">
            <div class="text-xl bg-yellow-500 group-hover:bg-yellow-600 p-5 w-20 rounded-l-md">
                <i class="fa fa-files-o fa-2x text-white  m-auto" aria-hidden="true"></i>
            </div>
            <div class="p-3 text-lg uppercase">
              <div class="flex flex-col items-center">
                <h2 class="uppercase">Uploads</h2>
                <p>10</p>
              </div>
            </div>
        </div>

        <div class="group flex flex-row bg-white rounded-md shadow-sm">
            <div class="text-xl bg-red-500 group-hover:bg-red-700 p-5 w-20 rounded-l-md">
                <i class="fa fa-star fa-2x text-white m-auto" aria-hidden="true"></i>
            </div>
            <div class="p-3 text-lg uppercase">
              <div class="flex flex-col items-center">
                <h2 class="uppercase">likes</h2>
                <p>500</p>
              </div>
            </div>
        </div>

    </div>
    <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 p-0 md:p-7 gap-8 sm:mb-10">
        <div class="relative md:rounded-md bg-white p-5">
            <h1 class="text-2xl font-bold">Monthly Sales</h1>
            <line-chart></line-chart>
        </div>
        <div class="relative md:rounded-md bg-white p-5">
            <h1 class="text-2xl font-bold">Support Requests</h1>
            <pie-chart></pie-chart>
        </div>
    </div>
</div>
@endsection
