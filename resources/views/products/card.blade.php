@include('template.nav')
<div class="container d-flex col justify-content-center">

    <div class="contain">
        <div class="hh d-flex flex-column " >
            <div class="picture">

            </div>
            
            <div>
                <h1 class="txt">{{$product->title}}</h1>
                    <div class="txtCadr">
                        <p class="txt1"> 
                            {{$product->description}}
                        </p>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="contain">
        <div class="hh">
           <div class="IconArea d-flex align-items-center justify-content-center">
            <i class='bx bxs-bath'></i>
          </div>

           <div class="TextArea">
            
           </div>
    </div>
</div>