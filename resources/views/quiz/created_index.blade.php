@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> 
                <form  action="{{route('quiz_store')}}" method="POST">
                  @csrf
                  <button class="btn btn-primary" >اضافة کود</button>
                  
                </form></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($quizzes->isEmpty())
                        <p> لايوجد سوال</p>
                    @else
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">quiz_code</th>
                          <th scope="col">used</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($quizzes as $count => $quiz)
                        <tr>

                          <th scope="row">{{$count}}</th>
                          <td>{{$quiz->slug}}</td>
                          <td>{{$quiz->used}}</td>
                          
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
