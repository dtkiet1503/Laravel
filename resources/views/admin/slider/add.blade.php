@extends('admin.main')

@section('content')

    <form action="" method="POST">
        <form class="card-body">

            <div class="form-group">
                <label for="menu"> Tiêu Đề</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" >
            </div>

            <div class="form-group">
                <label for="menu"> Đường Dẫn</label>
                <input type="text" name="url" value="{{old('url')}}" class="form-control" >
            </div>




            <div class="form-group">
                <label for="menu">Ảnh Sản Phẩm</label>
                <input type="file" name="thumb" class="form-control" id="upload" >
                <div id="image_show">

                </div>
                <input type="hidden" name="thumb" id="thumb">

            </div>

            <div class="form-group">
                <label for="menu">Sắp Xếp</label>
                <input type="number" name="sort_by" value="1" class="form-control">
            </div>

            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="active" name="active"
                           value="1" {{ (int)old('active',1) === 1 ? 'checked' : ''}} >
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="no_active" name="active"
                           value="0" {{ (int)old('active',1) === 0 ? 'checked' : ''}}>
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm Slider</button>
            </div>
            @csrf
        </form>
    </form>
@endsection

