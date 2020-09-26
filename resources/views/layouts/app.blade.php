
@include('inc/head')
@include('inc/head-scripts')
@include('inc/header')

<div id="front-end">
    @switch($type)
    @case($type)
    @if($type === 'page')
        @include('components/page')
        @break
    @else
        @include('components/detail_components/'.$category)
        @break
    @endif



    @default
    @include('components/page')

@endswitch
</div>

@include('inc/footer')
@include('inc/scripts')
