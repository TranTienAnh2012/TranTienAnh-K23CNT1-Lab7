<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
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
        <form action="{{Route('Khoa.editsubmit')}}" method="POST">
            @csrf
            <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết khoa can sua</h3>
            </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="ttaMaKhoa" class="col-sm-2 col-form-label">Mã Khoa</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control" id="ttaMaKhoa"
                                   name="ttaMaKhoa" value="{{ $khoa->ttaMaKhoa }}">
                                </div>
                        </div>
                   </div>

                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="ttaTenKhoa" class="col-sm-2 col-form-label">Tên Khoa</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="ttaTenKhoa"
                                   name="ttaTenKhoa" value="{{ $khoa->ttaTenKhoa }}">
                                </div>
                        </div>
                   </div>

                    <div class="card-footer">
                        <button class="btn btn-primary mx-2">submit</button>
                    <a href="/khoa" class="btn btn-primary">Back</a>
                    </div>
        </div>
    </form>
        </section>
</body>
</html>

</body>
</html>
