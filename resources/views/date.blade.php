@extends('layouts.app')
@section('content')

<!-- Content area -->
<div class="content">

<!-- Media library -->
<div class="panel panel-white">
<div class="panel-heading">
<h6 class="panel-title text-semibold">List date user</h6>
<div class="heading-elements">
<ul class="icons-list">
          <li><a data-action="collapse"></a></li>
          <li><a data-action="reload"></a></li>
          <li><a data-action="close"></a></li>
        </ul>
      </div>
</div>

<table class="table table-striped media-library table-lg">
          <thead>
              <tr>
                <th><input type="checkbox" class="styled"></th>
                  <th>Preview</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>File info</th>
                  <th class="text-center">Actions</th>
              </tr>
          </thead>
          <tbody>@foreach($data as $user)
              <tr>
                <td><input type="checkbox" class="styled"></td>
              <td>
                <a href="{{asset('LTR/assets/images/poto.jpg')}}" data-popup="lightbox">
                  <img src="{{asset('LTR/assets/images/poto.jpg')}}" alt="" class="img-rounded img-preview">
                </a>
              </td>
              <td><a href="#">{{ $user->name }}</a></td>
              <td><a href="#">{{ $user->email }}</a></td>
              <td>{{ $user->updated_at }}</td>
              <td>
                <ul class="list-condensed list-unstyled no-margin">
                  <li><span class="text-semibold">Size:</span> 215 Kb</li>
                  <li><span class="text-semibold">Format:</span> .jpg</li>
                </ul>
              </td>
              <td class="text-center">
                  <ul class="icons-list">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="icon-menu9"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="{{ route('edit', $user->id) }}"><i class="icon-pencil7"></i> Edit file</a></li>
          <li><a href="#"><i class="icon-copy"></i> Copy file</a></li>
          <li><a href="#"><i class="icon-eye-blocked"></i> Unpublish</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="icon-bin"></i> Move to trash</a></li>
          <li><center><form method="POST" action="{{route('delete', $user->id)}}">
             {{method_field('DELETE')}}
             {{csrf_field()}}
             <input type="submit"  type="button" class="Rounded button" value="----Move to trash----"></a></li>
          </form></li>
        </ul>
      </li>
    </ul>@endforeach

              </td>
              </tr>
          </tbody>
      </table>
    </div>
    <!-- /media library -->
@endsection
