@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="borrow/create" class="btn btn-primary">Add Borrow</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Date</th>
                            <th>User Name</th>
                            <th>Total Amount</th>
                            <th>Action</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection