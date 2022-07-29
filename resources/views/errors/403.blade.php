@extends('errors::minimal')

@section('title', __('Halaman Tidak Diizinkan'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Halaman Tidak Diizinkan'))
@section('detail', __('Anda tidak diperbolehkan mengakses halaman ini'))