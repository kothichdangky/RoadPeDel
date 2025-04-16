@extends('layouts.navadmin')
@section('content')


<div class="container">

    <div class="card">
        <h5 class="card-header">Thêm Sản Phẩm</h5>
        <div class="card-body">
            <form method="post" action="{{ route('road.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    <input name="image" type="file" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">tên</label>
                    <input name="name" type="text" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Giới thiệu</label>
                    <input name="intro" type="text" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">giá</label>
                    <input name="price" type="text" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">giá giảm</label>
                    <input name="price_sale" type="text" class="form-control" >
                </div>


                <button type="submit" class="btn btn-warning-2">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection

