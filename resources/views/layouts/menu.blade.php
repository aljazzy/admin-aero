<li class="{{ Request::is('dashboards*') ? 'active' : '' }}">
    <a href="{!! route('dashboards.index') !!}"><i class="fa fa-edit"></i><span>Dasboard</span></a>
</li>

<li class="{{ Request::is('units*') ? 'active' : '' }}">
    <a href="{!! route('units.index') !!}"><i class="fa fa-edit"></i><span>Unit</span></a>
</li>


<li class="{{ Request::is('pesanans*') ? 'active' : '' }}">
    <a href="{!! route('pesanans.index') !!}"><i class="fa fa-edit"></i><span>Pesanan</span></a>
</li>

<li class="{{ Request::is('invoices*') ? 'active' : '' }}">
    <a href="{!! route('invoices.index') !!}"><i class="fa fa-edit"></i><span>Invoice</span></a>
</li>

