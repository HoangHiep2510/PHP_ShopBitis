@extends('admin_layout');
@section('admin_content');
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Sửa sản phẩm</h3></div>
                    @foreach($edit_category_product as $key)
                    <div class="card-body">
                        <form action="{{URL::to('/CapNhatSP/'.$key -> category_id)}}" method='post'>
                        {{csrf_field()}}
                        <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Tên sản phẩm</label>
                                <input value="{{$key -> category_name}}" class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Nhập tên sản phẩm" name="category_product_name"/>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Kích thước</label>
                                <input value="{{$key -> category_size}}" class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Nhập kích thước" name="category_product_size"/>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Màu sắc</label>
                                <input value="{{$key -> category_color}}" class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Nhập màu sắc" name="category_product_color"/>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Giá</label>
                                <input value="{{$key -> category_price}}" class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Nhập giá" name="category_product_price"/>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn primary" style="background-color:aquamarine;">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection;