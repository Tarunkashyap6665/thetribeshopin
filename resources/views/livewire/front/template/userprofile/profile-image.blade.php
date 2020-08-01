<div>

    <div class="col-sm-3">
        <!--left col-->
    
    <form wire:submit.prevent="save">

        <div class="text-center">
            <img src="{{asset('storage/'.$user->avatar)}}" class="avatar img-circle img-thumbnail"
            alt="avatar">
            <h6>Upload a different photo...</h6>
            <input type="file" wire:model="photos" class="text-center center-block file-upload">
            <button type="submit">Submit</button>
        </div>
    </form>
        </hr><br>
        <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" >logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form></div>
          </div>
    </div>
</div>