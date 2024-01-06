@extends('admin.layouts.master')
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Create Event
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form class="intro-y box p-5" action="{{route('assets.store')}}" method="POST" >
                @csrf

                <div>
                    <label for="crud-form-1" class="form-label">Email User</label>
                    <input name="email" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Email">
                </div>

                <div class="mt-3">
                    <label for="crud-form-2" class="form-label">Event</label>
                    <select class="form-select" aria-label="Default select example" name="event_id">
                        @foreach ($event as $key=>$value )
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                       
                      </select>
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary w-24">Save</button>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
