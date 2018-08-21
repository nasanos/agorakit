@extends('app')

@section('content')


<h1><a href="{{ route('index') }}"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> {{ trans('messages.discussions') }}</h1>


  <div class="toolbox d-md-flex">
      <div class="d-flex mb-2">
          @include('partials.tags_filter')
      </div>

      <div class="ml-auto">
        <a class="btn btn-primary" href="{{ route('discussions.create') }}">
          <i class="fa fa-plus"></i> {{trans('discussion.create_one_button')}}
        </a>
      </div>
    </div>

    @include ('partials.preferences-show')



    <div class="discussions">
        @forelse( $discussions as $discussion )
            @include('discussions.discussion')
        @empty
            {{trans('messages.nothing_yet')}}
        @endforelse
        {!! $discussions->render() !!}
    </div>



@endsection
