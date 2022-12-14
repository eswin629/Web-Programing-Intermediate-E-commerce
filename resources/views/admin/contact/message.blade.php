@extends('admin.admin_master')

@section('admin')


    <div class="py-12">

        <div class="container">
            <div class="row">

                <h4>Admin Message</h4>
                {{-- <a href="{{ route('add.contact') }}"><button class="btn btn-info">Add Contact</button></a> --}}
                <br><br>
                <div class="col-md-12">
                    <div class="card-lg-0">

                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          @endif

                        <div class="card-header">All Message Data</div>

                <table class="table">
                    <thead>
                      <tr>
                          <th scope="col" width="10%">SL </th>
                          <th scope="col" width="10%">Name</th>
                          <th scope="col" width="15%">Email</th>
                          <th scope="col" width="15%">Subject</th>
                          <th scope="col" width="25%">Message</th>
                          <th scope="col" width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($messages as $mess)
                        <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $mess->name }}</td>
                        <td>{{ $mess->email }}</td>
                        <td>{{ $mess->subject }}</td>
                        <td>{{ $mess->message }}</td>
                                                        
                        <td>
                            
                            <a href="{{ url('message/delete/'.$mess->id) }}" onclick="return confirm('are you sure to delete?')" class="btn btn-danger">Delete</a>
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