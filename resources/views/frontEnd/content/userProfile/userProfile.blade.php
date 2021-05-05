<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
        <div class="col-md-6">
            <div class=" ">
                  <div class="row row-cols-1 row-cols-sm-2 g-3 ">
                    <div class="col ">
                            <h4 class="text-dark">Name:{{auth()->user()->name}} </h4>
                            <p class="text-dark">User email:{{auth()->user()->email}} </p>
                            <p class="text-dark">User email:{{auth()->user()->phone}} </p>
                            <p class="text-dark">User email:{{auth()->user()->address}} </p>


                      </div>
                    </div>
                  </div>
                </div>

            </div>
        </div>
        <div class="col-md-4 bg-warning">
            <table class="table mt-5 pt-5 shadow rounded bg-light">
                <thead>


                  <!-- {{-- <tr>
                    <th scope="col">serial</th>
                    <th scope="col">course_name</th> --}}

                  </tr>
                </thead> -->
                <!-- {{-- </thead>
                @foreach ($course as $key=> $data)
                <tbody>
                  <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$data->enrollCourse->course_name}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('studentViewLesson',$data->enrollCourse->id)}}">view lesson </a>
                    </td>

                  </tr>
                  @endforeach --}} -->
                </tbody>
              </table>
        </div>

    </div>
</body>
</html>