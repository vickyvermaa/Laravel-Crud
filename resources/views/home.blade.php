<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud | Coderider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container my-3">
    <div class="row">
        <div class="col-6">
            <form action="{{url('create')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">City</label>
                  <input type="text" name="city" class="form-control" id="exampleInputCity1" placeholder="Enter city">
                </div>
                <div class="form-group">
                    <label for="exampleInputMarks1">Marks</label>
                    <input type="text" name="marks" class="form-control" id="exampleInputPassword1" placeholder="Enter Marks">
                  </div>
                <button type="submit" class="btn btn-primary my-3">Submit</button>
              </form>
        </div>
        <div class="col-6">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">Marks</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($students as $stu)
                    <tr>
                      <th scope="row">{{$i}}</th>
                      <td>{{$stu->name}}</td>
                      <td>{{$stu->city}}</td>
                      <td>{{$stu->marks}}</td>
                      <td>
                        <a href="{{url('edit',$stu->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                        <a href="{{url('delete',$stu->id)}}" class="btn btn-outline-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
              </table>
        </div>
        @if (session()->has('status'))
        <div class="alert alert-primary" role="alert">
            <strong>{{session('status')}}</strong>
        </div>
        @endif
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
