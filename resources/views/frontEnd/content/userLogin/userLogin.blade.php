
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="row" style="padding: 110px; background-color:#ffcc99; ">
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
        <div class="col-md-6">
            <h1 class="fw-bolder text-dark text-left bg-light p-3 rounded">Login here</h1>

            <form class="bg-light shadow p-5 rounded" action="{{route('userLogin')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <h1 class="fw-bolder text-dark text-left bg-light p-3 rounded">Registration here</h1>

            <form class="bg-light shadow p-5 rounded" action="{{route('registration')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input required type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input required type="text" class="form-control" id="name" name="address">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Phone Number</label>
                <input required type="string" class="form-control" id="name" name="contact">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" required type="password" class="form-control" id="exampleInputPassword1">
            </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>



