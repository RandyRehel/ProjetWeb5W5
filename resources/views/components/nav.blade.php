


<?php while (have_posts() ) : the_post(); ?>
    @php $navLinks = get_field('sections');
    @endphp

    <ul>
        @foreach($navLinks as $links)
        <li> 
            <a href="{{$links['link']}}">{{$links['txt']}}</a>
            <img src="{!! asset("$imgPath/BoutonNavOrange.png")!!}" alt="image de cercles menus" width="20" height="20">
        </li>
        @endforeach
    </ul>
<?php endwhile; ?>