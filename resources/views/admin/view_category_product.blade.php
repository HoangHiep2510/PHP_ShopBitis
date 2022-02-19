@extends('admin_layout');
@section('admin_content');
<main>
    <div class="container-fluid">
        <h1 class="mt-4">THỐNG KÊ SẢN PHẨM</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{URL::to('admin/')}}">Trang chủ Admin</a></li>
            <li class="breadcrumb-item active">Thống kê sản phẩm</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Thống kê danh mục sản phẩm                             
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Thống kê danh sách sản phẩm
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Size</th>
                                <th>Màu</th>
                                <th>Giá</th>
                                <th colspan="2">Cập nhật</th>
                            </tr>
                        </thead>
                        <thead>
                        @foreach($view_category_product as $key => $cate_pro)
                            <tr>
                                <td>{{$cate_pro -> category_id}}</td>
                                <td>{{$cate_pro -> category_name}}</td>
                                <td>{{$cate_pro -> category_size}}</td>
                                <td>{{$cate_pro -> category_color}}</td>
                                <td>{{$cate_pro -> category_price}}</td>
                                <td>
                                    <a href="{{URL::to('/SuaSP/'.$cate_pro->category_id)}}">Sửa</a>
                                </td>
                                <td>
                                    <a href="{{URL::to('/XoaSP/'.$cate_pro->category_id)}}">Xoá</a>
                                </td>
                            </tr>
                        @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection;