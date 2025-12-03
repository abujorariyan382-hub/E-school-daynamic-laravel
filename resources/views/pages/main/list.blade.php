@extends('layout.layout')
@section('content')
 <main>
                    <div class="container-fluid px-4 main">
                        @include('alart.message')
                        <h1 class="mt-4">List Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                       <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title1</th>
                                <th scope="col">Title2</th>
                                <th scope="col">Title3</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $main->id }}</th>
                                <td>{{ $main->title1 }}</td>
                                <td>{{ $main->title2 }}</td>
                                <td>{{ $main->title3 }}</td>
                                <td>
                                    <img style="height: 10vh" src="{{ url($main->main_image) }}" alt="">
                                </td>
                                <td>
                                    <dif class="row d-flex">
          <div class="col-sm-2">
            <a class="btn btn-primary" href="{{ route('edit.page',$main->id) }}">Edit</a>
          </div>
          <div class="col-sm-2">
            <form action="{{ route('delete.page',$main->id) }}" method="POST">
              @csrf
              @method('delete')
              <input type="submit" name="submit" value="Delete" class="btn btn-danger">
            </form>
          </div>
        </dif>
                                </td>
                            </tr>
                        </tbody>
                       </table>
                </main>
@endsection