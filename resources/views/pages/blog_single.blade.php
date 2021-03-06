@extends('layouts.app')
@section('content')
    @foreach($posts as $row)
        <div class="single_post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="single_post_title">
                            @if(Session()->get('lang') == 'arabic')
                               <h1 style="text-align: center"> {{ $row->post_title_ar }}</h1>
                            @else
                               <h1 style="text-align: center"> {{ $row->post_title_en }}</h1>
                            @endif
                        </div>

                        <div class="single_post_text">
                            <p> @if(Session()->get('lang') == 'arabic')
                                    {!! $row->details_ar !!}
                                @else
                                    {!! $row->details_en !!}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
