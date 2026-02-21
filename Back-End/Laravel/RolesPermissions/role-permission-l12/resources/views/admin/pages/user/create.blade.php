@extends('admin.layouts.app')
@section('title', 'Manage Users')
@section('main')

@section('pageName', isset($user) ? 'Edit User' : 'Create New User')

@include('admin.components.user.add')

@endsection
