<div class="col-sm-3">
    <!--left col-->


    <div class="text-center">
        <img src="{{asset('storage/'.$user->avatar)}}" class="avatar img-circle img-thumbnail"
            alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" wire:model="photos"  wire:change="save" class="text-center center-block file-upload">
    </div>
    </hr><br>
</div>