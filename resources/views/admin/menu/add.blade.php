@extends('admin.main')
@section('head')
    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')

    <form action="" method="POST">
        <form class="card-body">

                <div class="form-group">
                    <label for="menu">Tên Danh Mục</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nhập tên danh mục">
                </div>

                <div class="form-group">
                    <label for="menu"> Danh Mục</label>
                     <select class="form-control" name="parent_id">
                    <option value="0"> Danh Mục Cha</option>
                        @foreach($menus as $menus)
                            <option value="{{ $menus->id }}"> {{$menus->name}}    </option>
                         @endforeach
                </select>
                </div>

                 <div class="form-group">
                    <label for="menu">Mô Tả </label>
                    <textarea name="desciption" class="form-control">{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="menu">Mô Tả Chi Tiết</label>
                    <textarea name="content" class="form-control">{{ old('content') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="menu">Giá Gốc</label>
                    <input type="number" name="price" value="{{ old('price') }}" class="form-control">
                 </div>

                <div class="form-group">
                    <label for="menu">Giá Giảm</label>
                    <input type="number" name="price_sales" value="{{ old('price_sale') }}" class="form-control">
                </div>

            <div class="form-group">
                <label for="menu">Ảnh Sản Phẩm</label>
                <input type="file" name="file" class="form-control" id="upload" >
                <div id="image_show">

                </div>
                <input type="hidden" name="thumb" id="file">

            </div>

                <div class="form-group">
                        <label>Kích Hoạt</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                            <label for="active" class="custom-control-label">Có</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                            <label for="active" class="custom-control-label">Không</label>
                        </div>
                    </div>
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
        </div>
            @csrf
        </form>
    </form>
@endsection

@section('footer')
            <script>
                CKEDITOR.replace('content');
            </script>
@endsection
