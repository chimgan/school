@extends('layouts.master')

@section('title', 'Shop Product List')

@section('sidebar')
@endsection

@section('content')
    <a href="{{ URL::route('home') }}">Back to Shop List</a>
    <p><strong>Shop "{{ $shop->title }}" Product list:</strong></p>
    <p>
        <table class="table table-bordered">
            <thead>
            <th>Id</th>
            <th>Product title</th>
            <th>Code</th>
            <th>Action</th>
            </thead>
            <tbody>
            @foreach($shop->products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->code }}</td>
                    <td>
                        {!! Form::open(['url' => 'deleteItem']) !!}
                        {!! Form::hidden('shopId', $shop->id) !!}
                        {!! Form::hidden('productId', $product->id) !!}
                        {!! Form::submit('Remove product') !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <a href="{{ URL::route('home') }}">Back to Shop List</a>
    </p>
@endsection
