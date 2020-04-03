@section('content')

<div class="well well-small">

        <!--
        Featured Products
        -->
            <div class="well well-small">
              <hr class="soften"/>
              <div class="row-fluid">
              <ul class="thumbnails">
                  @foreach ($urunler as $rs )
                <li class="span4">
                  <div class="thumbnail">
                    <a class="" href="{{ url('/') }}/urun/{{ $rs->ID }}" title="add to cart"></a>
                    <div class="caption">
                      <h5>Model: {{ $rs->Model }}</h5>
                      <h6>
                          RAM: {{ $rs->RAM }}<br>
                          Memory: {{ $rs->Memory }}<br>
                          Resolution: {{ $rs->Resolution }}<br>
                          Screen Size: {{ $rs->ScreenSize }}<br>
                          Processor Brand: {{ $rs->ProcessorBrand }}<br>
                        </h6>
                      <h4>
                        <span class="pull-right">{{ $rs->Price }} ₺</span>
                        <form class="form-horizontal" action="{{ url('/') }}/sepete_ekle" method="POST">
                          @csrf
                             <div class="box-body">       
                               <div class="form-group">
                                   <input type="hidden" name="urunID" value="{{ $rs->ID }}">
                                   <input type="hidden" name="Name" value="{{ $rs->Model }}">
                                   <input type="hidden" name="Price" value="{{ $rs->Price }}">
                                   <button type="submit" class="icon-shopping-cart ">Sepete Ekle</button>
                                 </div>
                               </div>
                        </form>
                          
                         
                      </h4>
                    </div>
                  </div>
                </li>
              
                @endforeach
              </ul>
        </div>
        </div>


    </div>
@endsection
