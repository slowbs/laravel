@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Admin2</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <table class="table table-bordered" style="text-align:center">
                <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                </tr>
                @foreach ($users as $user)
                <tr>
      <td>{{$user->a}}  </td>
      <td>{{$user->b}}  </td>
      <td>{{$user->c}}  </td>
      <td>{{$user->d}}  </td>  
      </tr>
    @endforeach

                </table>


                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
