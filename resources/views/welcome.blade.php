{{--@if($itemcount = count($items))--}}
    {{--<p>{{$itemcount}} 종류의 과일이 있습니다.</p>--}}
    {{--@else--}}
{{--<p>뻥치시네~~</p>--}}
    {{--@endif--}}



<ul>
    <?php $items = nullValue(); ?>
        @forelse($items as $item)
            <li>{{$item}}</li>
        @empty
            <li>헐 왈라네</li>
        @endforelse
</ul>



{{--@extends('layouts.master')--}}
@extends('layouts.master')

{{--@section('style')--}}
    {{--<style>--}}
        {{--body{background: green; color: white;}--}}
    {{--</style>--}}
{{--@endsection--}}



