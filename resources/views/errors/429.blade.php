@extends('errors::minimal')

@section('title', __('Terlalu Banyak Permintaan'))
@section('code', '429')
@section('message', __('Terlalu Banyak Permintaan!'))
@section('detail', __('Anda sudah melebihi batas permintaan'))