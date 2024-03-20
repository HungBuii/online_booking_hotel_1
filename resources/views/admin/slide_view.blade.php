@extends('admin.layout.app')

@section('heading', 'View Slides')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slides as $row)
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="{{ asset('/uploads/'.$row->photo) }}" alt="" class="w_200">
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal1">Edit</button>
                                        <a href="" class="btn btn-danger"
                                            onClick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection