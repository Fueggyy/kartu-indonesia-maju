<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{asset('AdminLTE/dist')}}/img/tommy.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" >{{ Auth::user()->name }}</a>
        <span>
            @if (Auth::user()->roles_id == 1)
            <h6> <b>Admin</b> </h6>
            @else
            <h6> <b>Guest</b> </h6>
            @endif
        </span>
    </div>
</div>