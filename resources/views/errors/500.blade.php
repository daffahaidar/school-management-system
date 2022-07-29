@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error!'))
@section('detail', __('Sepertinya ada sedikit kesalahan pada server'))