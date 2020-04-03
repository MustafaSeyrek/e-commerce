<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="{{ url('/') }}/admin">
            <i class="fa fa-th"></i> <span>Anasayfa</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Ürün İşlemleri</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/')}}/admin/urunler"><i class="fa fa-circle-o"></i> Ürün Listesi</a></li>
            <li><a href="{{url('/')}}/admin/logs"><i class="fa fa-circle-o"></i> Ürün Logları</a></li>
          </ul>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
