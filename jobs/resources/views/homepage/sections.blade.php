@extends('homepage.index')
@section('title')
    Find a Job    
@endsection
@section('content')
                            <!-- secondary header , search-->
                            <div class="row d-flex justify-content-around searchv">
                                <div class="col-12">
                                    <div class="row bg-info d-flex justify-content-around">
                                            <form class="form-inline d-flex justify-content-around" >    
                                                <div class="col-sm-12 col-md-2  mt-2 formc">
                                                 <input type="text" class="form-control sendnews text-info" placeholder="keywords">
                                                </div>
                                               <div class="col-sm-12 col-md-2 mt-2  formc">
                                                 <input type="text" class="form-control sendnews text-info" placeholder="location">
                                                </div>                                                                                    
                                                 <div class="col-sm-12  col-md-2 mt-2  formc">
                                                        <select class="form-control text-info" id="exampleFormControlSelect1" >
                                                            <option class="text-info">Any Category</option>
                                                            <option class="text-info"> 1</option>
                                                            <option class="text-info">2</option>
                                                            <option class="text-info"> 3</option>
                                                            <option class="text-info">4</option>
                                                            <option class="text-info">  5</option>
                                                      </select>                                                
                                                </div>
                                                <button type="submit" class="btn col-sm-12 col-md-2 btn-block formcb text-info font-weight-bold sendnewsbtn mt-2  mr-5">Search</button>
                                                 
                                            </form>
                                    </div>
                                </div>
                            </div>
                        
                    <!-- content -->
                    <div class="row d-flex justify-content-center mt-4">
                        <div class="col-sm-10 col-md-10">
                            <div class="tavlediv">
                                    <table class="table table-hover ">
                                            <thead>
                                              <tr class="text-info">
                                                <th scope="col"> </th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Company</th>
                                                <th scope="col">Job Vacancy</th>
                                                <th scope="col">City</th>
                                                <th scope="col">Salary</th>
                                                <th scope="col">Employment</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($str as $string)
                                              <tr>
                                                @if ($string->company_logo==null )
                                                {{$string->company_logo= "default.png"}}
                                                @endif
                                                @if ($string->checkue_pic==null )
                                                {{$string->checkue_pic= "default.png"}}
                                                @endif
                                                  <th scope="row"><img src="uploads/{{$string->company_logo}}" class="tableimg" alt="logo"></th>
                                                  <td>{{$string->created_at}}</td>
                                                  <td><img src="uploads/{{$string->checkue_pic}}" class="companyimg" alt="companyimg"></td>
                                                  <td>{{$string->title}}</td>
                                                  <td>{{$string->city}}</td>
                                                  <td>{{$string->salary}}</td>
                                                  <td>{{$string->category}}</td>
                                                </tr>  
                                              @endforeach
                                                                                          
                                            </tbody>
                                    </table>
                                    <div class="row d-flex justify-content-around">
                                        <div class="tabebtn  center-block">
                                             <button type="submit" class="btn  bg-info center-block text-white font-weight-bold ">Show More</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
@endsection