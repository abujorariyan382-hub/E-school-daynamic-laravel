@extends('layout.layout')
@section('content')
 <main>
                    <div class="container-fluid px-4 main">
                        @include('alart.message')
                        <h1 class="mt-4">Main page </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.main.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Main</li>
                        </ol>
                       <form action="{{ route('store.main') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4">
                                <div>
                                     <h3>Image</h3>
                    <img style="height: 30vh" src="{{ asset('img/Illustration.png')}}" class="img-thumbnail" id="prevImage" >
                        <input  class="mt-3" type="file" name="main_image" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <label for="title1">Title 1</label>
                                    <input type="text" name="title1" id="title1" class="form-control">
                                </div>
                                <div>
                                    <label for="title2">Title 2</label>
                                    <input type="text" name="title2" id="title2" class="form-control">
                                </div>
                                <div>
                                    <label for="title3">Title 2</label>
                                    <input type="text" name="title3" id="title3" class="form-control">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success m-5">
                    
                    
                    
                    </form>
                </main>
@endsection