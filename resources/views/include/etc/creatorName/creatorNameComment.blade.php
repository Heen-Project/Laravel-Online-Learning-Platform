<span class="creator" style="font-size:12px;vertical-align:middle;font-weight:normal;font-style:italic">{{ trans('dictionary.created') }} {{$comment->created_at->diffForHumans()}} {{ trans('dictionary.by') }} </span><span style="font-size:14px;vertical-align:middle;font-weight:normal;font-style:italic"><a href="{{ action('ActivityController@userActivityPage', $comment->creator->id) }}">{{$comment->creator->username}}</a></span>