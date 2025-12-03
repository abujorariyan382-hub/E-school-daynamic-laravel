@extends('layout.layout')
@section('content')
 <main>
                    <div class="container-fluid px-4 main">
                        @include('alart.message')
                        <h1 class="mt-4">List of test page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                         <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title1</th>
                                <th scope="col">sub Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                        <tr>
                                <th scope="row">{{ $test->id }}</th>
                                <td>{{ $test->title }}</td>
                                <td>{{ $test->sub_title }}</td>
                            
                                <td>
                                    <img style="height: 10vh" src="{{ url($test->own_image) }}" alt="">
                                </td>
                                <td>
                                    <div class="row d-flex">
          <div class="col-sm-2">
            <a class="btn btn-primary" href="{{ route('edit.test.page',$test->id) }}">Edit</a>
          </div>
          <div class="col-sm-2">
            <form action="{{ route('delete.page.test',$test->id) }}" method="POST">
              @csrf
              @method('delete')
              <input type="submit" name="submit" value="Delete" class="btn btn-danger">
            </form>
          </div>
        </div>
                                </td>
                            </tr>
                            
                    
                        </tbody>
                       </table>
                </main>
@endsection