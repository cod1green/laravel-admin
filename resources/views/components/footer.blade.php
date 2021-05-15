<!-- Main Footer -->
<footer class="main-footer {{ config('project.footer_text_size') }}">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        @lang('global.produced_by')
        <a href="{{ config('project.produced_url') }}"><b>{{ config('project.produced_by') }}</b></a>
    </div>
    <!-- Default to the left -->
    <strong>@lang('global.all_rights_reserved') • {{ config('project.since_year') }}-{{ Carbon\carbon::now()->year }}
        &copy;
        <a href="{{ route('home') }}"><b>{{ config('project.footer_name') }}</b></a></strong>
</footer>
