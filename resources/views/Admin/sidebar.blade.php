<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/') }}">
                        Dashboard
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('items') }}">
                        Items
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('admin/orders') }}">
                        Orders
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('citys') }}">
                        City
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('rejects') }}">
                        Rejected Orders
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
