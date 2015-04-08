<div class="panel panel-default sideBox">
	<div class="panel-heading">
		<strong class="color-blue">Browse by Genre</strong>
	</div>
	<div class="list-group">
	<a class="list-group-item <?= ($track == 'all') ? 'active' : '' ?>" href="{{route('index.genres', array('all')) }}">All</a>
	<?php foreach ($listGenre as $item): ?>
		<a class="list-group-item <?= ($track == $item->friendly_name) ? 'active' : '' ?>" href="{{route('index.genres', array($item->friendly_name))}}"><?php echo $item->name; ?></a>
	<?php endforeach; ?>
	</div>
</div>

<div class="panel panel-default sideBox">
	<div class="panel-heading">
		<strong class="color-blue">Popular Movies</strong>
	</div>
	<div class="bodyBox">
	    <?php for($i = 0; $i < 10; $i++) : ?>
	    <ul class="media-list sidebar-list">
	      <li class="media">
	        <div class="media-left">
	          <a href="#">
	            <img class="media-object" src="{{asset('packages/images/angel-eyes-57.jpg')}}" alt="...">
	          </a>
	        </div>
	        <div class="media-body">
	          <strong class="media-heading">Angel Eyes</strong><br>
	          <span>Watched 123456 times.</span><br>
	          <a href="#" class="btn btn-success btn-xs">See episodes</a>
	        </div>
	      </li>
	    </ul>
	    <?php endfor; ?>
	</div>
</div>

<div class="panel panel-default sideBox">
	<div class="panel-heading">
        <strong class="color-blue">Newly Added</strong>
	</div>
	<div class="bodyBox">
	    <?php for($i = 0; $i < 11; $i++) : ?>
	    <ul class="media-list sidebar-list">
	      <li class="media">
	        <div class="media-left">
	          <a href="#">
	            <img class="media-object" src="{{asset('packages/images/angel-eyes-57.jpg')}}" alt="...">
	          </a>
	        </div>
	        <div class="media-body">
	          <strong class="media-heading">Angel Eyes</strong><br>
	          <span>Friday, March 24</span><br>
	          <a href="#" class="btn btn-success btn-xs">See episodes</a>
	        </div>
	      </li>
	    </ul>
	    <?php endfor; ?>
	</div>
</div>