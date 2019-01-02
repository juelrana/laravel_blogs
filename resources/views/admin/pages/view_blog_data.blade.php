@extend('admin.admin_master')
@section('admin_main_content')
<div id="page-wraper">
  <div class="row-fluid">
    <div class="span12">
      <!-- BEGIN BASIC PORTLET-->
      <div class="widget orange">
        <div class="widget-title">
          <h4><i class="icon-reorder"></i> BLogs Table</h4>
          <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <a href="javascript:;" class="icon-remove"></a>
          </span>
        </div>
      </div>
      <div class="widget-body">
        <table class="table table-striped table-bordered table-advance table-hover">
          <thead>
            <tr>
              <th>Image:</th>>
              <th>Blog</th>
              <th >Author</th>
              <th >Description</th>
              <th >Category </th>
              <th>Status</th>
              <th><i class=" icon-edit"></i> Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach($all_blog_info as $vblog)
            <tr>
              <td><img src="{{URL::asset($vblog->image)}}" height="400px" width="400px"></td>
              <td>{{$vblog->blog_name}}</td>
              <td >{{$vblog->author_name}}</td>
              <td >{{$vblog->short_description}}</td>
              <td >{{$vblog->category_id}}</td>
              @if($vblog->publication_status)
              <td >  <button class="btn btn-success">Publish</button></td>
              @else
              <td>  <button class="btn btn-danger">Unpublish</button></td>
              @endif

              <td>

                @if($vblog->publication_status)

                <a href="{{URL::to('unpublish-blog/'.$vblog->blog_id)}}" class="btn btn-danger"><i class="icon-question-sign"></i></a>
                @else
                <a href="{{URL::to('publish-blog/'.$vblog->blog_id)}}" class="btn btn-success"><i class="icon-ok"></i></a>
                @endif

                <a href="{{URL::to('edit-blog/'.$vblog->blog_id)}}"
                  class="btn btn-primary" onclick="return checkDelete()">
                  <i class="icon-pencil"></i></a>

                  <a href="{{URL::to('delete-blog/'.$vblog->blog_id)}}" class="btn btn-danger" onclick="return checkDelete()"><i class="icon-trash "></i></a>
                </td>
            </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- END BASIC PORTLET-->
    </div>
  </div>

</div>
@endsection