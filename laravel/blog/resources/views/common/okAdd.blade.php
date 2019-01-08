@if(session('okMsgStatus'))
    <div class="alert alert-success">
        <p>{{session('okMsgStatus')}}</p>
    </div>
@endif