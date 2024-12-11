<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> TTa Danh Sách Khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1> Danh Sach Khoa</h1> 
        <a href="khoa/insert" class="btn btn-dark  btn-lg fw-bold">Thêm</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Khoa</th>
                    <th>Tên Khoa</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @php
                 $stt=0;   
                @endphp
                @foreach ($ttakhoa as $item)
                    @php
                    $stt++;
                    @endphp
                        <tr>
                            <Td>{{$stt}}</Td>
                            <td>{{$item->ttaMaKhoa}}</td>
                            <td>{{$item->ttaTenKhoa}}</td>
                            <td>
                                <a href="/khoa/detail/{{$item->ttaMaKhoa}} " class="btn btn-success">chi tiet</a>
                            
                                <a href="/khoa/edit/{{$item->ttaMaKhoa}} " class="btn btn-primary " >Sửa <i class="fa-solid fa-pen"></i></a>
                                <form action="{{ route('Khoa.delete', ['makh' => $item->ttaMaKhoa]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">
                                        Xóa 
                                    </button> 
                                </form>
                                <form action="{{ route('Khoa.delete', ['makh' => $item->ttaMaKhoa]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">
                                         <i class="fa-solid fa-trash"></i>
                                    </button> 
                                </form>
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>