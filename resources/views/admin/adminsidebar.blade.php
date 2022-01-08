<div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-025-dashboard"></i>
                        <span class="nav-text">Users</span>
                    </a>
                    <ul aria-expanded="false">
                    <li><a href="{{route('allusers')}}">All Users</a></li>
                        <li><a href="index.html">Customers</a></li>
                    </ul>

                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Foods</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="{{route('allfoods')}}">View All Foods</a></li>
                        <li><a href="{{route('addfood')}}">Upload a Food</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-041-graph"></i>
							<span class="nav-text">Chefs</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('all_chef')}}">View All Chefs</a></li>
                        <li><a href="{{route('add_chef')}}">Add a chef</a></li>
                            
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-086-star"></i>
							<span class="nav-text">Category</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="{{route('addcategory')}}">Add Category</a></li>
                        </ul>
                    </li>
  
            </ul>
        
        </div>
    </div>