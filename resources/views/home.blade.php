@extends('partials.layout')
@section('title', 'Twitter')
@section('content')
        <div class="card">
            <div class="card-body">
                <form action="/tweets" method="POST">
                    @csrf
                    <textarea placeholder="Whats happening?" class="textarea" name="content"></textarea>
                    <input class="button is-primary is-rounded my-2" type="submit" value="Tweet">
                </form>
            </div>
        </div>
        @foreach($tweets as $tweet)
            @if($tweet->isRetweet)
                @include('partials.retweet')
            @else
                @include('partials.tweet')
            @endif
        @endforeach
        {{$tweets->links()}}
@endsection
