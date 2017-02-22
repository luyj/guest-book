@foreach($messages as $message)
<p>{{$message->created_at}} {{$message->location}} </p>
<p>{{$message->body}}</p>
@endforeach
<form action="message" method="POST">
{!! csrf_field() !!}
<textarea name="body" required="required" placeholder="请输入内容..."></textarea>
<button>提交</button>
</form>

