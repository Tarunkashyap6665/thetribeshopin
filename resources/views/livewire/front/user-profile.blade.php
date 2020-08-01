<div>
    <div class="container bootstrap snippet  " style="margin:30px 30px;">
        <div class="row">
            <div class="col-sm-10">
                <h1>{{$user->name}}</h1>
            </div>
           
        </div>
        <div class="row">
            <livewire:front.template.userprofile.profile-image :user="$user"/>
            <!--/col-3-->
            <livewire:front.template.userprofile.profile-content :user="$user"/>
            
            <!--/tab-content-->

        </div>
        <!--/col-9-->
    </div>
    <!--/row-->
    @push('js')
    <script>
        $(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});
    </script>
    @endpush
</div>