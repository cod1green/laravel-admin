<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        @lang('admin.produced_by') <a href="{{ config('admin.produced_url') }}"><b>{{ config('admin.produced_by')
                }}</b></a>
        • @lang('admin.version') {{ config('admin.version') }}
    </div>
    <!-- Default to the left -->
    <strong>@lang('admin.all_rights_reserved') • {{ config('admin.since_year') }}-{{ Carbon\carbon::now()->year }}
        &copy;
        <a href="{{ route('home') }}"><b>{{ config('admin.footer_name') }}</b></a></strong>
</footer>
