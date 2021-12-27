@extends('layouts.app')

@section('Title')list
@endsection

@section('Content')<h1>list Page</h1>@endsection


@section('form')
<form action="{{ route('event-list')}}" method="get">
@csrf

<p>data</p>
@foreach ($reqs as $req)
<tr>
   <td class="table-text"><div>{{ $req->calendar }}</div></td>
</form>
@endforeach
@endsection