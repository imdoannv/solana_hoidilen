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
            <form class="intro-y box p-5" action="{{route('events.store')}}" method="post" >
                @csrf

                <div>
                    <label for="crud-form-1" class="form-label">Event name</label>
                    <input name="name" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Name">
                </div>

                <div class=" mt-3">
                    <label for="crud-form-1" class="form-label">Event description</label>
                    <input  name="description"  id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Description">
                </div>
                  <div class=" mt-3">
                    <label for="crud-form-1" class="form-label">Point</label>
<<<<<<< HEAD
                    <input  name="point_max"  id="crud-form-1" type="number" min="0" max="5" class="form-control w-full" placeholder="Input Point">
=======
                    <input  name="point_max"  id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Point">
>>>>>>> dev
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
