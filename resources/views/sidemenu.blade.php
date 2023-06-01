

 
@foreach($menuitems as $menuitem)
   <ul class="submenu">
   <li><a href="{{url($subsite .'/' .$menuitem->url)}}">{{ $menuitem->title}}</a>
      @if(count($menuitem->children))
        @include('sidemenu', ['menuitems' => $menuitem->children]) 
      @endif
   </li>   
   </ul>
@endforeach