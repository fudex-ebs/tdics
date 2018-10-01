@extends('layouts.individual')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                    
                        @foreach($questions as $key => $question)
                              
                              <p>{{$question->option_d_en}}:
                                <label><input type="radio" name="{{$question->option_d_en}}" value="d+">most</label>
                                <label><input type="radio" name="{{$question->option_d_en}}" value="d-">least</label>
                              </p>
                              <p>{{$question->option_i_en}}:
                                <label><input type="radio" name="{{$question->option_i_en}}" value="i+">most</label>
                                <label><input type="radio" name="{{$question->option_i_en}}" value="i-">least</label>
                              </p>
                              <p>{{$question->option_c_en}}:
                                <label><input type="radio" name="{{$question->option_c_en}}" value="c+">most</label>
                                <label><input type="radio" name="{{$question->option_c_en}}" value="c-">least</label>
                              </p>
                              <p>{{$question->option_s_en}}:
                                <label><input type="radio" name="{{$question->option_s_en}}" value="s+">most</label>
                                <label><input type="radio" name="{{$question->option_s_en}}" value="s-">least</label>
                              </p>
                              <hr>
                              
                          
                        
                        @endforeach
                      
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
