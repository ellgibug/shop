<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            @foreach($categories as $category)
                @if(!$category->parent_id)
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $category->name }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @foreach($category->sections as $section)
                                <li><a href="#">{{ $section->name }}</a></li>
                            @endforeach
                            @foreach($category->subCategories as $subCategory)
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $subCategory->name }} <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        @foreach($subCategory->sections as $section)
                                            <li><a href="#">{{ $section->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endforeach
        </ul>
    </div><!--/.nav-collapse -->
</div>