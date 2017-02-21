@extends('layouts.master')

@section('title', 'Shops list')

@section('sidebar')
@endsection

@section('content')
    <p><strong>Shops list:</strong></p>
    {{ $shopList->links('partials.pagination') }}
    <p>
    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Shop title</th>
            <th>Products</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($shopList as $shop)
            <tr>
                <td>{{ $shop->id }}</td>
                <td><a href="{{ URL::route('shop', $shop->id) }}">{{ $shop->title }}</a></td>
                <td>
                    {!! Form::open(['url' => 'addItem']) !!}
                    {!! Form::hidden('shopId', $shop->id) !!}
                    {!! Form::select('productIds', $shop->notAddProducts(), null,
                                    ['multiple' => true, 'name' => 'productIds[]']) !!} <br />
                </td>
                <td>
                    {!! Form::submit('Add products') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </p>
    {{ $shopList->links('partials.pagination') }}
@endsection
