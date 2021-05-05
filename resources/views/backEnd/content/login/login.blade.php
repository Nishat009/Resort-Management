

<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <div class="row" style="padding: 115px; background: linear-gradient(to bottom right, #66ff33 0%, #ffffcc 100%);">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="col-md-6 m-auto">
            <h1 class="fw-bolder text-light text-center bg-dark p-3 rounded"> Admin Login here</h1>

            <form class="bg-light shadow p-5 rounded"  action="{{route('doLogin')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>

    </div>