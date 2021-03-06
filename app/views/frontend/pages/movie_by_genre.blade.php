@extends('frontend.layouts.master')
@section('content')
    <?php if (!$listByGenre->isEmpty()): ?>
        <?php foreach ($listByGenre as $item): ?>
        <?php $description = htmlspecialchars($item->description, ENT_QUOTES); ?>
        <a href="{{route('series', $item->friendly_title)}}" class="col-xs-3 drama-box popoverData" data-content="
        <?php echo htmlentities(
            '<span class="text-danger">Status: </span>' . $item['relations']['status']->name . '<br>
             <span class="text-danger">Cast: </span> ' . FrontHelper::generateCastString($item->cast_ids, $arrCast) . ' ... <br>
             <span class="text-info">Description: </span> ' . str_limit($description, $limit = 150, $end = '...') .' <br> '); ?>"
        rel="popover" data-placement="top" data-original-title="{{{$item->title}}}" data-trigger="hover">
            <div class="thumbnail" style="height: 270px;">
                <img class="boxImgMovie" src="<?= asset("public/packages/images/$item->main_picture") ?>" title="{{$item->title}}" alt="{{$item->title}}">
                <div class="caption">
                    <div style="height: 33px; ">
                        <h5 style="margin-top:0px;" class="text-center text-orange">{{str_limit($item->title, 30, '...')}}</h5>
                    </div>
                    <div style="height: 25px; ">
                        <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete"><?= str_limit(FrontHelper::generateGenresString($item->genre_ids, $arrGenres), 35, '...') ?></span></p>
                    </div>
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