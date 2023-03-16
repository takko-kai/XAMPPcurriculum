@extends('layouts.app')
@section('title', 'つぶやき新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card p-3">
                    <form action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">


                        @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div>
                            <div class="card-header bg-white" >ホーム</div>
                            <div class=" mx-auto">
                                <input type="text" class="form-control mt-3" name="body" placeholder="今どうしてる？" >{{ old('body') }}</input>
                            </div>
                        </div>
                        {{-- ログイン中のユーザーID の値をテーブルに送る--}}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-outline-light float-right mt-3 text-dark bg-light " value="つぶやく">
                    </form>
                </div>
                <div class="mt-2">
                    @foreach($posts as $post)
                    @foreach($users as $user)
                      @if($user->id == $post->user_id)
                      <div class="card p-3">
                        <div>{{ $user->name}}</div>
                        <div class="text-right">{{ $post->created_at}}</div>
                        <div>{{ $post->body}}</div>
                        @if(Auth::id() == $post->user_id) {{-- 現在ログイン中のユーザーIDとpostテーブルのuser_idが一致するかどうか--}}
                          <div class="text-right">  {{-- 右寄せ--}}
                              <a class="text-danger" href="{{ action('PostController@delete', ['post_id' => $post->id]) }}">削除</a>
                          </div>
                        @endif
                      </div>
                      @endif
                    @endforeach
                  @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection