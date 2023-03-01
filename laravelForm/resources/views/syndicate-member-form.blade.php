<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Enter the details of the syndicate memebrs
    </div>
    <div class="card-body">
      <form name="syndicate-member-form" id="syndicate-member-form" method="post" action="{{url('sm-store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Member Name</label>
          <input type="text" id="member_name" name="member_name" class="form-control" required="">
        
          <label for="exampleInputEmail1">Designation</label>
          <input type="text" id="designation" name="designation" class="form-control" required="">
         
          <label for="exampleInputEmail1">Grade</label>
          <input type="text" id="grade" name="grade" class="form-control" required="">
        
          <label for="exampleInputEmail1">Member Title</label>
          <input type="text" id="member_title" name="member_title" class="form-control" required="">
        
          <label for="exampleInputEmail1">Member Since</label>
          <input type="text" id="member_since" name="member_since" class="form-control" required="">

          <label for="exampleInputEmail1">Member Upto</label>
          <input type="text" id="member_upto" name="member_upto" class="form-control" required="">

          <label for="exampleInputEmail1">Remarks</label>
          <input type="text" id="remarks" name="remarks" class="form-control" required="">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>