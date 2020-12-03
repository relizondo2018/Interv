<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <form id="loginForm">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" required> 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">





  $('#loginForm').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url: "{{url ('login2')}}",
      type:'POST',
      data: $('#loginForm').serialize(),
      success: function(data) {
        console.log(data);
        if(data.status == 'success'){
          // Success
          window.location.href = "{{url('home2')}}";
        }
        else{
          alert("Datos Incorrectos"); 
        }
      },
      error: function (err) {
      }
    });
  });

</script>



