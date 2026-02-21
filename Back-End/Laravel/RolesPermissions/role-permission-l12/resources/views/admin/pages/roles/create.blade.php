@extends('admin.layouts.app')
@section('title', 'Manage Roles')
@section('main')

@section('pageName', isset($role) ? 'Edit Roles' : 'Create New Roles')

@include('admin.components.roles.add')

@endsection
