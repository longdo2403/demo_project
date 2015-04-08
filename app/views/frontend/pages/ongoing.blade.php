@extends('frontend.layouts.master')
@section('content')
    <?php for ($i = 0; $i< 14; $i++): ?>
    <?php $a = htmlspecialchars('Set in the town of Furano in Hokkaido, Kita no Kunikara centers around the story of the Kuroita family.', ENT_QUOTES) ?>
    <a href="{{route('series', 'bouty-lady-123')}}" class="col-xs-3 drama-box popoverData" data-content="<?php echo htmlentities('<span class="text-danger">Cast: </span> Long Do, Luu Do ..... <br><span class="text-info">Description: </span> ' . $a .' <br> '); ?>"
    rel="popover" data-placement="top" data-original-title="Bouty Lady <?php echo $i; ?>" data-trigger="hover">
        <div class="thumbnail">
            <img src="http://placehold.it/170x180">
            <div class="caption">
                <h5 style="margin-top:0px;" class="text-center text-orange">Bouty Lady <?= $i ?></h5>
                <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete">Drama, Romance, Family</span></p>
            </div>
        </div>
    </a>
    <a href="#" class="col-xs-3 drama-box popoverData" data-content="Popover with data-trigger" rel="popover" data-placement="top" data-original-title="In The Room Large Large <?= $i ?>" data-trigger="hover">
        <div class="thumbnail">
            <img src="http://placehold.it/170x180">
            <div class="caption">
                <h5 style="margin-top:0px;" class="text-center text-orange">In The Room Large Large <?= $i ?></h5>
                <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete">Drama, Romance, Family</span></p>
            </div>
        </div>
    </a>
    <?php endfor; ?>
    <nav class="text-center">
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
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