<?php $danger = "alert alert-danger alert-dismissible"; ?>
<?php $success = "alert alert-success alert-dismissible"; ?>

@if($msg) 

    @if (!$flag)
        <div class="{{$danger}}">
    @endif
    @if ($flag)
        <div class="{{$success}}">
    @endif

        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{$msg}}
       
    </div>
@endif