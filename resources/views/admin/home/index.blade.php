@extends('admin.admin_master')

@section('admin')


    <div class="py-12">

        <div class="container">
            <div class="row">

                <h4>Home About</h4>
                <a href="{{ route('add.about') }}"><button class="btn btn-info">Add About</button></a>
                <br><br>
                <div class="col-md-12">
                    <div class="card-lg-0">

                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          @endif

                        <div class="card-header">All About Data</div>

                <table class="table">
                    <thead>
                      <tr>
                          <th scope="col" width="10%">SL </th>
                          <th scope="col" width="10%">Home Title</th>
                          <th scope="col" width="15%">Short Description</th>
                          <th scope="col" width="25%">Long Description</th>
                          <th scope="col" width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($homeabout as $about)
                        <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $about->title }}</td>
                        <td>{{ $about->short_dis }}</td>
                        <td>{{ $about->long_dis }}</td>
                                                        
                        <td>
                            <a href="{{ url('about/edit/'.$about->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('about/delete/'.$about->id) }}" onclick="return confirm('are you sure to delete?')" class="btn btn-danger">Delete</a>
                        </td>   
                    </tr>
                        @endforeach
                  </tbody> 
                    </table>
                    {{-- {{ $brands->links() }} --}}
</div>
    </div> 
    
            </div>
        </div>






    </div>
{{-- </x-app-layout> --}}
 @endsection