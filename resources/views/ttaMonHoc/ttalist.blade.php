<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> TTa Danh Sách Khoa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1> Danh Sach Môn Học</h1> 
        <a href="/monhoc/insert" class="btn btn-warning  btn-lg fw-bold" >Thêm <i class="fa-regular fa-square-caret-down"></i></a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Môn Học</th>
                    <th>Tên Môn Học</th>
                    <th>Số Tiết</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @php
                 $stt=0;   
                @endphp
                @foreach ($monHocs  as $item)
                    @php
                    $stt++;
                    @endphp
                        <tr>
                            <Td>{{$stt}}</Td>
                            <td>{{$item->ttaMaMH}}</td>
                            <td>{{$item->ttaTenMH}}</td>
                            <td>{{$item->ttaSoTiet}}</td>
                            <td>
                                <a href="/monhoc/detail/{{$item->ttaMaMH}} " class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                               <a href="//monhoc/edit/{{$item->ttaMaMH}} "class="btn btn-info "><i class="fa-solid fa-up-right-from-square"></i></a>
                               <a href="/monhoc/delete/{{$item->ttaMaMH}} " class="btn btn-danger " 
                                onclick="return confirm('Bạn có chắc chắn muốn xóa môn học này không? Mã:'+{{$item->ttaMaMH}});">
                                <i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>