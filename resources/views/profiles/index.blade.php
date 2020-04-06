@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fpoa8-1.fna.fbcdn.net/v/t51.2885-19/s150x150/23417210_155295741880268_2549388768956121088_n.jpg?_nc_ht=instagram.fpoa8-1.fna.fbcdn.net&_nc_ohc=Ouo7NGXWGZoAX-fMGua&oh=3bbab042892123f500bb6ffdbae23c6d&oe=5EB544C9" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>8</strong> publicações</div>
                <div class="pr-5"><strong>71</strong> seguidores</div>
                <div class="pr-5"><strong>77</strong> seguindo</div>
            </div>
            <div class="pt-3 font-weight-bold">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div>
                <a href="http://{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fpoa8-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/67898478_616646792074598_2378720654874744785_n.jpg?_nc_ht=instagram.fpoa8-2.fna.fbcdn.net&_nc_cat=102&_nc_ohc=DB0wvCkNNKIAX823GnY&oh=64b3d6f8acd4aeaa3ffeb74f5e1e1503&oe=5EB5D8D6" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fpoa8-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/69461191_150547676050091_164181226880398980_n.jpg?_nc_ht=instagram.fpoa8-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=t83xm2ilLwcAX_rxCEk&oh=74e7984821e0b74626475c3d29c1c9b7&oe=5E975D96" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fpoa8-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/68740681_489046578550014_3323919358681761081_n.jpg?_nc_ht=instagram.fpoa8-2.fna.fbcdn.net&_nc_cat=106&_nc_ohc=aRqexBSLEUQAX-r9zGi&oh=c916be1643dec3104ad54c954c656898&oe=5E980C69" class="w-100">
        </div>
    </div>
</div>
@endsection
