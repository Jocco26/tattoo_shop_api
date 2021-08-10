@extends('layouts.master')
@section('title','some brands')
@section('content')
    
    <brandlist-component :brand_id={{$brand_id}}></brandlist-component>
@endsection