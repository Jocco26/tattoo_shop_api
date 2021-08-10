@extends('layouts.master')
@section('title','some brands')
@section('content')
    
    <brandlist-component :passed_data={{$brand_id}}></brandlist-component>
@endsection