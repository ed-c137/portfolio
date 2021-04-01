@extends('_layouts.bloglayout')

@section('bodymain')

<div class="">
<h1 class="text-2xl p-10">{{ $page->title }}</h1>
<p>By {{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>
<div class="post-content px-10 rounded bg-gray-400 text-gray-50 space-y-4 py-20 pb-32">
    @yield('contentpost')
        
        </div>
    
</div>
@endsection
