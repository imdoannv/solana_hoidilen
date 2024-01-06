@extends('admin.layouts.master')
@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Create Teacher
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Form Layout -->
        <form action="{{ route('createUser') }}" method="POST">
            @csrf
            @method('post')
        <div class="intro-y box p-5">
            <div>
                <label for="crud-form-1" class="form-label">Teacher Name</label>
                <input type="text" class="form-control" required name="name" placeholder="Enter Teacher Name">
                <x-input-error :messages="$errors->get('name')" class="mt-2"  />
            </div>
            <div class="mt-3">
                <label for="crud-form-1" class="form-label">Teacher Email</label>
                <input type="email" required class="form-control" name="email" placeholder="Enter Teacher Email">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <div class="mt-3">
                <label for="crud-form-1" class="form-label">Password</label>
                <input type="password" required class="form-control" name="password" placeholder="Enter Teacher Email">
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <div class="text-right mt-5">
                <button type="submit" class="btn btn-primary w-24">Create</button>
            </div>
        </div>
    </form>
        <!-- END: Form Layout -->
    </div>
</div>
@endsection
