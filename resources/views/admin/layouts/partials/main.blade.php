@extends('admin.layouts.master')
@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Dashboard
                        </h2>
                        <a href="#" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw"
                                                                                       class="w-4 h-4 mr-3"></i> Reload
                            Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="shopping-cart" class="report-box__icon text-primary"></i>

                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{$dataCount}}</div>
                                    <div class="text-base text-slate-500 mt-1">Event</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="user" class="report-box__icon text-success"></i>

                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{$dataCountUser}}</div>
                                    <div class="text-base text-slate-500 mt-1">User</div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">--}}
{{--                            <div class="report-box zoom-in">--}}
{{--                                <div class="box p-5">--}}
{{--                                    <div class="flex">--}}
{{--                                        <i data-lucide="monitor" class="report-box__icon text-warning"></i>--}}
{{--                                        <div class="ml-auto">--}}
{{--                                            <div class="report-box__indicator bg-success tooltip cursor-pointer"--}}
{{--                                                 title="12% Higher than last month"> 12% <i data-lucide="chevron-up"--}}
{{--                                                                                            class="w-4 h-4 ml-0.5"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="text-3xl font-medium leading-8 mt-6">2.149</div>--}}
{{--                                    <div class="text-base text-slate-500 mt-1">Total Products</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">--}}
{{--                            <div class="report-box zoom-in">--}}
{{--                                <div class="box p-5">--}}
{{--                                    <div class="flex">--}}
{{--                                        <i data-lucide="user" class="report-box__icon text-success"></i>--}}
{{--                                        <div class="ml-auto">--}}
{{--                                            <div class="report-box__indicator bg-success tooltip cursor-pointer"--}}
{{--                                                 title="22% Higher than last month"> 22% <i data-lucide="chevron-up"--}}
{{--                                                                                            class="w-4 h-4 ml-0.5"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="text-3xl font-medium leading-8 mt-6">152.040</div>--}}
{{--                                    <div class="text-base text-slate-500 mt-1">Unique Visitor</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <!-- END: General Report -->


                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Weekly Top Products
                        </h2>
                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn box flex items-center text-slate-600"><i
                                        data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to
                                Excel
                            </button>
                            <button class="ml-3 btn box flex items-center text-slate-600"><i
                                        data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                            </button>
                        </div>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                            <tr>
                                <th class="whitespace-nowrap">User</th>
                                <th class="whitespace-nowrap">Point</th>
{{--                                <th class="text-center whitespace-nowrap">Address</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($top5Users as $key => $user)
                            <tr class="intro-x">
                                <td>
                                    <a href="#" class="font-medium whitespace-nowrap">{{ $user['user']['email'] }}</a>
{{--                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $user['count_point'] }}--}}
{{--                                    </div>--}}
                                </td>
                                <td>{{ $user['count_point'] }}</td>
{{--                                <td class="w-40">--}}
{{--                                    <div class="flex items-center justify-center text-success"><i--}}
{{--                                                data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active--}}
{{--                                    </div>--}}
{{--                                </td>--}}
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Transactions
                            </h2>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template"
                                             src="{{asset('be/dist/images/profile-14.jpg')}}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Russell Crowe</div>
                                        <div class="text-slate-500 text-xs mt-0.5">3 June 2020</div>
                                    </div>
                                    <div class="text-success">+$36</div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template"
                                             src="{{asset('be/dist/images/profile-11.jpg')}}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">John Travolta</div>
                                        <div class="text-slate-500 text-xs mt-0.5">18 October 2022</div>
                                    </div>
                                    <div class="text-danger">-$179</div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template"
                                             src="{{asset('be/dist/images/profile-11.jpg')}}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Tom Cruise</div>
                                        <div class="text-slate-500 text-xs mt-0.5">5 September 2020</div>
                                    </div>
                                    <div class="text-success">+$32</div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template"
                                             src="{{asset('be/dist/images/profile-13.jpg')}}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Denzel Washington</div>
                                        <div class="text-slate-500 text-xs mt-0.5">21 May 2020</div>
                                    </div>
                                    <div class="text-success">+$36</div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template"
                                             src="{{asset('be/dist/images/profile-14.jpg')}}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Al Pacino</div>
                                        <div class="text-slate-500 text-xs mt-0.5">6 February 2022</div>
                                    </div>
                                    <div class="text-success">+$56</div>
                                </div>
                            </div>
                            <a href="#"
                               class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 text-slate-500">View
                                More</a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Recent Activities
                            </h2>
                            <a href="#" class="ml-auto text-primary truncate">Show More</a>
                        </div>
                        <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template"
                                             src="{{asset('be/dist/images/profile-12.jpg')}}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">Al Pacino</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template"
                                             src="{{asset('be/dist/images/profile-6.jpg')}}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">Tom Cruise</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="flex mt-2">
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in"
                                                 title="Samsung Galaxy S20 Ultra">
                                                <img alt="Midone - HTML Admin Template"
                                                     class="rounded-md border border-white"
                                                     src="{{asset('be/dist/images/preview-6.jpg')}}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in"
                                                 title="Oppo Find X2 Pro">
                                                <img alt="Midone - HTML Admin Template"
                                                     class="rounded-md border border-white"
                                                     src="{{asset('be/dist/images/preview-13.jpg')}}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Nike Tanjun">
                                                <img alt="Midone - HTML Admin Template"
                                                     class="rounded-md border border-white"
                                                     src="{{asset('be/dist/images/preview-6.jpg')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template"
                                             src="{{asset('be/dist/images/profile-14.jpg')}}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">Johnny Depp</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="#">Sony
                                            A7 III</a> price and description
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template"
                                             src="{{asset('be/dist/images/profile-9.jpg')}}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">Al Pacino</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="#">Samsung
                                            Q90 QLED TV</a> description
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">
                                Important Notes
                            </h2>
                            <button data-carousel="important-notes" data-target="prev"
                                    class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 mr-2">
                                <i data-lucide="chevron-left" class="w-4 h-4"></i></button>
                            <button data-carousel="important-notes" data-target="next"
                                    class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 mr-2">
                                <i data-lucide="chevron-right" class="w-4 h-4"></i></button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes
                                            </button>
                                            <button type="button"
                                                    class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes
                                            </button>
                                            <button type="button"
                                                    class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text
                                            of the printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes
                                            </button>
                                            <button type="button"
                                                    class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Schedules -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Schedules
                            </h2>
                            <a href="#" class="ml-auto text-primary truncate flex items-center"> <i data-lucide="plus"
                                                                                                    class="w-4 h-4 mr-1"></i>
                                Add New Schedules </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <i data-lucide="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                        <div class="font-medium text-base mx-auto">April</div>
                                        <i data-lucide="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                    </div>
                                    <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="py-0.5 rounded relative text-slate-500">29</div>
                                        <div class="py-0.5 rounded relative text-slate-500">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">31</div>
                                        <div class="py-0.5 rounded relative">1</div>
                                        <div class="py-0.5 rounded relative">2</div>
                                        <div class="py-0.5 rounded relative">3</div>
                                        <div class="py-0.5 rounded relative">4</div>
                                        <div class="py-0.5 rounded relative">5</div>
                                        <div class="py-0.5 bg-success/20 rounded relative">6</div>
                                        <div class="py-0.5 rounded relative">7</div>
                                        <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                        <div class="py-0.5 rounded relative">9</div>
                                        <div class="py-0.5 rounded relative">10</div>
                                        <div class="py-0.5 rounded relative">11</div>
                                        <div class="py-0.5 rounded relative">12</div>
                                        <div class="py-0.5 rounded relative">13</div>
                                        <div class="py-0.5 rounded relative">14</div>
                                        <div class="py-0.5 rounded relative">15</div>
                                        <div class="py-0.5 rounded relative">16</div>
                                        <div class="py-0.5 rounded relative">17</div>
                                        <div class="py-0.5 rounded relative">18</div>
                                        <div class="py-0.5 rounded relative">19</div>
                                        <div class="py-0.5 rounded relative">20</div>
                                        <div class="py-0.5 rounded relative">21</div>
                                        <div class="py-0.5 rounded relative">22</div>
                                        <div class="py-0.5 bg-pending/20 rounded relative">23</div>
                                        <div class="py-0.5 rounded relative">24</div>
                                        <div class="py-0.5 rounded relative">25</div>
                                        <div class="py-0.5 rounded relative">26</div>
                                        <div class="py-0.5 bg-primary/10 rounded relative">27</div>
                                        <div class="py-0.5 rounded relative">28</div>
                                        <div class="py-0.5 rounded relative">29</div>
                                        <div class="py-0.5 rounded relative">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">1</div>
                                        <div class="py-0.5 rounded relative text-slate-500">2</div>
                                        <div class="py-0.5 rounded relative text-slate-500">3</div>
                                        <div class="py-0.5 rounded relative text-slate-500">4</div>
                                        <div class="py-0.5 rounded relative text-slate-500">5</div>
                                        <div class="py-0.5 rounded relative text-slate-500">6</div>
                                        <div class="py-0.5 rounded relative text-slate-500">7</div>
                                        <div class="py-0.5 rounded relative text-slate-500">8</div>
                                        <div class="py-0.5 rounded relative text-slate-500">9</div>
                                    </div>
                                </div>
                                <div class="border-t border-slate-200/60 p-5">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span class="truncate">UI/UX Workshop</span> <span
                                                class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                        <span class="truncate">VueJs Frontend Development</span> <span
                                                class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                        <span class="truncate">Laravel Rest API</span> <span
                                                class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    if ($("#report-line-chart").length) {
        var ctx = $("#report-line-chart")[0].getContext("2d");
        var myChart = new chart_js_auto__WEBPACK_IMPORTED_MODULE_2__["default"](ctx, {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "# of Votes",
                    data: [0, 200, 250, 200, 700, 550, 650, 1050, 950, 1100, 900, 1200],
                    borderWidth: 2,
                    borderColor: _colors__WEBPACK_IMPORTED_MODULE_1__["default"].primary(0.8),
                    backgroundColor: "transparent",
                    pointBorderColor: "transparent",
                    tension: 0.4
                }, {
                    label: "# of Votes",
                    data: [0, 300, 400, 560, 320, 600, 720, 850, 690, 805, 1200, 1010],
                    borderWidth: 2,
                    borderDash: [2, 2],
                    borderColor: $("html").hasClass("dark") ? _colors__WEBPACK_IMPORTED_MODULE_1__["default"].slate["400"](0.6) : _colors__WEBPACK_IMPORTED_MODULE_1__["default"].slate["400"](),
                    backgroundColor: "transparent",
                    pointBorderColor: "transparent",
                    tension: 0.4
                }]
            },
            options: {
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            font: {
                                size: 12
                            },
                            color: _colors__WEBPACK_IMPORTED_MODULE_1__["default"].slate["500"](0.8)
                        },
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    },
                    y: {
                        ticks: {
                            font: {
                                size: 12
                            },
                            color: _colors__WEBPACK_IMPORTED_MODULE_1__["default"].slate["500"](0.8),
                            callback: function callback(value, index, values) {
                                return "$" + value;
                            }
                        },
                        grid: {
                            color: $("html").hasClass("dark") ? _colors__WEBPACK_IMPORTED_MODULE_1__["default"].slate["500"](0.3) : _colors__WEBPACK_IMPORTED_MODULE_1__["default"].slate["300"](),
                            borderDash: [2, 2],
                            drawBorder: false
                        }
                    }
                }
            }
        });
    }
</script>
