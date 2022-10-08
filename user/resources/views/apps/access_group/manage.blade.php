@extends('layouts.backend')
@section('pageTitle', 'Actions')
@section('content')
   <!-- Please note that, these are just default components, 
    any of these can me replaced and modified as the case may be -->
    <div class="container-fluid">
        <div class="row">
            <!-- Header Component -->
                <div class="col-md-12 p-0 m-0">
                    <header-backend-general></header-backend-general>
                </div>
        </div>
        
        <div class="row">
                <!-- Sidebar component -->
           <div id="togglePanel" class="col-2">
              <sidebar-backend-menu></sidebar-backend-menu>
        </div>
           
        <!-- Body component(s) -->
            <div id="contentPanel" class="col-md-10 p-0 mt-5">
            <div class="mb-5 mt-3">
                
           <manage_access_group :server_message="{{ session('message') ?? $message ?? json_encode('') }}" :server_record="{{ session('record') ?? $record ?? json_encode('') }}"></manage_access_group>
           <edit_access_group :server_record="{{ session('record') ?? $record ?? json_encode('') }}"> </edit_access_group>
           <delete_access_group :server_record="{{ session('record') ?? $record ?? json_encode('') }}"> </delete_access_group>
    </div>

       </div>

   </div>

</div>

@endsection('content')