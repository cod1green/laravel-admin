<footer class="main-footer {{ config('admin.footer_text_size') }}">
    <strong>&copy; {{ config('admin.since_year') }}
        <a href="{{ route('home') }}"><b>{{ config('admin.footer_name') }}</b></a> •
        @lang('global.all_rights_reserved')
    </strong>

    <div class="float-right d-none d-sm-inline">
        @lang('global.produced_by')
        <a href="{{ config('admin.produced_url') }}" target="_blank"><b>{{ config('admin.produced_by') }}</b></a>
    </div>
</footer>
