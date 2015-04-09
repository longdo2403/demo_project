@extends('frontend.layouts.master')
@section('content')
    <?php if (!$listByGenre->isEmpty()): ?>
        <?php foreach ($listByGenre as $item): ?>
        <?php echo $item->name ?>
        <?php $description = htmlspecialchars($item->description, ENT_QUOTES); ?>
        <a href="{{route('series', $item->friendly_title)}}" class="col-xs-3 drama-box popoverData" data-content="<?php echo htmlentities('<span class="text-danger">Cast: </span> <a href="#">Long Do</a>, <a href="#">Luu Do</a> ..... <br><span class="text-info">Description: </span> ' . $description .' <br> '); ?>"
        rel="popover" data-placement="top" data-original-title="{{$item->title}}" data-trigger="hover">
            <div class="thumbnail">
                <img class="boxImgMovie" src="<?= asset("public/packages/images/$item->main_picture") ?>" title="{{$item->title}}" alt="{{$item->title}}">
                <div class="caption">
                    <h5 style="margin-top:0px;" class="text-center text-orange">{{$item->title}}</h5>
                    <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete">Drama, Romance, Family</span></p>
                </div>
            </div>
        </a>
        
        <?php endforeach; ?>
        <span class="clearfix"></span>
        <nav class="text-center ">
          <?php echo $listByGenre->links(); ?>
        </nav>
    <?php else: ?>
    <p class="alert alert-warning">The content is empty !!</p>
    <?php endif; ?>
    <script>
    $(document).ready(function(){
        $(".popoverData").popover({
        	html : true,
        	content: function() {
        		return $('#popover_content_wrapper').html();
            }
        });
    })
    </script>
@stop