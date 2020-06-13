<ul class="megamenu skyblue">
    <li class="active grid"><a class="color1" href="index.html">Inicio</a></li>
    @foreach ($categories as  $key => $category)
    <li>
       <a class={{$category->color}} href="#">{{$category->name}}</a>
       <div class="megapanel">
          <div class="row">
             @foreach ($category->Sub_Category as $sub_category)
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
             @endforeach  
          </div>
          <div class="row">
             <div class="col2"></div>
             <div class="col1"></div>
             <div class="col1"></div>
             <div class="col1"></div>
             <div class="col1"></div>
          </div>
       </div>
    </li>
    @endforeach 
 </ul>
