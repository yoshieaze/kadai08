@extends('layouts.app')

@section('content')

<section class="content-header">
    {{-- <main class="py-4"> --}}
        <div class="container">
            <div class="col-sm-6 mb-4">
                <h1>Search from Qiita</h1>
            </div>
            {{-- 検索 --}}
            <div class="row">
                {!! Form::open(['route' => 'qiita.index', 'method' =>'search']) !!}
                    <div class="row form-group col-sm-10">
                        {{-- {!! Form::label('search', 'Search:') !!} --}}
                        {!! Form::text('search',null, ['class' => 'form-control']) !!}
                        {{-- <a class="btn btn-success float-right mt-4"
                        href="#"> --}}
                        {!! Form::submit('Search', ['class' => 'btn btn-success mt-3']) !!}

                        {{-- </a> --}}
                    </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-11">
                    <table class="table table-striped  mt-5">
                        <tr class="table-success">
                            <th>タイトル</th>
                            <th>いいね数</th>
                            <th>コメント数</th>
                            <th>作成日</th>
                        </tr>
                        @foreach($qiitas as $qiita)
                        <tr>
                            <td>{{$qiita['title']}}</td>
                            <td>{{$qiita['likes_count']}}</td>
                            <td>{{$qiita['comments_count']}}</td>
                            <td>{{$qiita['created_at']}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    {{-- </main> --}}
</section>
@endsection
