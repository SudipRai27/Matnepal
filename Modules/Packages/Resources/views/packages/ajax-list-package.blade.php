<div class="table-responsive" id="search-results">
 @if(count($packages))
 <br>
 <table class="table table-bordered table-hover">        
  <thead>
    <tr style="background-color:#333; color:white;">
    <th>SN</th>
    <th>Package Name</th>
    <th>Parent Category</th>
    <th>Package Description</th>    
    <th>Frontend Publishable</th>   
    <th>Is Featured</th>
    <th>Is Day Trip</th>
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>  
  <tbody>
  @foreach($packages as $index => $d)  
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->package_name}}</td>
    <td>{{ $d->parent_id == 0 ? 'root' : Modules\Packages\Entities\Packages::where('id', $d->parent_id)->pluck('package_name')[0]  }}</td>
    <td>{{ substr($d->package_description , 0 ,100) }} {{ strlen($d->package_description )>100 ? "..." : "" }}</td>
    <td>{{$d->show_in_frontend}}</td>    
    <td>{{$d->is_featured}}</td>
    <td>{{$d->is_day_trip}}</td>
    <td>
      <a href = "{{route('view-package', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-primary btn-flat" type="button" data-original-title="View Package"><i class="fa fa-fw fa-file"></i></button></a>        
      <a href = "{{route('edit-package', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Edit"><i class="fa fa-fw fa-edit"></i></button></a>
      <a href = "{{route('delete-package', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
    </td>
    </tr>
  @endforeach
  </tbody>
  @else
  <br>
  <div class="alert alert-danger alert-dismissable">
    <h4><i class="icon fa fa-warning"></i>NO PACKAGES AVAILABLE</h4>
  </div>              
  @endif  
  </table>
</div>