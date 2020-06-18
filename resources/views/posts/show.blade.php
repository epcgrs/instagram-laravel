@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100" alt="">
        </div>
        <div class="col-4 pt-3">
            <div>
                <div class="pb-2">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle" style="max-width: 40px; margin-right: 20px;">
                        </div>
                        <div>
                            <p class="font-weight-bold mb-0">
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-dark">
                                        {{$post->user->username}}
                                    </span>
                                </a>
                                <a href="#" class="ml-2">Follow</a>
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">
                                {{$post->user->username}}
                            </span>
                        </a>
                    </span>
                    {{$post->caption}}
                </p>
            </div>
        </div>
    </div>

</div>
@endsection
