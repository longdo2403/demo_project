<div class="border-head">
    <h3>
        <strong class="color-blue">Popular Movies</strong>
    </h3>
</div>
<div class="temp2">
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
<br>

<div class="border-head">
    <h3>
        <strong class="color-blue">Newly Added</strong>
    </h3>
</div>
<div class="temp3">
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