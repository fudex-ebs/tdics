@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">answerd quiz</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($quizzes->isEmpty())
                        <p> لايوجد </p>
                    @else
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">question</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($quizzes as $count => $quiz)
                        <tr>

                          <th scope="row">{{$count}}</th>
                          <td>{{$quiz->slug}}</td>
                          
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
