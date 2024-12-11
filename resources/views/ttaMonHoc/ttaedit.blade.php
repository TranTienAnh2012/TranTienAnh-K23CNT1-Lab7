<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{Route('monhoc.edittsubmit')}}" method="POST">
            @csrf
            <div class="carf">
                <div class="card-header">
                    <h3>Thông Tin Chi Tiết Môn Học Cần Sửa: <b class="text-danger">{{$monHocs->ttaMaMH}}</b></h3>
                </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="ttaMaMH"  class="form-label">Mã Môn Học</label>
                            <input type="text" readonly class="form-control" 
                            id="ttaMaMH" name="ttaMaMH" 
                                value="{{ $monHocs->ttaMaMH }}">
                        </div>
                        <div class="mb-3">
                            <label for="ttaTenMH" class="form-label">Tên Môn Học</label>
                            <input type="text" class="form-control" 
                            id="ttaTenMH" name="ttaTenMH" 
                                value="{{ $monHocs->ttaTenMH }}">
                        </div>
                        <div class="mb-3">
                            <label for="ttaSoTiet" class="form-label">Số Lượng</label>
                            <input type="text" class="form-control" 
                            id="ttaSoTiet" name="ttaSoTiet" 
                                value="{{ $monHocs->ttaSoTiet }}">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary mx-2 ">Submit</button>
                        <a href="/monhoc" class="btn btn-primary">Back</a>
                    </div>
            </div>
        </form>
    </section>
</body>
</html>
