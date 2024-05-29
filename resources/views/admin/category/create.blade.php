<div class="container"div>
    <div class="row justify-content-center"div>
        <div class="col-md-8"div>
            <div class="card"div>
                <div class="card-header">thêm danh mục<div>
                <!-- validate dữ liệu nhập vào -->
                @if ($errors->any())
                    <div class="aleft aleft-danger">
                        <ul>
                            @foreach ($errors->all() as $errors)
                                <li>{{ @error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- kết thúc validate dữ liệu -->
                <div class="card-body">
                    @if (session('status'))
                        <div class ="alert alert-success" role="alert">
                            {{ session('status')}}
                        </div>
                    @endif
                </div>

                <from method="