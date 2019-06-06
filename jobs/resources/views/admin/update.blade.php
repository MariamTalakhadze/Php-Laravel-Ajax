<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"}}>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <form action="{{action('admincontroller@show', $dd->id)}}" method="post">
        @csrf
                    <div class="form-group float-label-control">
                        <label for="">Company Name</label>
                        <input type="text" class="form-control" name="company_name" placeholder="{{$dd->company_name}}">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="{{$dd->title}}">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">City</label>
                        <input type="text" class="form-control" name="city" placeholder="{{$dd->city}}">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">Salary</label>
                        <input type="text" class="form-control"name="salary" placeholder="{{$dd->salary}}">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">category</label>
                        <input type="text" class="form-control"name="category" placeholder="{{$dd->category}}">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">email</label>
                        <input type="text" class="form-control"name="email" placeholder="{{$dd->email}}">
                    </div>
                    <div class="form-group float-label-control">
                            <label for="">Publish?</label>
                            <input type="text" class="form-control"name="isPublished"placeholder="{{$dd->isPublished}}">
                    </div>
                    <button type="submit">gogo</button>
     </form>
    
</body>
</html>