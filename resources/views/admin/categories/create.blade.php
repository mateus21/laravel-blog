@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-center">Create a new category</h1>
        </div>

        @include('admin.layouts.errors')

        <div class="panel-body">
            <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Name of Category</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@stop