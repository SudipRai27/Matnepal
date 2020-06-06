
<form action="{{ route('user-create-post') }}" method="POST" enctype="multipart/form-data">
 <div class="box-body">
   <div class="form-group">
	Name: <input type="text" name="name" class="form-control">
	<div id="msg" style="color:red;">{{ $errors->first('name') }}</div>
   </div>
   <div class="form-group">
	Email: <input type="email" name="email" class="form-control">
	<div id="msg" style="color:red;">{{ $errors->first('email') }}</div>
   </div>
   <div class="form-group">
	Password: <input type="password" name="password" class="form-control">
	<div id="msg" style="color:red;">{{ $errors->first('password') }}</div>
   </div>
   <div class="form-group">	
	Address: <input type="text" name="address" class="form-control">
	<div id="msg" style="color:red;">{{ $errors->first('address') }}</div>
   </div>
   <div class="form-group">
	Contact: <input type="text" name="contact" class="form-control">
	<div id="msg" style="color:red;">{{ $errors->first('contact') }}</div>
   </div>
  </div>
	<input type="file" name="photo" class="form-control">
	<div id="msg" style="color:red;">{{ $errors->first('photo') }}</div>	
   <div class="box-footer">
	<input type="submit" name="Submit" value="submit" class="btn btn-primary">
   </div>
	{{ csrf_field() }}
</form>

