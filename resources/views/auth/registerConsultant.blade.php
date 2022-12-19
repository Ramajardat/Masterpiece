@extends('layouts.master')

{{-- @php

    use App\Models\departments;
        $Department = departments::all();

@endphp --}}
@section('register')
<x-guest-layout>
    <div class="container mt-5 w-50 h-auto">

        <h1 style="margin-bottom:10px">Register as Consultant</h1>

        <form method="post" action="/storeCon" enctype="multipart/form-data">
            @csrf
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="form-control block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="form-control block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="form-control block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="mobile" :value="__('Mobile')" />

                <x-text-input id="mobile" class="form-control block mt-1 w-full"
                                type="text"
                                name="mobile" required />

                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="image" :value="__('Image')" />

                <x-text-input id="image" class="form-control block mt-1 w-full"
                                type="file"
                                name="image" required />

                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="certificate" :value="__('Certificate')" />

                <x-text-input id="certificate" class="form-control block mt-1 w-full"
                                type="file"
                                name="certificate" required />

                <x-input-error :messages="$errors->get('certificate')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="departement" :value="__('departement')" />

                <select class="form-select" aria-label="Default select example" name="departement" required>
                    <option selected>Choose department</option>
                    {{-- {{dd(App\Models\departement::all())}} --}}
                    @foreach (App\Models\departement::all() as  $appointemnet)
                    <option value="{{$appointemnet->id  }}">{{$appointemnet->name}}	</option>
                    @endforeach


                  </select>

                <x-input-error :messages="$errors->get('available_time')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="city" :value="__('City')" />
                    <select class="form-select" aria-label="Default select example" name="city" required>
                        <option selected>Choose your city</option>
                        <option value="1">Amman	</option>
                        <option value="2">Zarqa	</option>
                        <option value="3">Irbid	</option>
                        <option value="4">Ajloun</option>
                        <option value="5">Jerash</option>
                        <option value="6">Mafraq</option>
                        <option value="7">Balqa	</option>
                        <option value="8">Aqaba	</option>
                        <option value="9">Madaba</option>
                        <option value="10">Karak</option>
                        <option value="11">Tafilah</option>
                        <option value="12">Ma'an</option>
                      </select>
                      <x-input-error :messages="$errors->get('city')" class="mt-2" />

            </div>
            <div class="mt-4">
                <x-input-label for="overview" :value="__('Overview')" />

                <textarea id="overview" class="form-control block mt-1 w-full" type="date" name="overview" required>

                </textarea>

                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="role" :value="__('user')" style="visibility: hidden"/>

                <x-text-input id="role" class="form-control block mt-1 w-full"
                                type="text" style="visibility: hidden"
                                name="role" value="consultant" required />

                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-dark-600 hover:text-dark-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="button button-contactForm boxed-btn ">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
        </div>

</x-guest-layout>
@endsection
