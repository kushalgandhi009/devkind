@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr style="text-align: center">
                <th scope="col" >User Id</th>
                <th scope="col" >Log Name</th>
                <th scope="col" >Description</th>
                <th scope="col" >Subject Id</th>
                <th scope="col" >Subject Type</th>
                <th scope="col" >Causer Id</th>
                <th scope="col" >Causer Type</th>
                <th scope="col" >created_at</th>
                <th scope="col" >updated_at</th>
            </tr>

            </thead>
            <tbody>
            @foreach($activity as $log)
                <tr>
                    <td>{{ $log->id }}</td>
                    <td>{{ $log->log_name }}</td>
                    <td>{{ $log->description }}</td>
                    <td>{{ $log->subject_id }}</td>
                    <td>{{ $log->subject_type }}</td>
                    <td>{{ $log->causer_id }}</td>
                    <td>{{ $log->causer_type }}</td>
                    <td>{{ $log->created_at }}</td>
                    <td>{{ $log->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
