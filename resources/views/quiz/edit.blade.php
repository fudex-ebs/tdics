@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">اضافة</button></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($dics_questions->isEmpty())
                        <p> لايوجد سوال</p>
                    @else
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">question</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($dics_questions as $count => $question)
                        <tr>

                          <th scope="row">{{$count}}</th>
                          <td>{{$question->content_ar}}</td>
                          
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">اضافة سوال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('dics_question_store') }}" enctype="multipart/form-data">
      <div class="modal-body">
        
            <input type='hidden' name='_token' value="{!! csrf_token() !!}">
            <div class="row">
              <div class="form-group col-md-12">
                  <label>السوال</label>
                  <input type="text" name="content_ar" class="form-control" >
              </div>
              <div class="form-group col-md-12">
                  <label>question</label>
                  <input type="text" name="content_en" class="form-control" >
              </div>
              <div class="form-group col-md-3">
                  <label>خيار D </label>
                  <input type="text" name="option_d_ar" class="form-control" >
              </div>
              <div class="form-group col-md-3">
                  <label>خيار i </label>
                  <input type="text" name="option_i_ar" class="form-control" >
              </div>
              <div class="form-group col-md-3">
                  <label>خيار s </label>
                  <input type="text" name="option_s_ar" class="form-control" >
              </div>
              <div class="form-group col-md-3">
                  <label>خيار c </label>
                  <input type="text" name="option_c_ar" class="form-control" >
              </div>
              <div class="form-group col-md-3">
                  <label>option D </label>
                  <input type="text" name="option_d_en" class="form-control" >
              </div>
              <div class="form-group col-md-3">
                  <label>option i </label>
                  <input type="text" name="option_i_en" class="form-control" >
              </div>
              <div class="form-group col-md-3">
                  <label>option s </label>
                  <input type="text" name="option_s_en" class="form-control" >
              </div>
              <div class="form-group col-md-3">
                  <label>option c </label>
                  <input type="text" name="option_c_en" class="form-control" >
              </div>
            </div>
            
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
        <input type="submit" class="btn btn-primary" value="حفظ">
      </div>
      </form>
    </div>
  </div>
@endsection
