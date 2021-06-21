<footer class="main-footer {{ config('project.footer_text_size') }}">
    <div class="float-right d-none d-sm-inline">
        @lang('global.produced_by')
        <a href="{{ config('project.produced_url') }}"><b>{{ config('project.produced_by') }}</b></a>
    </div>

    <strong>&copy; {{ config('project.since_year') }}
        <a href="{{ route('home') }}"><b>{{ config('project.footer_name') }}</b></a> •
        @lang('global.all_rights_reserved')
    </strong>
</footer>
