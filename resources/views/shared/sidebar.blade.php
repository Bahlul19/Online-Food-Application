<!--SideBar Section-->

<div class="col-md-2 col-sm-1 hidden-xs  display-table-cell valign-top" id="side-menu">
    {{--<h1 class="hidden-sm hidden-xs">Nevigation</h1>--}}
    <h1 class="hidden-sm hidden-xs">Admin</h1>
    <ul>


        <!--for Dashboard-->
        <li class="link {{ (Request::is('/') ? 'active' : '') }}">
            <a href="{{url('/')}}">
                <span class="  glyphicon glyphicon-home" aria-hidden="true"></span>
                <span class="hidden-xs hidden-sm">Dashboard</span>
            </a>
        </li>


        <!--for Area-->
        <li class="link {{ (Request::is('areapage') ? 'active' : '') }}">
            <a href="{{url('areapage')}}">
                <span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Area</span>
            </a>
        </li>



        <!--for Restaurant-->
        <li class="link  {{ (Request::is('restaurantpage') ? 'active' : '') }}">
            <a href="{{url('restaurantpage')}}">
                <span class="glyphicon glyphicon-king" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Restaurant</span>
            </a>
        </li>



        <!--for FoodItem-->

        <li class="link  {{ (Request::is('fooditempage') ? 'active' : '') }} ">
            <a href="{{url('fooditempage')}}">
                <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Food Item</span>
            </a>
        </li>



    </ul>
</div>