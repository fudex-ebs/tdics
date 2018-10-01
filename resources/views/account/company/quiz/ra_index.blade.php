@extends('layouts.company')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> 
                
                  <a class="btn btn-primary" href="{{route('create_ra_quiz')}}">اضافة رول</a>
                  
                </div>

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
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($quizzes as $count => $quiz)
                        <tr>

                          <th scope="row">{{$count+1}}</th>
                          <td>{{$quiz->slug}}</td>
                          <td>{{$quiz->used ? 'yest':'no'}}</td>
                          <td><a href="{{ route('answer_quiz',$quiz->slug) }}">answer</a></td>
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
