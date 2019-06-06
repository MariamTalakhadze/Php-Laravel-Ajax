@extends('homepage.index')
@section('title')
    Post a Job    
@endsection
@section('content')
<div class="container">
    <html>
    <head>
        <meta charset="utf-8">
        <title> Post A Job</title>
      </head>
    <body>
        <div class="container mt-5 ">
              </div>
              @if ($errors->any())
                  <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                  </div><br />
              @endif
            <form class="" action="{{ url('/post') }}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="form-row d-flex justify-content-center">
                <div class="col-4">
                    <input type="text" name="company_name" class="form-control" placeholder="CompanyName">
                </div>
                <div class="col-4">
                    <input type="text" name="title" class="form-control" placeholder="JobTitle">
                </div>
                <div class="col-9 mt-2">
                    <textarea name="description" id="" cols="100" name="desc" rows="10" placeholder="description"></textarea>
                </div>
                <select class="form-control col-4 mt-2 " name="city" >
                    <option>City</option>
                    <option>Tbilisi</option>
                    <option>Borjomi</option>
                    <option>New York</option>
                    <option>Khulo</option>
                </select>
                <div class="col-4 mt-2">
                    <input type="text" class="form-control" name="salary"  placeholder="Salary">
                </div>
                <select class="form-control col-4 mt-2" name="category" >
                    <option>Category</option>
                    <option>It</option>
                    <option>Manager</option>
                    <option>Nothing</option>
                    <option>Slave</option>
                </select>
                <div class="col-4 mt-2">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-4 mt-2">
                        <input type="date" class="form-control" name="deadline" placeholder="DeadLine">
                </div>
                <div class="custom-file col-5 ">
                        <input type="file" name="company_logo" class="custom-file-input" value=" " id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label"  for="inputGroupFile01">Upload Company Logo</label>
                </div>
                <div class="custom-file col-5 ">
                        <input type="file"  name="checkue_pic" class="custom-file-input" value=" " id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01" >
                        <label class="custom-file-label"  for="inputGroupFile01" >Upload cheque pic</label>
                </div>
                <button type="submit">go to hell</button>       
          </form>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>
</div>

@endsection