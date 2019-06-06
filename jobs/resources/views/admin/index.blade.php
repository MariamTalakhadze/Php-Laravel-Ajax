<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href={{"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"}}>
  <title>Admin</title>
</head>
<body>

 <div class="container">
     <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div><br />
        @endif
         
         <div class="col-md-12">
         <h4>Bootstrap Snipp for Datatable</h4>
         <div class="table-responsive">
 
                 
               <table id="mytable" class="table table-bordred table-striped">
                    
                    <thead>
                    <th>Company Name</th>
                     <th>Title</th>
                      <th>City</th>
                      <th>Salary</th>
                      <th>Category</th>
                      <th>email</th>
                      <th>published</th>
                      <th>confirm</th>
                       <th>Edit</th>
                        <th>Delete</th>
                    </thead>
     <tbody>
     
     @foreach ($str as $string)
     <tr>
      <td>{{$string->company_name}}</td>
      <td>{{$string->title}}</td>
      <td>{{$string->city}}</td>
      <td>{{$string->salary}}</td>
      <td>{{$string->category}}</td>
      <td>{{$string->email}}</td>
      <td> @if ($string->isPublished==1)
          yes              
          @else
           no   
          @endif
    </td>
      {{-- <td><a href={{"route()"}}><p data-placement="top" data-toggle="tooltip" title="Confirm"><button class="btn btn-success btn-xs" data-title="Confirm" data-toggle="modal" data-target="#Confirm" ><span class="glyphicon">Confirm</span></button></p></td></a>
      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button  data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil">Edit</span></button></p></td>
      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash">Delete</span></button></p></td> --}}
     <td><form action="{{action('admincontroller@confirm', $string->id)}}" method="POST">
      @csrf
        <button type="submit"class="btn btn-success btn-xs">confirm</button>
      </form></td>
      <td><form action="{{action('admincontroller@edit', $string->id)}}" method="POST">
          @csrf
            <button type="submit"class="btn btn-primary btn-xs"> Edit</button>
          </form></td>
      <td><form action="{{action('admincontroller@delete', $string->id)}}" method="POST">
      @csrf
        <button type="submit"class="btn btn-danger btn-xs">Delete</button>
      </form></td>
    </tr> 
     @endforeach
     </tbody>
         
 </table>
             </div>
         </div>
     </div>
 </div> 


 <!-- Footer -->
 <footer id="sticky-footer" class="py-4 bg-dark text-white-50 bg-info">
        <div class="container text-center">
          <small>Copyright &copy; Your Website</small>
        </div>
  </footer>
</body>
</html>