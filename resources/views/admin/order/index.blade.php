@extends('admin.layouts._masterLayout')

@section('content')
<div class="container-fluid">
    <div class="block">
        <div class="title"><strong>Orders</strong></div>
        {{-- <a href="{{ route('admin.product.create') }}" class="btn btn-primary text-black">Add new</a> --}}
        <div class="table-responsive"> 
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>User</th>
                <th>Receiver Name</th>
                <th>Phone Number</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
                <tr>
                  <th scope="row">{{ $order->id }}</th>
                  <td>{{ $order->user->email }}</td>
                  <td>{{ $order->first_name . ' ' . $order->last_name }}</td>

                  <td>{{ $order->phone_number }}</td>
                  <td>{{ $order->total_amount }}</td>
                  <td ><input type="submit" readonly class="btn btn-primary text-black" value="{{ $order->status == 0 ? 'Pending' : 'Complete'}}"></td>
                  <td>
                    <a href="#" class="btn btn-primary text-black">Detail</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>

    
@endsection