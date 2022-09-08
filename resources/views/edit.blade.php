
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 Crud Application</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div style="padding: 50px"> </div>

    <div class="containe">

        <div class="row">

            <div class="col-sm-8 m-auto">
              <div class="card">

                <div class="card-header">
                   Update Student
                </div>
                @if(session("success"))

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session("success") }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                @endif




                <div class="card-body">

                    <form action="{{ url('student/update/'.$student->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" name="name" class="form-control   @error('name')
                          is-invalid    @enderror
                           id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->name }}">
                           @error('name')
                           <strong class="text-danger">{{ $message }} </strong>

                           @enderror

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Roll</label>
                            <input type="text" name="roll" class="form-control @error('roll')
                            is-invalid

                            @enderror"
                             id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->roll }}">

                             @error('name')
                             <strong class="text-danger">{{ $message }} </strong>

                             @enderror

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Class</label>
                            <input type="text" name="class" class="form-control  @error('class')
                            is-invalid
                            @enderror"" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{ $student ->class }}">

                            @error('name')
                            <strong class="text-danger">{{ $message }} </strong>

                            @enderror

                          </div>

                        <button type="submit" class="btn btn-primary">Update Student</button>

                      </form>
                </div>
              </div>
            </div>
          </div>



    </div>

</body>
</html>
