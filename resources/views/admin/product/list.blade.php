@extends('admin.main')


@section('content')
    <table class="'table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Danh Mục</th>
            <th>Giá Gốc</th>
            <th>Giá Khuyến Mãi</th>
            <th>Hoạt Động</th>
            <th>Cập Nhật</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key => $product)
        <tr>
            <td>{{     $product->id    }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->menu }}</td>
            <td>{{     $product->price    }}</td>
            <td>{{ $product->price_sale }}</td>
            <td>{!!   \App\Helpers\Helper::active($product->active) !!}</td>
            <td>{{ $product->updated_at}}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
               <i class="fas fa-edit"></i>

                </a>
                <a href="#" class="btn btn-danger btn-sm"
                   onclick="removeRow({{ $product->id }}, '/admin/products/destroy')">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <i class="fas fa-trash"></i>

                </a>
            </td>
        </tr>

        @endforeach
        </tbody>
    </table>

    <div class="card-footer clearfix">
        {{ $products->links() }}
    </div>
@endsection
