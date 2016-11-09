
    <form role="search" method="get" class="search-form form-horizontal" action="<?php echo home_url( '/' ); ?>">
      <div class="form-group">
        <label class="control-label col-sm-2" for="search">Search:</label>
        <div class="col-sm-10">
          <input type="search" class="form-control" id="search" placeholder="<?php the_search_query(); ?>" value="" name="s">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary" name="button" value="Search">Search</button>
        </div>
      </div>
    </form>
