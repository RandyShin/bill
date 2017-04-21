{{--@extends('layouts.master')--}}
@extends('layouts.master')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<table class="table table-bordered">
    <thead>
        <tr>
            <td>No.</td>
            <td>Src</td>
            <td>Dst</td>
            <td>In / Out</td>
            <td>Duration</td>
            <td>Billsec</td>
            <td>Increment</td>
            <td>Time</td>
            <td>Disposition</td>
        </tr>
    </thead>


    <tbody>
        @foreach($cdrs as $key=>$cdr)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $cdr->src }}</td>
                <td>{{ $cdr->dst }}</td>
                @if( strlen($cdr->src) > 4)
                    <td>In</td>
                @else
                    <td>Out</td>
                @endif
                <td>{{ $cdr->duration }}</td>
                <td>{{ $cdr->billsec }}</td>
                {{--@if( substr($cdr->dst, 0, 2)  === 01 )--}}
                    {{--<td>{{ $cdr->billsec / 10 }}</td>--}}
                {{--@else--}}
                    {{--<td>{{ $cdr->billsec / 180 }}</td>--}}
                {{--@endif--}}
                @if (substr($cdr->dst,0,2) == 01)
                    <td>{{ ceil($cdr->billsec / 10) }}</td>
                @else
                <td>{{ ceil($cdr->billsec / 180) }}</td>
                @endif
                <td> {{ substr($cdr->calldate, 11, 8) }}</td>
                <td>{{ $cdr->disposition }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
