@extends('layouts.master')
@section('content')
    
    <productdetails-component :product_id={{$product_id}}></productdetails-component>
@endsection