


@foreach($menuitems as $menuitem)
   <ul class="submenu">
   <li><a href="{{url( $menuitem->url)}}" class="level{{ $menuitem->level }}{{ ($menuitem->active) ? ' active':''}}">{{ $menuitem->title}}



</a>
      @if(count($menuitem->children) && ($menuitem->level < $sidemenu_max_levels || $menuitem->active))
        @include('sidemenu', ['menuitems' => $menuitem->children])
      @endif
   </li>
   </ul>
@endforeach
