    
    <ul class="megamenu skyblue">
        <li class="active grid"><a class="color1" href="index.html">Home</a></li>
        @foreach ($categories as  $key => $category)
        <li class="grid"><a class={{$category->color}} href="#">{{$category->name}}</a>
            @foreach ($category->Sub_Category as $sub_category)
            <div class="megapanel">
                <div class="row">
                    <div class="col1">
                        <div class="h_nav">
                            <h4>{{$sub_category->name}}</h4>
                            <ul>
                                @foreach ($sub_category->Sub_SubCategory as $sub_subcategory)
                                <li><a href="women.html">{{$sub_subcategory->name}}</a></li>
                                @endforeach
                            </ul>	
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </li>
        @endforeach
        
    </ul>