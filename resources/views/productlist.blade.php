@extends('layouts.master')
@section('content')
    
    <productlist-component :brand_id={{$brand_id}}></productlist-component>
@endsection