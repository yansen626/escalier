@extends('layouts.admin')

@section('content')

    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4> <i class="icon-table"></i> New Portofolio</h4>
                </div>
            </div>
        </div>
    </header>


    <div class="content-wrapper animatedParent animateOnce">
        <div class="container">
            <section class="paper-card">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body b-b">
                                <div class="container-fluid animatedParent animateOnce my-3">
                                    <div class="animated fadeInUpShort">
                                        <!-- Input -->
                                        {{ Form::open(['route'=>['admin.portofolio.store'],'method' => 'post','id' => 'general-form', 'enctype' => 'multipart/form-data']) }}

                                        @include('partials.admin._messages')
                                        @foreach($errors->all() as $error)
                                            <ul>
                                                <li>
                                            <span class="help-block">
                                                <strong style="color: #ff3d00;"> {{ $error }} </strong>
                                            </span>
                                                </li>
                                            </ul>
                                        @endforeach
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Upload Main Image *</label>
                                                            {{--<input type="file" name="PhotoPosted" id="PhotoPosted" class="file-loading">--}}
                                                            {!! Form::file('main_image', array('id' => 'main_image', 'class' => 'file-loading', 'accept' => 'image/*,application/pdf')) !!}
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="row">
                                                                <div class="col-md-12 mb-3">
                                                                    <label for="sku">Categories</label>
                                                                    <select id="category" name="category" class="custom-select form-control">
                                                                        <option value="-1">Select Category</option>
                                                                        @foreach($categories as $category)
                                                                            <option value="{{ $category->id }}" @if($category->id == old('category')) selected @endif >{{ $category->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-12 mb-3">
                                                                    <label for="validationCustom01">Portofolio Name</label>
                                                                    <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                                                                </div>
                                                                <div class="col-md-12 mb-3">
                                                                    <label for="sku">Portofolio Location</label>
                                                                    <input type="text" class="form-control" id="location" name="location" value="{{old('location')}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <label class="form-label">Upload Detail Image *</label>
                                                            {!! Form::file('detail_image[]', array('id' => 'detail_image', 'class' => 'file-loading', 'multiple' => 'multiple')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <a href="{{ route('admin.portofolio.index') }}" class="btn btn-danger">Exit</a>
                                                        <button class="btn btn-primary" type="submit">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        {{ Form::close() }}
                                    <!-- #END# Input -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection


@section('styles')
    <link href="{{ URL::asset('css/fileinput.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('js/fileinput.js') }}"></script>

    <script>
        // FILEINPUT
        $("#main_image")
            .fileinput({
                allowedFileExtensions: ["jpg", "jpeg", "png"],
                showUpload: false,
            });
        $("#detail_image")
            .fileinput({
                allowedFileExtensions: ["jpg", "jpeg", "png"],
                showUpload: false,
            });
    </script>
@endsection