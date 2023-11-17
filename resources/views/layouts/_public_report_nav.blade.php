<div class="list-group list-group-transparent list-group-horizontal-md mb-0 text-uppercase">
    <a href="{{ route('public_reports.in_months', Request::all()) }}" class="list-group-item list-group-item-action {{ in_array(Request::segment(2), [null, 'bulanan']) ? 'active' : '' }}">
        <span class="icon mr-2"><i class="fe fe-home"></i></span>{{ __('report.view_monthly') }}
    </a>
    <a href="{{ route('public_reports.in_out', Request::all()) }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'per_kategorii' ? 'active' : '' }}">
        <span class="icon mr-2"><i class="fe fe-package"></i></span>{{ __('report.view_in_out') }}
    </a>
    <a href="{{ route('public_reports.in_weeks', Request::all()) }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'mingguan' ? 'active' : '' }}">
        <span class="icon mr-2"><i class="fe fe-alert-circle"></i></span>{{ __('report.view_weekly') }}
    </a>
</div>

<div class="list-group list-group-transparent list-group-horizontal-md mb-0 text-uppercase">
    <a href="{{ route('public_reports.finance.summary', Request::all()) }}" class="list-group-item list-group-item-action {{ in_array(Request::segment(2), [null, 'ringkasan']) ? 'active' : '' }}">
        <span class="icon mr-2"><i class="fe fe-home"></i></span>{{ __('report.finance_summary') }}
    </a>
    <a href="{{ route('public_reports.finance.categorized', Request::all()) }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'per_kategori' ? 'active' : '' }}">
        <span class="icon mr-2"><i class="fe fe-package"></i></span>{{ __('report.finance_categorized') }}
    </a>
    <a href="{{ route('public_reports.finance.detailed', Request::all()) }}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'rincian' ? 'active' : '' }}">
        <span class="icon mr-2"><i class="fe fe-alert-circle"></i></span>{{ __('report.finance_detailed') }}
    </a>
</div>
