@extends('_layouts.master')

@section('body')
<div class="main-wrapper-blog flex flex-col">
    
    <div class="nav-blog text-xl bg-gray-800 inline-block px-10">
        <a href="/#blog" class="back-to-blog flex bg-green-500 items-center justify-center py-3">
            <span class="arrow inline-block">
            <span class="iconify" data-icon="ic:round-arrow-back-ios" data-inline="false"></span>
            </span>
            <span class="backto inline-block">
                Blog Index
            </span>
        </a>
    </div>
    <div class="body-content-blog bg-gray-100 w-full md:max-w-screen-md m-auto flex">
    @yield('bodymain')

    </div>
    <div class="footer">
    <hr>
    <div class="p-3">
    <a class="text-green-500" href="mailto:edrick613@gmail.com">Email me &nbsp</a>anytime to offer feedback, ask questions, or just say hello 
    </div>
    </div>

</div>
@endsection