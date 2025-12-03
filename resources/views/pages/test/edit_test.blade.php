@extends('layout.layout')
@section('content')
 <main>
                    <div class="container-fluid px-4 main">
                        @include('alart.message')
                        <h1 class="mt-4">Edit page of test</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                          <form action="{{ route('update.page.test',$test->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div>
                                    <h3>Image</h3>
                                     <img style="height: 30vh" src="{{ url($test->own_image) }}" class="img-thumbnail" id="bigimage" >
                                     <input  class="mt-3" type="file" name="own_image" oninput="bigimage.src=window.URL.createObjectURL(this.files[0])">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ $test->title }}">
                                </div>
                                  <div>
                                    <label for="sub_title">Sub Title</label>
                                    <input type="text" name="sub_title" id="sub_title" class="form-control" value="{{ $test->sub_title }}">
                                </div>
                            </div>
                        </div>
                       <input type="submit" class="btn btn-success m-5">
                        
                    </form>
                       
                </main>
@endsection