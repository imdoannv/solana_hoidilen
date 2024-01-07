@extends('admin.layouts.master')
@section('content')
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <button class="btn btn-primary shadow-md mr-2"><a href="/create-teacher">Add New Teacher</a></button>
    </div>
    <!-- BEGIN: Data List -->

    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">User</th>
                    <th class="whitespace-nowrap">Point</th>
                    <th class="text-center whitespace-nowrap">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                    @php
                        $count_point = 0;
                    @endphp
                    <tr class="intro-x">
                        <td>
                            <a href="#" class="font-medium whitespace-nowrap">{{ $key + 1 }}</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $user['email'] }}</div>
                        </td>
                        <td>
                            @foreach ($res as $r)
                                @if ($r['name'] == $user['email'])
                                    @php
                                        $count_point += (int)$r['attributes'][0]['value'];
                                    @endphp
                                @endif
                            @endforeach
                            <a href="#" class="font-medium whitespace-nowrap">{{ $count_point }}</a>
                        </td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-success">
                                <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                <span class="hidden">{{ $user['address'] }}</span>
                                <button class="show-address-btn" onclick="toggleAddressVisibility(this)">Show Address</button>
                            </div>
                        </td>

                        <script>
                            function toggleAddressVisibility(button) {
                                var addressSpan = button.previousElementSibling;
                                addressSpan.classList.toggle('hidden');
                                button.textContent = (addressSpan.classList.contains('hidden')) ? 'Show Address' : 'Hide Address';
                            }
                        </script>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <!-- END: Pagination -->
</div>
@endsection