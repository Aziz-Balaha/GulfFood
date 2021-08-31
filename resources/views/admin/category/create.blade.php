@extends('admin.layouts.main')
@section('content')
    <div class="m-10" style="background-color: white">
    <form class="form" method="post" action="{{route('category.store')}}" id="addform">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" name="name" class="form-control form-control-solid" placeholder="Enter category name"/>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2" id="addbutton">Submit</button>
            <input type="reset" class="btn btn-secondary" value="Cancel">
        </div>
    </form>
</div>
@stop
